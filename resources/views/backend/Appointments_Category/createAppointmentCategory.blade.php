@extends('layout.admin')
@section('title', 'Create Appointment Category')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Create Appointment
            Category :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('appointmentsCategory.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Appointment Name :</label>
                <input name="appointment_type" type="text" class="form-control" id="validationCustom01" placeholder="AppointmentName"
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
                <button class="btn btn-primary" type="submit">Create Appointment</button>
            </div>
        </form>
    </div>


@endsection
