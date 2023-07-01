@extends('layout.admin')
@section('title', 'Edit User')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Edit User
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('users.update', $user->id) }}"
            method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name:</label>
                <input name="name" type="text" class="form-control" id="validationCustom01"
                    value="{{ $user->name }}">
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email:</label>
                <input name="email" type="text" class="form-control" id="validationCustom02"
                    value="{{ $user->email }}">
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">password:</label>
                <input name="password" type="password" class="form-control" id="validationCustom03"
                    value="{{ $user->password }}">
            </div>



            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">User Type:</label>
                <select name="is_admin" class="form-select" id="validationCustom04" required>
                    @if ($user->is_admin == 1)
                        <option value="0">User</option>
                        <option value="1" selected>Admin</option>
                    @else
                        <option value="0" selected>User</option>
                        <option value="1">Admin</option>
                    @endif
                </select>
            </div>


            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">phone</label>
                <input name="phone" type="text" class="form-control" id="validationCustom05"
                    value="{{ $user->phone }}">
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="validationCustom06"
                    value="{{ $user->address }}">
            </div>

            <div class="col-md-6">
                <label for="validationCustom07" class="form-label">Zip</label>
                <input name="zip" type="text" class="form-control" id="validationCustom07"
                    value="{{ $user->zip }}">
            </div>

            <div class="col-md-6">
                <label for="validationCustom08" class="form-label">state</label>
                <input name="state" type="text" class="form-control" id="validationCustom08"
                    value="{{ $user->state }}">
            </div>

            <br><br><br><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>








@endsection
