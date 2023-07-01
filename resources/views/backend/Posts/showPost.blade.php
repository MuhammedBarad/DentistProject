@extends('layout.admin')
@section('title', 'Show Post')

@section('content')

<div class="container">
    <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">Show Post
        :</label>

    <form class="row g-3 needs-validation container" novalidate action="{{ route('posts.index') }}" method="get">
        @csrf
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Post Name :</label>
            <input name="full_name" type="text" class="form-control" id="validationCustom01" value="{{ $post->full_name }}"
                disabled>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Auther :</label>
            <input name="auther" type="text" class="form-control" id="validationCustom02" value="{{ $post->auther }}"
                disabled>
        </div>

        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">Description :</label>
            <input name="description" type="text" class="form-control" id="validationCustom03"
                value="{{ $post->description }}" disabled>
        </div>

        <br><br><br><br>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Go Home</button>
        </div>
    </form>
</div>








@endsection
