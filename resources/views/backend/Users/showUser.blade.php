@extends('layout.admin')
@section('title', 'Show User')

@section('content')

<div class="container">
    <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Show User
        :</label>

    <form class="row g-3 needs-validation container" novalidate action="{{ route('users.index') }}" method="get">
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Name:</label>
            <input name="name" type="text" class="form-control" id="validationCustom01" value="{{ $user->name }}"
                disabled>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email:</label>
            <input name="email" type="text" class="form-control" id="validationCustom02" value="{{ $user->email }}"
                disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">password:</label>
            <input name="password" type="password" class="form-control" id="validationCustom03"
                value="{{ $user->password }}" disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom04" class="form-label">User Type:</label>
            @if ($user->is_admin == 1)
                <input name="password" type="test" class="form-control" id="validationCustom04" value="Admin" disabled>
            @else
                <input name="password" type="test" class="form-control" id="validationCustom04" value="User" disabled>
            @endif
        </div>

        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">phone</label>
            <input name="phone" type="text" class="form-control" id="validationCustom05" value="{{ $user->phone }}"
                disabled>
        </div>

        <div class="col-md-12">
            <label for="validationCustom06" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="validationCustom06" value="{{ $user->address }}"
                disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom07" class="form-label">Zip</label>
            <input name="zip" type="text" class="form-control" id="validationCustom07" value="{{ $user->zip }}"
                disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom08" class="form-label">state</label>
            <input name="state" type="text" class="form-control" id="validationCustom08" value="{{ $user->state }}"
                disabled>
        </div>

        <br><br><br><br>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Go Home</button>
        </div>
    </form>
</div>








@endsection
