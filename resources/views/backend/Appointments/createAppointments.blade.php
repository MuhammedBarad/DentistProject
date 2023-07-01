@extends('layout.admin')
@section('title', 'Create Appointment')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Create Appointment
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('appointments.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First Name :</label>
                <input name="first_name" type="text" class="form-control" id="validationCustom01" placeholder="firstname"
                    required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last Name :</label>
                <input name="last_name" type="text" class="form-control" id="validationCustom02"
                    placeholder="lastname" required>
            </div>

                <div class="col-md-6">
                    <label class="font-weight-bold" for="treatment">Appointment Type</label>
                    <select name="appointment_type" id="treatment" class="form-control">
                        @foreach ($appo as $app)
                        <option value="{{$app->appointment_type}}">{{$app->appointment_type}}</option>
                        @endforeach
                    </select>
                </div>

            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Date :</label>
                <input name="date" type="date" class="form-control" id="validationCustom04" placeholder="appointmentscategory"
                    required>
            </div>


            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">Email :</label>
                <input name="email" type="email" class="form-control" id="validationCustom05" placeholder="barad@gmail.com"
                    required>
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Note :</label>
                <input name="note" type="text" class="form-control" id="validationCustom06" placeholder="note..."
                    required>
            </div>


            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>

                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Appointment</button>
            </div>
        </form>
    </div>






@endsection
