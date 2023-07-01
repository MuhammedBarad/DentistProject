@extends('layout.app')

@section('content')



<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-blocks-cover" style="background-image: url({{asset('frontend/images/hero_bg_1.jpg')}});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <span class="sub-text">We Priority Your</span>
                    <h1>Your <strong>New Smile</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="site-block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="site-block-feature d-flex p-4 rounded mb-4">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth font-weight-light text-white h2"></span>
                        </div>
                        <div class="text">
                            <h3>Periontodology</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-block-feature d-flex p-4 rounded mb-4">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-whitening font-weight-light text-white h2"></span>
                        </div>
                        <div class="text">
                            <h3>Tooth Whitening</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-block-feature d-flex p-4 rounded mb-4">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-pliers font-weight-light text-white h2"></span>
                        </div>
                        <div class="text">
                            <h3>Preventative Care</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
    <div class="site-section site-block-appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 pl-lg-5 order-1 order-lg-2">
                    <div class="pl-lg-5 ml-lg-5">
                        <h2 class="site-heading text-black">Online <strong>Appointment</strong> Request Form</h2>
                        <p class="lead text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum vitae
                            possimus sapiente temporibus, cum error.</p>
                        <p class="text-black-opacity-5">Temporibus adipisci modi nisi, in deserunt. Nam, veritatis
                            pariatur fugit explicabo? Nemo eius, eaque saepe facilis quidem nisi. Officiis doloremque
                            dolorum optio.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-1">


                    <form class="p-5 bg-white" action="{{route('add.appointment')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fname">First Name</label>
                                <input name="first_name" type="text" id="fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="lname">Last Name</label>
                                <input name="last_name" type="text" id="lname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="date">Date</label>
                                <input name="date" type="text" id="date" class="form-control datepicker px-2"
                                    placeholder="Date of visit">
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input name="email" type="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="treatment">Treatment  Type</label>
                                <select name="appointment_type" id="treatment" class="form-control">
                                    @foreach ($appo as $app)
                                    <option value="{{$app->appointment_type}}">{{$app->appointment_type}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="note">Notes</label>
                                <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                                    placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>


                    </form>
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
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black mb-5">Our <strong>Services</strong></h2>
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
    <div class="site-block-half d-block d-lg-flex site-block-video">
        <div class="image bg-image order-2" style="background-image: url({{asset('frontend/images/hero_bg_1.jpg')}}); ">
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>
        </div>
        <div class="text order-1">
            <h2 class="site-heading text-black mb-3">Success <strong>Stories</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cum vel, eius nulla
                inventore aperiam excepturi molestias incidunt, culpa alias repudiandae, a nobis libero vitae
                repellendus temporibus vero sit natus.</p>
            <p>Dolores perferendis ipsam animi fuga, dolor pariatur aliquam esse. Modi maiores minus velit iste enim
                sunt iusto, dolore totam consequuntur incidunt illo voluptates vero quaerat excepturi. Iusto dolor, cum
                et.</p>
        </div>

    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black">People <strong>Says</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="site-block-testimony p-4 text-center">
                        <div class="mb-3">
                            <img src="{{asset('frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div>
                            <p>Dolores perferendis ipsam animi fuga, dolor pariatur aliquam esse. Modi maiores minus
                                velit iste enim sunt iusto dolore</p>
                            <p><strong class="font-weight-bold">Nathalie Oscar</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-block-testimony p-4 text-center active">
                        <div class="mb-3">
                            <img src="{{asset('frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div>
                            <p>Dolores perferendis ipsam animi fuga dolor pariatur aliquam esse. Modi maiores minus
                                velit iste enim sunt iusto dolore</p>
                            <p><strong class="font-weight-bold">Linda Uler</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="site-block-testimony p-4 text-center">
                        <div class="mb-3">
                            <img src="{{asset('frontend/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div>
                            <p>Dolores perferendis ipsam animi fuga dolor pariatur aliquam esse. Modi maiores minus
                                velit iste enim sunt iusto dolore</p>
                            <p><strong class="font-weight-bold">Chris Coodard</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
