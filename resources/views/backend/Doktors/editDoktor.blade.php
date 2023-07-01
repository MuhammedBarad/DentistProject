@extends('layout.admin')
@section('title', 'Edit Doktor')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Edit Doktor
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('doktors.update', $doktor->id) }}"
            method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First Name :</label>
                <input name="first_name" type="text" class="form-control" id="validationCustom01"
                    value="{{ $doktor->first_name }}">
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last Name :</label>
                <input name="last_name" type="text" class="form-control" id="validationCustom02"
                    value="{{ $doktor->last_name }}">
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Experience :</label>
                <input name="experience" type="text" class="form-control" id="validationCustom03"
                    value="{{ $doktor->experience }}">
            </div>
            <div class="col-md-12">
                <label for="validationCustom04" class="form-label">Description :</label>
                <input name="description" type="text" class="form-control" id="validationCustom04"
                    value="{{ $doktor->description }}">
            </div>
            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">Email :</label>
                <input name="email" type="email" class="form-control" id="validationCustom05"
                    value="{{ $doktor->email }}">
            </div>
            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Whatsapp :</label>
                <input name="whatsapp" type="text" class="form-control" id="validationCustom06"
                    value="{{ $doktor->whatsapp }}">
            </div>
            <div class="col-md-6">
                <label for="validationCustom07" class="form-label">Facebook :</label>
                <input name="facebook" type="text" class="form-control" id="validationCustom07"
                    value="{{ $doktor->facebook }}">
            </div>
            <div class="col-md-6">
                <label for="validationCustom08" class="form-label">Twitter :</label>
                <input name="twitter" type="text" class="form-control" id="validationCustom08"
                    value="{{ $doktor->twitter }}">
            </div>
            <br><br><br><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>








@endsection
