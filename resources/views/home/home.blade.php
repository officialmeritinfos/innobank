@extends('home.base')
@section('content')


    <!--
    =============================================
        Hero Banner
    ==============================================
    -->
    <div class="hero-banner-one bg-one border-30 z-1 pt-120 lg-pt-80 pb-100 lg-pb-70 mt-30 lg-mt-20 position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <p class="fs-24 fw-500 text-dark mb-10 wow fadeInUp">Join Now!</p>
                    <h1 class="hero-heading wow fadeInUp">SEAMLESS BANKING <img src="{{asset('home/images/shape/shape_01.svg')}}" alt="" class="d-inline-block"></span><span class="d-inline-block position-relative">INSTANT TRANSFERS <img src="{{asset('home/images/shape/shape_01.svg')}}" alt="" class="d-inline-block"></span>SMART SAVINGS</h1>
                    <div class="row">
                        <div class="col-xxl-8 col-lg-10">
                            <p class="fs-24 text-dark pt-25 pb-30 lg-pb-20 xs-pb-10 wow fadeInUp" data-wow-delay="0.1s">
                                Manage your finances effortlessly with our secure and innovative banking solutions. Experience
                                fast, reliable, and globally accessible financial services tailored to your needs.
                            </p>
                        </div>
                    </div>
                    <ul class="style-none d-flex align-items-center flex-wrap">
                        <li class="mt-10"><a href="{{ route('register') }}" class="btn-one me-4">Register</a></li>
                        <li class="mt-10"><a href="{{ route('login') }}" class="btn-two xl">Login</a></li>
                    </ul>
                    <p class="fs-22 pt-100 md-pt-50 md-pb-20">
                        <span class="fw-500 text-dark text-decoration-underline">Join 270,000+</span> customers today. </p>
                </div>
            </div>
        </div>
        <div class="client-logo-wrapper">
            <div class="container">
                <div class="partner-logo-one">
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_01.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_02.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_03.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_04.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_05.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_06.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{asset('home/images/logo/p_logo_04.png')}}" alt="" class="m-auto"></div>
                </div>
            </div>
        </div>
        <img src="{{asset('home/images/assets/ils_01.png')}}" alt="" class="shapes illustration">
    </div>
    <!-- /.hero-banner-one -->





    <!--
    =====================================================
        BLock Feature One
    =====================================================
    -->
    <div class="block-feature-one border-30 bg-three mt-30 lg-mt-20 pt-150 lg-pt-80 pb-200 lg-pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-lg-6 order-lg-last">
                    <div class="ps-lg-5 ms-xxl-4 md-mb-60">
                        <div class="title-one">
                            <h2>SMART CARDS FOR BUSINESS & PERSONAL FINANCE</h2>
                        </div>
                        <p class="fs-28 text-dark fw-500 mt-40 md-mt-20">
                            Unlock seamless transactions with our virtual and physical debit cards, backed by secure, multi-currency
                            banking solutions. Whether you're a business owner or an individual, our smart cards empower you with flexibility and global access.
                        </p>
                        <div class="counter-wrapper mt-25 mb-70 lg-mb-50">
                            <div class="row">
                                <div class="col-7">
                                    <div class="counter-block-one mt-20">
                                        <div class="main-count fw-500 color-dark">$<span class="counter">9.1</span>B+</div>
                                        <span class="fs-22">Total transaction volume covered</span>
                                    </div>
                                    <!-- /.counter-block-one -->
                                </div>
                                <div class="col-5">
                                    <div class="counter-block-one mt-20">
                                        <div class="main-count fw-500 color-dark"><span class="counter">270</span>k+</div>
                                        <span class="fs-22">Users enjoying low-interest rates</span>
                                    </div>
                                    <!-- /.counter-block-one -->
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="btn-two xl">Order Your Card Now!</a>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-7 m-auto text-end order-lg-first">
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


    <!--
    =====================================================
        BLock Feature Two
    =====================================================
    -->
    <div class="block-feature-two mb-30 lg-mb-20">
        <div class="row gx-xl-4">
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20">
                <div class="card-style-one text-center border-30 bg-white w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{asset('home/images/icon/icon_01.svg')}}" alt=""></div>
                    <h3>Instant Payments in <br> minutes</h3>
                    <p class="fs-24 fw-500 text-dark">
                        Receive payments from global employers and clients directly into your account within minutes—no delays, no hidden fees.
                    </p>
                </div>
                <!-- /.card-style-one -->
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.1s">
                <div class="card-style-one text-center border-30 bg-white w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{asset('home/images/icon/icon_02.svg')}}" alt=""></div>
                    <h3>Top-Notch Security &  <br> Protection</h3>
                    <p class="fs-24 fw-500 text-dark">
                        Zero monthly fees for holding your money securely. Your funds are protected with multi-layer encryption and bank-grade security.
                    </p>
                </div>
                <!-- /.card-style-one -->
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.2s">
                <div class="card-style-one text-center border-30 bg-white w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{asset('home/images/icon/icon_03.svg')}}" alt=""></div>
                    <h3>Easy Global Transfers</h3>
                    <p class="fs-24 fw-500 text-dark">
                        Send money to your local bank account at the best exchange rates with no hidden charges—fast, reliable, and convenient.
                    </p>
                </div>
                <!-- /.card-style-one -->
            </div>
        </div>
    </div>
    <!-- /.block-feature-two -->


    <!--
    =====================================================
        BLock Feature Three
    =====================================================
    -->
    <div class="block-feature-three border-30 bg-two pt-130 lg-pt-80 md-pt-30 pb-150 lg-pb-80 mb-30 lg-mb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="title-one mb-30 mt-50">
                        <h2>Effortless Global Money.  <span class="d-inline-block position-relative">with <img src="{{asset('home/images/shape/shape_03.svg')}}" alt="" class="d-inline-block"></span> <br> Low Fees</h2>
                    </div>
                    <p class="fs-24 fw-500 text-dark">
                        Sending money internationally has never been easier. Whether you're making online purchases, covering
                        holiday expenses, or supporting family abroad, our platform ensures seamless global transfers with the lowest exchange rates.
                    </p>
                </div>
                <div class="col-lg-6 col-md-8 m-auto text-end wow fadeInRight">
                    <div class="img-holder-one position-relative d-inline-block z-1 md-mt-40">
                        <img src="{{asset('home/images/assets/card_04.png')}}" alt="">
                        <img src="{{asset('home/images/shape/shape_04.svg')}}" alt="" class="shapes shape_01">
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-100 md-mt-30">
                <div class="col-lg-6 wow fadeInRight order-lg-last">
                    <div class="ps-xl-5">
                        <div class="title-one mb-30 mt-50">
                            <h2>Seamless Card Management for <span class="d-inline-block position-relative"> Effortless Transactions<img src="{{asset('home/images/shape/shape_03.svg')}}" alt="" class="d-inline-block"></span></h2>
                        </div>
                        <p class="fs-24 fw-500 text-dark">
                            Enjoy the convenience of virtual debit cards designed for your everyday transactions. Our virtual
                            cards offer a secure and flexible way to shop online, pay for subscriptions, and withdraw funds
                            from ATMs without the hassle of carrying a physical card.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 m-auto wow fadeInLeft order-lg-first">
                    <div class="img-holder-two position-relative d-inline-block z-1 md-mt-20">
                        <img src="{{asset('home/images/assets/card_05.png')}}" alt="">
                        <img src="{{asset('home/images/shape/shape_05.svg')}}" alt="" class="shapes shape_01">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.block-feature-three -->


    <!--
    =====================================================
        Feedback Section One
    =====================================================
    -->
    <div class="feedback-section-one mb-30 lg-mb-20">
        <div class="feedback-slider-one">
            <div class="item">
                <div class="feedback-block-one bg-white border-30">
                    <div class="d-flex align-items-center justify-content-between">
                        <img src="{{asset('home/images/logo/p_logo_07.png')}}" alt="">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('home/images/icon/icon_04.svg')}}" alt=""></div>
                    </div>
                    <blockquote>
                        "A seamless banking experience! **Transactions are smooth, fast, and secure**. I’ve never felt more in control of my finances."
                    </blockquote>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <p class="m0"><span class="fw-500 text-dark fs-20">David Johnson,</span> Financial Analyst</p>
                        <ul class="style-none d-flex rating">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="feedback-block-one bg-white border-30">
                    <div class="d-flex align-items-center justify-content-between">
                        <img src="{{asset('home/images/logo/p_logo_08.png')}}" alt="">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('home/images/icon/icon_04.svg')}}" alt=""></div>
                    </div>
                    <blockquote>
                        "The **best digital banking platform** I’ve used. Instant fund transfers, seamless bill payments, and **top-notch security**."
                    </blockquote>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <p class="m0"><span class="fw-500 text-dark fs-20">Sophia Reynolds,</span> CEO, Tech Innovators</p>
                        <ul class="style-none d-flex rating">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="feedback-block-one bg-white border-30">
                    <div class="d-flex align-items-center justify-content-between">
                        <img src="{{asset('home/images/logo/p_logo_07.png')}}" alt="">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('home/images/icon/icon_04.svg')}}" alt=""></div>
                    </div>
                    <blockquote>
                        "**International money transfers have never been easier**. Competitive rates, instant processing, and no hidden fees!"
                    </blockquote>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <p class="m0"><span class="fw-500 text-dark fs-20">Liam Carter,</span> Freelancer & Digital Nomad</p>
                        <ul class="style-none d-flex rating">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="feedback-block-one bg-white border-30">
                    <div class="d-flex align-items-center justify-content-between">
                        <img src="{{asset('home/images/logo/p_logo_08.png')}}" alt="">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{asset('home/images/icon/icon_04.svg')}}" alt=""></div>
                    </div>
                    <blockquote>
                        "A truly **modern banking experience**! The **virtual debit cards and bill payment features** make life so much easier."
                    </blockquote>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <p class="m0"><span class="fw-500 text-dark fs-20">Emily Brooks,</span> E-commerce Entrepreneur</p>
                        <ul class="style-none d-flex rating">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.feedback-section-one -->

    <!--
    =====================================================
        FAQ Section One
    =====================================================
    -->
    <div class="faq-section-one bg-four position-relative z-1 pt-150 lg-pt-80 pb-120 lg-pb-80 border-30 mb-30 lg-mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="title-one text-center mb-80 xl-mb-60 md-mb-40">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion accordion-style-one" id="accordionOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What services does this bank offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p class="fs-22">We provide a wide range of financial solutions, including savings and checking accounts, international money transfers, virtual debit cards, bill payments, and secure online banking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I open an account?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p class="fs-22">Opening an account is quick and easy. Simply sign up online, verify your identity, and start managing your funds in minutes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Are my transactions secure?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p class="fs-22">Yes, we use advanced encryption and security measures to ensure your transactions and personal data are fully protected.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="accordion accordion-style-one" id="accordionTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAOne" aria-expanded="false" aria-controls="collapseAOne">
                                    How can I transfer money internationally?
                                </button>
                            </h2>
                            <div id="collapseAOne" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                                <div class="accordion-body">
                                    <p class="fs-22">Our international transfer feature allows you to send money globally at competitive exchange rates with low fees. Simply log in to your account, select your recipient, and complete the transfer securely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseATwo" aria-expanded="false" aria-controls="collapseATwo">
                                    How do I order a virtual debit card?
                                </button>
                            </h2>
                            <div id="collapseATwo" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                                <div class="accordion-body">
                                    <p class="fs-22">You can request a virtual debit card directly from your online banking dashboard. The card is issued instantly and can be used for online purchases and subscriptions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAThree" aria-expanded="true" aria-controls="collapseAThree">
                                    What should I do if I forget my password?
                                </button>
                            </h2>
                            <div id="collapseAThree" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                                <div class="accordion-body">
                                    <p class="fs-22">You can reset your password by clicking on "Forgot Password" on the login page. Follow the instructions sent to your registered email to create a new password securely.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-60 lg-mt-40">
                <h4 class="mb-35">Didn't find what you were looking for?</h4>
                <a href="{{ route('home.contact') }}" class="btn-two xl">Contact Us</a>
            </div>
        </div>
    </div>



@endsection
