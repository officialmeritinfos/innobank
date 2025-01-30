@extends('home.base')
@section('content')

    <!--
    =====================================================
        Introduction: Why Choose Us?
    =====================================================
    -->
    <div class="block-feature-thirty bg-one border-30 z-1 pt-100 lg-pt-80 pb-130 lg-pb-80 mt-30 lg-mt-20 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 m-auto">
                    <div class="title-one text-center mb-80 lg-mb-40">
                        <h2>7,00000+ Users Trust Our Banking Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 order-lg-last">
                    <div class="ps-xl-5 ms-xxl-5">
                        <p class="fs-22 fw-500 text-dark mb-65 md-mb-40">
                            We provide <strong>secure, innovative, and flexible</strong> financial solutions designed for individuals and businesses. From <strong>instant payments</strong> to <strong>smart financial management</strong>, we are here to <strong>simplify your banking experience</strong>.
                        </p>
                        <p class="fs-22 fw-500 text-dark">
                            Enjoy <strong>low transaction fees, seamless global transfers</strong>, and <strong>FDIC-insured USD accounts</strong> to safeguard your funds.
                        </p>

                        <div class="counter-wrapper mt-100 xl-mt-60 lg-mt-30">
                            <div class="row">
                                <div class="col-7">
                                    <div class="counter-block-one mt-20">
                                        <div class="main-count fw-500 color-dark">$<span class="counter">9.1</span>B+</div>
                                        <span class="fs-22">Processed Transactions</span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="counter-block-one mt-20">
                                        <div class="main-count fw-500 color-dark"><span class="counter">1.2</span>M</div>
                                        <span class="fs-22">Active Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('home/images/media/img_35.jpg')}}" alt="Banking Solutions" class="border-30 md-mt-40">
                </div>
            </div>
        </div>
        <img src="{{asset('home/images/shape/shape_85.svg')}}" alt="" class="shapes shape_02">
    </div>
    <!-- /.block-feature-thirty -->

    <!--
    =====================================================
        Our Key Services
    =====================================================
    -->
    <div class="block-feature-two mb-30 lg-mb-20">
        <div class="row gx-xl-4">
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20">
                <div class="card-style-one text-center border-30 bg-four w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_80.svg')}}" alt="Instant USD Transfers">
                    </div>
                    <h3>Instant USD Transfers</h3>
                    <p class="fs-24 fw-500 text-dark">Send and receive payments in <strong>minutes</strong>, no hidden fees, no delays.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.1s">
                <div class="card-style-one text-center border-30 bg-four w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_81.svg')}}" alt="Advanced Security">
                    </div>
                    <h3>Advanced Security</h3>
                    <p class="fs-24 fw-500 text-dark"><strong>End-to-end encryption</strong> and <strong>multi-factor authentication</strong> protect your transactions.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.2s">
                <div class="card-style-one text-center border-30 bg-four w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_82.svg')}}" alt="Global Money Transfers">
                    </div>
                    <h3>Global Money Transfers</h3>
                    <p class="fs-24 fw-500 text-dark">Send money worldwide at <strong>real exchange rates with zero hidden charges</strong>.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20">
                <div class="card-style-one text-center border-30 bg-four w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_83.svg')}}" alt="24/7 Customer Support">
                    </div>
                    <h3>24/7 Customer Support</h3>
                    <p class="fs-24 fw-500 text-dark">Get assistance whenever you need it with our <strong>dedicated support team</strong>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.block-feature-two -->

    <!--
    =====================================================
        Why Choose Us? - More Details
    =====================================================
    -->
    <div class="block-feature-one border-30 bg-one mb-30 lg-mb-20 pt-150 lg-pt-80 pb-200">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-lg-6">
                    <div class="pe-lg-5 me-xxl-4 md-mb-60">
                        <div class="title-one">
                            <h2>Why We Are the Perfect Fit for You</h2>
                        </div>
                        <div class="accordion accordion-style-five me-xxl-5 mt-35 lg-mt-30" id="accordionThree">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Smart Virtual Cards
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
                                    <div class="accordion-body">
                                        <p class="fs-22">Issue <strong>secure, disposable</strong> virtual cards for online transactions and subscriptions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Regulated & Compliant
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                    <div class="accordion-body">
                                        <p class="fs-22">We are <strong>fully licensed</strong> and operate under strict financial regulations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 col-lg-6 col-md-7 m-auto text-end">
                    <div class="img-holder z-1 d-inline-block position-relative">
                        <img src="{{asset('home/images/assets/card_01.png')}}" alt="">
                        <img src="{{asset('home/images/assets/card_02.png')}}" alt="" class="card_01 wow fadeInLeft" data-wow-delay="0.1s">
                        <img src="{{asset('home/images/assets/card_03.png')}}" alt="" class="card_02 wow fadeInLeft" data-wow-delay="0.2s">
                        <img src="{{asset('home/images/shape/shape_02.svg')}}" alt="" class="shapes shape_01 wow fadeInLeft" data-wow-delay="0.3s">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.block-feature-one -->

@endsection
