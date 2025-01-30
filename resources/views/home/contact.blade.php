@extends('home.base')
@section('content')

    <!--
		=============================================
			Inner Banner Two
		==============================================
		-->
    <div class="inner-banner-two bg-one border-30 z-1 pt-100 lg-pt-60 pb-90 lg-pb-50 mt-30 lg-mt-20 position-relative">
        <div class="container">
            <div class="title-one text-center">
                <h2>{{$pageName}}</h2>
            </div>
        </div>
        <img src="{{asset('home/images/shape/shape_89.svg')}}" alt="" class="shapes shape_01">
    </div>
    <!-- /.inner-banner-two -->


    <!--
		=====================================================
			Contact Section Two
		=====================================================
		-->
    <div class="contact-section-two bg-one position-relative z-1 pt-110 lg-pt-80 pb-120 lg-pb-80 border-30 mb-30 lg-mb-20 mt-30 lg-mt-20">
        <div class="contact-banner-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="block d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('home/images/icon/icon_43.svg')}}" alt=""></div>
                            <div class="text">
                                <div class="title">We’re happy to help</div>
                                <span class="fs-20">{{ $web->email }}</span>
                            </div>
                        </div>
                        <!-- /.block -->
                    </div>
                    @if($web->phone)
                        <div class="col-xl-6 col-lg-4">
                            <div class="block d-flex align-items-center justify-content-lg-center position-relative z-1 skew-line pt-5 pb-5 md-mt-20 md-mb-20">
                                <div class="d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('home/images/icon/icon_44.svg')}}" alt=""></div>
                                    <div class="text">
                                        <div class="title">Hotline number</div>
                                        <span class="fs-20">{{$web->phone}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.block -->
                        </div>
                    @endif
                    <div class="col-xl-3 col-lg-4">
                        <div class="block d-flex align-items-center ps-xl-5">
                            <div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('home/images/icon/icon_45.svg')}}" alt=""></div>
                            <div class="text">
                                <div class="title">Address</div>
                                <span class="fs-20">
                                    {!! $web->address !!}
                                </span>
                            </div>
                        </div>
                        <!-- /.block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.contact-banner-one -->

    </div>

@endsection
