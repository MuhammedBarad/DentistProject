<!DOCTYPE html>
<html lang="en">

<head>


    <title>Dente &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .dropdown-menu a {
            color: black;
        }
    </style>
</head>

<body>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    {{-- Nav Start Here --}}
    <nav>
        <div class="site-navbar-wrap">
            <div class="site-navbar-top">
                <div class="container py-2">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="https://twitter.com/barad_kamil" class="p-2 pl-0" target="_blank"><span
                                    class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/profile.php?id=100010897324108&locale=ar_AR"
                                class="p-2 pl-0" target="_blank"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com/in/muhammed-barad-a68398226/" class="p-2 pl-0"
                                target="_blank"><span class="icon-linkedin"></span></a>
                            <a href="https://www.instagram.com/m_barad_x7/" class="p-2 pl-0" target="_blank"><span
                                    class="icon-instagram"></span></a>
                        </div>
                        <div class="col-6">
                            <div class="d-flex ml-auto">
                                <a href="mailto:muhammedkamilbarad@gmail.com"
                                    class="d-flex align-items-center ml-auto mr-4">
                                    <span class="icon-envelope mr-2"></span>
                                    <span class="d-none d-md-inline-block">muhammedkamilbarad@gmail.com</span>
                                </a>
                                <a href="tel:+90-538-387-77-04" class="d-flex align-items-center">
                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block">+90 538 387 77 04</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-navbar">
                <div class="container py-1">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <h2 class="mb-0 site-logo"><a href="{{ route('frontend.home') }}">Dente</a></h2>
                        </div>
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-white"><span
                                                class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu js-clone-nav d-none d-lg-block" style="padding-left: 30px">
                                        <li class="active">
                                            <a href="{{ route('frontend.home') }}">Home</a>
                                            {{-- <ul class="dropdown arrow-top">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                                <li class="has-children">
                                                    <a href="#">Sub Menu</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Menu One</a></li>
                                                        <li><a href="#">Menu Two</a></li>
                                                        <li><a href="#">Menu Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                        {{-- <li class="has-children">
                                            <a href="{{ route('frontend.patients') }}">Patients</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ route('frontend.news') }}">News</a></li>
                                        <li><a href="{{ route('frontend.services') }}">Services</a></li>
                                        <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                        @auth
                                            @if (Auth()->user()->is_admin == 0)
                                                <li><a href="{{ route('Messages.show', Auth()->user()->id) }}">Messages</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('showMyAppointments', Auth()->user()->id) }}">Appointments</a>
                                                </li>
                                            @endif
                                            @if (Auth()->user()->is_admin == 1)
                                                <li><a href="{{ route('users.index') }}">Dashboard</a></li>
                                            @endif
                                        @endauth
                                        {{-- @if (Auth()->user()->is_admin == 0) --}}


                                        {{-- @endif --}}

                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-bs-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item"
                                                        href="{{ route('show.profile') }}">Profile</a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>

                                            @endguest
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <main>

        @yield('content')

    </main>



    {{-- Footer Start Here --}}
    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Navigation</h3>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Membership</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">


                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Recent News</h3>
                        <div class="block-25">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <figure class="image mr-4">
                                            <img src="images/hero_bg_1.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="small text-uppercase date">Sep 16, 2018</span>
                                            <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                consectetur elit</h3>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <figure class="image mr-4">
                                            <img src="images/hero_bg_1.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="small text-uppercase date">Sep 16, 2018</span>
                                            <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                consectetur elit</h3>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <figure class="image mr-4">
                                            <img src="images/hero_bg_1.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="small text-uppercase date">Sep 16, 2018</span>
                                            <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                consectetur elit</h3>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 mb-5 mb-lg-0">

                    <div class="mb-5">
                        <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-white text-white bg-transparent"
                                    placeholder="Enter Email" aria-label="Enter Email"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Follow Us</h3>

                            <div>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This Website is made by <a
                            href="https://colorlib.com" target="_blank"> Muhammed Barad</a>
                    </p>
                </div>

            </div>
        </div>
    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            toastr.success("{{ Session::get('message') }}")
        @endif
    </script>
</body>
