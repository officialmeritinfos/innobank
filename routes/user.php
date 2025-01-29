<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\User\Dashboard;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\Deposits;
use App\Http\Controllers\User\Investments;
use App\Http\Controllers\User\ManagedAccounts;
use App\Http\Controllers\User\Referrals;
use App\Http\Controllers\User\Settings;
use App\Http\Controllers\User\Transfers;
use App\Http\Controllers\User\Withdrawals;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your web.
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
| To access this endpoint, the prefix 'account' has to be added.
| You can change this in the RouteServiceProvider file
|
*/


Route::get('dashboard',[Dashboard::class,'landingPage'])->name('user.dashboard');
/*================ SETTINGS ROUTE ====================*/
Route::get('settings',[Settings::class,'landingPage'])->name('setting.index');
Route::post('update-settings',[Settings::class,'processSetting'])->name('settings.update');
Route::post('update-password',[Settings::class,'processPassword'])->name('password.update');
Route::post('update-photo',[Settings::class,'processPhoto'])->name('photo.update');
Route::get('kyc',[Settings::class,'kyc'])->name('setting.kyc');
Route::post('update-kyc',[Settings::class,'submitKyc'])->name('kyc.update');
/*================ TRANSFERS ROUTE ====================*/
Route::get('transfer',[Transfers::class,'landingPage'])->name('transfer.index');
Route::post('transfer/new',[Transfers::class,'newTransfer'])->name('transfer.new');
Route::get('transfer/{id}/detail',[Transfers::class,'showDetail'])->name('transfer.detail');
/*================ DEPOSIT ROUTE ====================*/
Route::get('deposit/index',[DepositController::class,'landingPage'])->name('deposit.index');
Route::post('deposit/new',[DepositController::class,'deposit'])->name('deposit.new');
Route::get('deposit/{id}/detail',[DepositController::class,'showDeposit'])->name('deposit.detail');
Route::post('deposit/{id}/submit-proof',[DepositController::class,'submitPaymentProof'])->name('deposit.submitProof');

Route::get('logout',[Login::class,'logout']);
