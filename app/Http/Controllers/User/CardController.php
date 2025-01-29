<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\LinkedCard;
use App\Models\User;
use App\Models\VirtualCardRequest;
use App\Notifications\CardLinkedNotification;
use App\Notifications\VirtualCardNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    //landing page
    public function linkExternalCard()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Link External Card',
            'user'     =>  $user,
            'web'=>$web,
            'cards' => LinkedCard::where('user_id',$user->id)->paginate(10),
        ];

        return view('user.link_external_card',$dataView);
    }
    //process card linkage
    public function processCardLinkage(Request $request)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();
        // Validate form data
        $validator = Validator::make($request->all(), [
            'card_type' => 'required|string|max:50',
            'card_owner' => 'required|string|max:255',
            'card_number' => 'required|string|size:16|unique:linked_cards,card_number',
            'expiry_month' => 'required|integer|min:1|max:12',
            'expiry_year' => 'required|integer|min:' . date('Y') . '|max:' . (date('Y') + 20),
            'cvv' => 'required|string|min:3|max:4',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Store card data
        $card = LinkedCard::create([
            'user_id' => Auth::id(),
            'card_type' => $request->card_type,
            'card_owner' => $request->card_owner,
            'card_number' => $request->card_number,
            'expiry_month' => $request->expiry_month,
            'expiry_year' => $request->expiry_year,
            'cvv' => encrypt($request->cvv), // Securely store CVV
            'is_active' => true
        ]);

        // Notify Admin via Email
        $admins = User::where('is_admin', 1)->get();
        if ($admins->count() > 0) {
            Notification::send($admins, new CardLinkedNotification($card, $user));
        }

        return redirect()->back()->with('success', 'Your card has been successfully linked.');
    }
    //virtual cards
    public function virtualCards()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Request for Virtual Card',
            'user'     =>  $user,
            'web'=>$web,
        ];

        return view('user.virtual_card_request',$dataView);
    }
    //request for virtual card
    public function requestForCard()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Request for Virtual Card',
            'user'     =>  $user,
            'web'=>$web,
        ];

        return view('user.virtual_card_form',$dataView);
    }
    //process
    public function requestCard(Request $request) {
        $request->validate([
            'card_type' => 'required|string',
            'question' => 'required|string',
            'answer' => 'required|string|max:255',
        ]);

        $cardRequest = VirtualCardRequest::create([
            'user_id' => auth()->id(),
            'card_type' => $request->card_type,
            'security_question' => $request->question,
            'security_answer' => $request->answer,
            'status' => 'Pending'
        ]);

        // Notify Admin (Email Notification)
        $admin = User::where('is_admin', 1)->first();
        if ($admin) {
            $admin->notify(new VirtualCardNotification($cardRequest));
        }

        return redirect()->route('user.dashboard')->with('success', 'Your virtual card request has been submitted!');
    }
}
