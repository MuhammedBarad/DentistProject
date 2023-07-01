@extends('layout.admin')
@section('title', 'Create Doktor')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Create Doktor
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('doktors.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First Name :</label>
                <input name="first_name" type="text" class="form-control" id="validationCustom01" placeholder="firstname"
                    required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last Name :</label>
                <input name="last_name" type="text" class="form-control" id="validationCustom02" placeholder="lastname"
                    required>

            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Experience :</label>
                <input name="experience" type="test" class="form-control" id="validationCustom03" placeholder="Surgery"
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Description :</label>
                <input name="description" type="text" class="form-control" id="validationCustom04" placeholder="description"
                    required>
            </div>



            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">Email :</label>
                <input name="email" type="email" class="form-control" id="validationCustom05" placeholder="doktor@gmail.com"
                    required>
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Whatsapp :</label>
                <input name="whatsapp" type="text" class="form-control" id="validationCustom06" placeholder="+90538***"
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom07" class="form-label">Facebook :</label>
                <input name="facebook" type="text" class="form-control" id="validationCustom07" placeholder="Muhammed Barad "
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom08" class="form-label">Twitter :</label>
                <input name="twitter" type="text" class="form-control" id="validationCustom08" placeholder="Muhammed Barad"
                    required>
            </div>



            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Doktor</button>
            </div>
        </form>
    </div>


@endsection
