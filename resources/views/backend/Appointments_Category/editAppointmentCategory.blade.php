@extends('layout.admin')
@section('title', 'Edit Appointment Category')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Edit Appointment
            Category :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('appointmentsCategory.update', $appointment->id) }}"
            method="POST">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Appointments Name :</label>
                <input name="appointment_type" type="text" class="form-control" id="validationCustom01"
                    value="{{ $appointment->appointment_type }}">
            </div>

            <br><br><br><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>








@endsection
