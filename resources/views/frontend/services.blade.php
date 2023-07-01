@extends('layout.app')
@section('content')
    <div class="site-wrap">
        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('frontend/images/hero_bg_1.jpg')}});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <span class="sub-text">Services That You Satisfied</span>
                        <h1>Our <strong>Services</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light">
            <div class="container">
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
        <div class="site-section site-block-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="{{asset('frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="row row-items">
                            <div class="col-md-6">
                                <a href="#" class="d-flex text-center feature active p-4 mb-4">
                                    <span class="align-self-center w-100">
                                        <span class="d-block mb-3">
                                            <span class="flaticon-tooth-whitening display-3"></span>
                                        </span>
                                        <h3>Tooth Whitening</h3>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="d-flex text-center feature p-4 mb-4">
                                    <span class="align-self-center w-100">
                                        <span class="d-block mb-3">
                                            <span class="flaticon-stethoscope display-3"></span>
                                        </span>
                                        <h3>Stethoscope</h3>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="row row-items last">
                            <div class="col-md-6">
                                <a href="#" class="d-flex text-center feature p-4 mb-4">
                                    <span class="align-self-center w-100">
                                        <span class="d-block mb-3">
                                            <span class="flaticon-first-aid-kit display-3"></span>
                                        </span>
                                        <h3>First Aid Kit</h3>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="d-flex text-center active feature p-4 mb-4">
                                    <span class="align-self-center w-100">
                                        <span class="d-block mb-3">
                                            <span class="flaticon-tooth-pliers display-3"></span>
                                        </span>
                                        <h3>Tooth Pliers</h3>
                                    </span>
                                </a>
                            </div>
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
