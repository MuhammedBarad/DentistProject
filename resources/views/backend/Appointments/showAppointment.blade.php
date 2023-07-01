@extends('layout.admin')
@section('title', 'Show Appointment')

@section('content')

<div class="container">
    <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Show Appointment
        :</label>

    <form class="row g-3 needs-validation container" novalidate action="{{ route('appointments.index') }}" method="get">
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First Name :</label>
            <input name="first_name" type="text" class="form-control" id="validationCustom01" value="{{ $appointment->first_name }}"
                disabled>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last Name :</label>
            <input name="last_name" type="text" class="form-control" id="validationCustom02" value="{{ $appointment->last_name }}"
                disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Appointment Category :</label>
            <input name="appointment_type" type="text" class="form-control" id="validationCustom03"
                value="{{ $appointment->appointment_type }}" disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Date :</label>
            <input name="date" type="text" class="form-control" id="validationCustom04"
                value="{{ $appointment->date }}" disabled>
        </div>


        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">Email :</label>
            <input name="email" type="text" class="form-control" id="validationCustom05" value="{{ $appointment->email }}"
                disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom06" class="form-label">Note :</label>
            <input name="note" type="text" class="form-control" id="validationCustom06" value="{{ $appointment->note }}"
                disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom06" class="form-label">State :</label>
            <input name="state" type="text" class="form-control" id="validationCustom06" value="{{ $appointment->state }}"
                disabled>
        </div>

        <br><br><br><br>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Go Home</button>
        </div>
    </form>
</div>








@endsection
