@extends('user.base')
@section('content')
@inject('injected','App\Defaults\Custom')

<div class="container-fluid py-4">
    <div class="row">
        <!-- Overview Section -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Overview</h5>
                </div>
                <div class="card-body text-center">
                    <img class="rounded-circle border border-white"
                         src="{{ asset('storage/'.$user->profile_picture) }}" width="100" height="100">
                    <h6 class="mt-3">Available Balance</h6>
                    <p class="fs-4 fw-bold">{{$user->account_currency}} {{number_format($user->balance,2)}}</p>
                    <p class="text-muted">{{ $user->first_name.' '.$user->last_name }}</p>
                </div>
            </div>
        </div>
        <!-- Current Account -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-secondary text-white d-flex justify-content-between">
                    <h5 class="mb-0">{{ $user->account_type }}</h5>
                    <a href="#" class="btn btn-sm btn-light">Transfer Fund</a>
                </div>
                <div class="card-body">
                    <p class="mb-1">Account Number</p>
                    <h5 class="fw-bold">{{ maskAccountNumber($user->account_number) }}</h5>
                    <p class="fs-4 fw-bold">{{$user->account_currency}} {{number_format($user->balance,2)}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Sections -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white d-flex justify-content-between">
                    <h6 class="mb-0">Loans and Credit</h6>
                    <a href="/pay_bills/" class="btn btn-sm btn-light">Pay Bills</a>
                </div>
                <div class="card-body">
                    <p>Business Support Loan: <span class="fw-bold">{{$user->account_currency}} {{number_format($user->loan,2)}}</span></p>
                    <p>Credit Score: <span class="fw-bold">{{ $user->credit_score }}</span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-info text-white">
                    <h6 class="mb-0">Recent Transactions</h6>
                </div>
                <div class="card-body">
                    <p>No recent transactions available.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Section -->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-body">
                    <h5>We’re here to help you!</h5>
                    <p class="text-muted">Ask a question, report an issue, or request support. Our team will get back to you via email.</p>
                    <a href="/ticket/" class="btn btn-lg btn-primary">Get Support Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
