@extends('layout.admin')
@section('title', 'Create Post')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Create Post
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="formFile" class="form-label">Image :</label>
                <input name="image" id="image" class="form-control" type="file" id="formFile">
            </div>
            <img id="showImage" src="{{ asset('frontend/images/empty.jpg') }}"  alt="Image" width="100px" height="500px">
            <br><br>

            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Post name :</label>
                <input name="full_name" type="text" class="form-control" id="validationCustom01" placeholder="postname"
                    required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Auther :</label>
                <input name="auther" type="text" class="form-control" id="validationCustom02"
                    placeholder="Muhammed Barad" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Description :</label>
                <input name="description" type="text" class="form-control" id="validationCustom03" placeholder="description"
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
                <button class="btn btn-primary" type="submit">Create Post</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
