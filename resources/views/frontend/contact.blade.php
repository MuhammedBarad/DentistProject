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
        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('frontend/images/hero_bg_1.jpg')}});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <span class="sub-text">Get In Touch</span>
                        <h1><strong>Contact</strong> Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">

                        <h2 class="site-heading text-black mb-5"><strong>Appointment</strong></h2>


                    <form class="p-5 bg-white mb-5 mb-lg-0" action="{{route('add.contact_appointment')}}" method="POST">
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
                    <div class="col-md-12 col-lg-6">

                        <h2 class="site-heading text-black mb-5">Say <strong>Hello</strong></h2>

                        <form  class="p-5 bg-white" action="{{route('Messages.create')}}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="fullname">Full Name</label>
                                    <input name="full_name" type="text" id="full_name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Email</label>
                                    <input name="email" type="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                        placeholder="Say hello to us"></textarea>
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
                <div id="date-countdown" class="mt-0 mb-2"></div>
            </div>
        </div>
    </div>
@endsection
