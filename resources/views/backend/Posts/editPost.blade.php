@extends('layout.admin')
@section('title', 'Edit Post')

@section('content')

    <div class="container">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Edit Post
            :</label>

        <form class="row g-3 needs-validation container" novalidate action="{{ route('posts.update', $post->id) }}"
            method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="formFile" class="form-label">Image :</label>
                <input name="image" id="image" class="form-control" type="file" id="formFile">
            </div>
            <img id="showImage" src="{{asset($post->image)}}"  alt="Image" width="100px" height="500px">
            <br><br>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Post Name :</label>
                <input name="full_name" type="text" class="form-control" id="validationCustom01"
                    value="{{ $post->full_name }}">
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Auther :</label>
                <input name="auther" type="text" class="form-control" id="validationCustom02"
                    value="{{ $post->auther }}">
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Description :</label>
                <input name="description" type="text" class="form-control" id="validationCustom03"
                    value="{{ $post->description }}">
            </div>

            <br><br><br><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>








@endsection
