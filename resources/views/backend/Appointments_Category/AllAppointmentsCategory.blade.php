@extends('layout.admin')
@section('title', 'All Appointments Category')

@section('content')

    <div class="container-fluid">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">All Appointments
            Category :</label>

        <table class="table table-striped table-bordered">
            <thead style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Appointment Name</th>
                    <th scope="col">Operators</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($appointments as $appointment => $key)
                    <tr>
                        <th scope="row">{{ $appointment = $appointment + 1 }}</th>
                        <td>{{ $key->appointment_type }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>
                        <td>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-3 container text-center">
                                        <a href="{{ route('appointmentsCategory.edit', $key->id) }}" type="button"
                                            class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-3 container text-center">
                                        <form action="{{ route('appointmentsCategory.destroy', $key->id) }}" method="get">
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
