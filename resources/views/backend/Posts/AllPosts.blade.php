@extends('layout.admin')
@section('title', 'All Posts')

@section('content')
    <div class="container-fluid">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">All Posts
            :</label>

        <table class="table table-striped table-bordered">
            <thead style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Post Name</th>
                    <th scope="col">Auther</th>
                    <th scope="col">Image</th>
                    <th scope="col">description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Operators</th>

                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($posts as $post => $key)
                    <tr>
                        <th scope="row">{{ $post = $post + 1 }}</th>
                        <td>{{ $key->full_name }}</td>
                        <td>{{ $key->auther }}</td>
                        <td><img src="{{ $key->image }}" alt="" width="100px" height="100px"></td>
                        <td>{{ $key->description }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>
                        <td>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('posts.show', $key->id) }}" type="button"
                                            class="btn btn-success">Show</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('posts.edit', $key->id) }}" type="button" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <form action="{{ route('posts.destroy', $key->id) }}" method="get">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
