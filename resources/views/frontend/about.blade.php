@extends('layout.app')
@section('content')

<div class="site-wrap">
    <div class="site-blocks-cover inner-page" style="background-image: url({{asset('frontend/images/hero_bg_2.jpg')}});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <span class="sub-text">Know Us</span>
                    <h1><strong>About</strong> Us</h1>
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis
                        assumenda, adipisci. Dolores provident a, fugiat laboriosam vel assumenda soluta officia cum
                        doloribus blanditiis sunt necessitatibus excepturi dolorem, saepe totam sequi!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section section-about">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black mb-5">A Team of <strong>Dedicated Dentist</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pr-md-5 text-left mb-5">
                    <div>
                        <img src="{{asset('frontend/images/person_1.jpg')}}" alt="Image" class="w-50 mb-5 rounded-circle">
                        <h3>Dr. Emily Sy</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque
                            totam repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem
                            ea, a vel quibusdam provident deserunt placeat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque totam repudiandae
                            dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem ea, a vel
                            quibusdam provident deserunt placeat.</p>

                        <p class="mt-5">
                            <a href="#" class="py-4 pl-0 pr-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-instagram"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-linkedin"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-heart"></span></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 text-left">
                    <div>
                        <img src="{{asset('frontend/images/person_3.jpg')}}" alt="Image" class="w-50 mb-5 rounded-circle">
                        <h3>Dr. Vincent Uen</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque
                            totam repudiandae dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem
                            ea, a vel quibusdam provident deserunt placeat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloremque totam repudiandae
                            dolor dolores tenetur, porro unde cumque ullam quaerat quo officia. Autem ea, a vel
                            quibusdam provident deserunt placeat.</p>

                        <p class="mt-5">
                            <a href="#" class="py-4 pl-0 pr-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-instagram"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-linkedin"></span></a>
                            <a href="#" class="py-4 pl-2 pr-2"><span class="icon-heart"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black mb-5">See Our <strong>Services</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-whitening font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Tooth Whitening</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-stethoscope font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Stethoscope</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-dentist-chair font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Dentist Chair</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-pliers font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Tooth Pliers</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-first-aid-kit font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>First Aid Kit</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-dentist-tools font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Dentist Tools</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="promo py-5 bg-primary">
        <div class="container text-center">
            <span class="d-block h4 mb-3 font-weight-light text-white">Promo For Tooth Cleaning from <del>$140.00</del>
                now <strong class="font-weight-bold">$50.00</strong></span>
            <div id="date-countdown" class="mt-0"></div>
        </div>
    </div>
</div>

@endsection
