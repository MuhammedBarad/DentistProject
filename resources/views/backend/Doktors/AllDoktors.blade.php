@extends('layout.admin')
@section('title', 'All Doktors')

@section('content')

    <div class="container-fluid">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">All Doktors
            :</label>

        <table class="table table-striped table-bordered">
            <thead style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">experience</th>
                    <th scope="col">Email</th>
                    <th scope="col">whatsapp</th>
                    <th scope="col">facebook</th>
                    <th scope="col">twitter</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Operators</th>

                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($doktors as $doktor => $key)
                    <tr>
                        <th scope="row">{{ $doktor = $doktor + 1 }}</th>
                        <td>{{ $key->first_name }}</td>
                        <td>{{ $key->last_name }}</td>
                        <td>{{ $key->experience }}</td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->whatsapp }}</td>
                        <td>{{ $key->facebook }}</td>
                        <td>{{ $key->twitter }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>
                        <td>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('doktors.show', $key->id) }}" type="button"
                                            class="btn btn-success">Show</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('doktors.edit', $key->id) }}" type="button"
                                            class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <form action="{{ route('doktors.destroy', $key->id) }}" method="get">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
