@extends('layout.app')
@section('content')
    <div class="site-wrap">
        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('frontend/images/hero_bg_1.jpg')}});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <span class="sub-text">Read The Testimonies From</span>
                        <h1>Our <strong>Patients</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section section-about">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-6 text-center">
                        <h2 class="site-heading text-black mb-5">Patients <strong>Testimonies</strong></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-md-5 text-left mb-5">
                        <div class="mb-5">
                            <img src="{{asset('frontend/images/person_1.jpg')}}" alt="Image" class="w-50 mb-5 rounded-circle">
                            <p class="lead"><em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
                                    doloremque totam repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat
                                    quo officia. Autem ea, a vel quibusdam provident deserunt placeat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque totam
                                repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem ea,
                                a vel quibusdam provident deserunt placeat.&rdquo;</em></p>
                            <div class="mt-5 mb-3">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <h3 class="h6 font-weight-bold">&mdash; Esther Steely</h3>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 text-left">
                        <div>
                            <img src="{{asset('frontend/images/person_3.jpg')}}" alt="Image" class="w-50 mb-5 rounded-circle">
                            <p class="lead"><em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
                                    doloremque totam repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat
                                    quo officia. Autem ea, a vel quibusdam provident deserunt placeat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque totam
                                repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem ea,
                                a vel quibusdam provident deserunt placeat.&rdquo;</em></p>
                            <div class="mt-5 mb-3">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <h3 class="h6 font-weight-bold">&mdash; Adrien Cooper</h3>
                        </div>
                    </div>



                    <div class="col-md-6 pr-md-5 text-left mb-5">
                        <div class="mb-5">
                            <img src="{{asset('frontend/images/person_2.jpg')}}" alt="Image" class="w-50 mb-5 rounded-circle">
                            <p class="lead"><em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
                                    doloremque totam repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat
                                    quo officia. Autem ea, a vel quibusdam provident deserunt placeat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque totam
                                repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem ea,
                                a vel quibusdam provident deserunt placeat.&rdquo;</em></p>
                            <div class="mt-5 mb-3">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <h3 class="h6 font-weight-bold">&mdash; Esther Steely</h3>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 text-left">
                        <div>
                            <img src="{{asset('frontend/images/person_4.jpg')}}" alt="Image" class="w-50 mb-5 rounded-circle">
                            <p class="lead"><em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
                                    doloremque totam repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat
                                    quo officia. Autem ea, a vel quibusdam provident deserunt placeat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque totam
                                repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem ea,
                                a vel quibusdam provident deserunt placeat.&rdquo;</em></p>
                            <div class="mt-5 mb-3">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <h3 class="h6 font-weight-bold">&mdash; Adrien Cooper</h3>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="promo py-5 bg-primary">
            <div class="container text-center">
                <span class="d-block h4 mb-3 font-weight-light text-white">Promo For Tooth Cleaning from
                    <del>$140.00</del> now <strong class="font-weight-bold">$50.00</strong></span>
                <div id="date-countdown" class="mt-0 mb-2"></div>
            </div>
        </div>
    </div>
@endsection
