@extends('layout.app')
@section('content')
    <style>
        nav,
        .site-mobile-menu,
        .site-navbar,
        .site-navbar-top {
            background: #000;
        }

        table {
            margin-bottom: 100px;
            position: absolute;
            top: 12%
        }

        body {
            height: 100vh;
        }

        nav {
            position: relative;
            display: block;
        }
        #prof{
            padding-top:150px;
        }
        footer {
            display: none
        }
    </style>
    <div class="container" id="prof">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Update Profile
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('update.profile', Auth()->user()->id) }}"
            method="POST">
            @csrf
            @method('POST')

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name:</label>
                <input name="name" value="{{Auth()->user()->name}}" type="text" class="form-control" id="validationCustom01" placeholder="username"
                    required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email:</label>
                <input name="email" type="text" value="{{ Auth()->user()->email }}" class="form-control"
                    id="validationCustom02" disabled>
            </div>

            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">password:</label>
                <input name="password" value="{{Auth()->user()->password}}" type="password" class="form-control" id="validationCustom03" placeholder="*******"
                    required>
            </div>


            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">phone</label>
                <input name="phone" value="{{Auth()->user()->phone}}" type="text" class="form-control" id="validationCustom05" placeholder="538****"
                    required>
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Address</label>
                <input name="address" value="{{Auth()->user()->address}}" type="text" class="form-control" id="validationCustom06" placeholder="Turkye/..."
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom07" class="form-label">Zip</label>
                <input name="zip" type="text" value="{{Auth()->user()->zip}}" class="form-control" id="validationCustom07" placeholder="23000"
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom08" class="form-label">state</label>
                <input name="state" type="text" value="{{Auth()->user()->state}}" class="form-control" id="validationCustom08" placeholder="Elazig"
                    required>
            </div>



            <div class="col-12" style="padding-top:15px">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>

                </div>
            </div>

            <div class="col-12" style="padding-top:15px">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
