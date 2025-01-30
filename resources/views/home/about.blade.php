@extends('home.base')
@section('content')

    <!--
    =============================================
        Block Feature Thirty - Introduction Section
    ==============================================
    -->
    <div class="block-feature-thirty bg-one border-30 z-1 pt-120 lg-pt-80 pb-130 lg-pb-80 mt-30 lg-mt-20 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 order-lg-last">
                    <div class="ps-xl-5">
                        <div class="title-one">
                            <h2>Empowering Financial Freedom</h2>
                        </div>
                        <p class="fs-28 fw-500 text-dark mt-55 lg-mt-30 mb-70 lg-mb-40 pe-xxl-5">
                            Our platform is built to provide secure, fast, and efficient financial solutions. Whether you need seamless money transfers, business-friendly virtual cards, or investment opportunities, we are here to help you achieve financial success.
                        </p>
                        <div class="fs-24 text-dark mb-40 lg-mb-30">- CEO, {{$siteName}}</div>
                        <a href="{{ route('register') }}" class="btn-one">Get Started</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <img src="{{asset('home/images/media/img_26.jpg')}}" alt="Banking Solutions" class="media-img md-mt-40">
                </div>
            </div>
        </div>
        <img src="{{asset('home/images/shape/shape_83.svg')}}" alt="" class="shapes shape_01">
    </div>
    <!-- /.block-feature-thirty -->

    <!--
    =====================================================
        Our Features Section
    =====================================================
    -->
    <div class="block-feature-two mb-30 lg-mb-20">
        <div class="row gx-xl-4">
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20">
                <div class="card-style-one text-center border-30 bg-three w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_77.svg')}}" alt="Instant Transfers">
                    </div>
                    <h3>Instant Money Transfers</h3>
                    <p class="fs-24 fw-500 text-dark">Send and receive money across borders with minimal fees and instant processing.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.1s">
                <div class="card-style-one text-center border-30 bg-three w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_78.svg')}}" alt="Security">
                    </div>
                    <h3>Advanced Security</h3>
                    <p class="fs-24 fw-500 text-dark">Your funds and transactions are protected with top-tier encryption and fraud prevention systems.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.2s">
                <div class="card-style-one text-center border-30 bg-three w-100">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{asset('home/images/icon/icon_79.svg')}}" alt="Multi-Currency Support">
                    </div>
                    <h3>Multi-Currency Support</h3>
                    <p class="fs-24 fw-500 text-dark">Operate accounts in different currencies, making global transactions seamless and cost-effective.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.block-feature-two -->

    <!--
    =====================================================
        About Us - More Details
    =====================================================
    -->
    <div class="block-feature-thirtyOne bg-one border-30 z-1 pt-120 lg-pt-80 pb-130 lg-pb-80 mb-30 lg-mb-20 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-one">
                        <h2>Who We Are</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-style-five ms-xxl-5 md-mt-50" id="accordionThree">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Our Mission
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
                                <div class="accordion-body">
                                    <p class="fs-22">We aim to simplify financial transactions and make digital banking accessible to everyone, regardless of their location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why Choose Us?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                <div class="accordion-body">
                                    <p class="fs-22">We offer a seamless banking experience with no hidden charges, ensuring transparency and security for all our customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Our Future Vision
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                <div class="accordion-body">
                                    <p class="fs-22">We envision a world where financial transactions are borderless, efficient, and fully automated for a hassle-free experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-banner d-flex align-items-center justify-content-center mt-100 lg-mt-60">
                <a class="video-btn tran3s rounded-circle d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>

            <div class="counter-wrapper mt-70 lg-mt-40">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4">
                        <div class="counter-block-one text-center text-lg-start mt-20">
                            <div class="main-count fw-500 color-dark">$<span class="counter">9.1</span>B+</div>
                            <span class="fs-22">Processed Transactions</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="counter-block-one text-center mt-20">
                            <div class="main-count fw-500 color-dark"><span class="counter">20</span>+</div>
                            <span class="fs-22">Years of Experience</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 ms-auto">
                        <div class="counter-block-one text-center text-lg-start mt-20">
                            <div class="main-count fw-500 color-dark"><span class="counter">1.2</span>M</div>
                            <span class="fs-22">Active Users</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.block-feature-thirtyOne -->

@endsection
