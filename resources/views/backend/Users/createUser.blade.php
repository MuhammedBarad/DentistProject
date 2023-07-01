@extends('layout.admin')
@section('title', 'Create User')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Create User
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('users.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name:</label>
                <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="username"
                    required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email:</label>
                <input name="email" type="text" class="form-control" id="validationCustom02"
                    placeholder="barad@gmail.com" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">password:</label>
                <input name="password" type="password" class="form-control" id="validationCustom03" placeholder="*******"
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">User Type:</label>
                <select name="is_admin" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="0">Choose User Type</option>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">phone</label>
                <input name="phone" type="text" class="form-control" id="validationCustom05" placeholder="538****"
                    required>
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="validationCustom06" placeholder="Turkye/..."
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom07" class="form-label">Zip</label>
                <input name="zip" type="text" class="form-control" id="validationCustom07" placeholder="23000"
                    required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom08" class="form-label">state</label>
                <input name="state" type="text" class="form-control" id="validationCustom08" placeholder="Elazig"
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
                <button class="btn btn-primary" type="submit">Create User</button>
            </div>
        </form>
    </div>

@endsection
