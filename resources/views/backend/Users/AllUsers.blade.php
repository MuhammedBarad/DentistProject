@extends('layout.admin')
@section('title', 'All Users')

@section('content')
    <div class="container-fluid">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">All Users
            :</label>

        <table class="table table-striped table-bordered">
            <thead style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Zip</th>
                    <th scope="col">State</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Operators</th>

                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($users as $user => $key)
                    <tr>
                        <th scope="row">{{ $user = $user + 1 }}</th>
                        <td>{{ $key->name }}</td>
                        <td>

                            @if ($key->is_admin == 1)
                                Admin
                            @else
                                User
                            @endif

                        </td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->phone }}</td>
                        <td>{{ $key->address }}</td>
                        <td>{{ $key->zip }}</td>
                        <td>{{ $key->state }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>
                        <td>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('users.show', $key->id) }}" type="button"
                                            class="btn btn-success">Show</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('users.edit', $key->id) }}" type="button" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <form action="{{ route('users.destroy', $key->id) }}" method="get">
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
