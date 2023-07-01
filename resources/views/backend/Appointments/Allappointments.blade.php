@extends('layout.admin')
@section('title', 'All Appointments')

@section('content')
    <div class="container-fluid">
        <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">All
            Appointments
            :</label>

        <table class="table table-striped table-bordered">
            <thead style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Appointments Category</th>
                    <th scope="col">Date</th>
                    <th scope="col">Email</th>
                    <th scope="col">Note</th>
                    <th scope="col">State Update</th>
                    <th scope="col">State</th>
                    <th scope="col">Operators</th>

                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($appointments as $appointment => $key)
                    <tr>
                        <th scope="row">{{ $appointment = $appointment + 1 }}</th>
                        <th>{{ $key->user_id }}</th>
                        <td>{{ $key->first_name }}</td>
                        <td>{{ $key->last_name }}</td>
                        <td>{{ $key->appointment_type }}</td>
                        <td>{{ $key->date }}</td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->note }}</td>
                        <td>

                            <form action="{{ route('Appointments.Change', $key->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="container">
                                    <div class="row">
                                      <div class="col-6">
                                            <select name="state" class="form-select">
                                                <option value="{{ $key->state }}" selected disabled >{{ $key->state }}</option>
                                                <option value="Reviewing">Reviewing</option>
                                                <option value="Approves">Approves</option>
                                                <option value="Rejected">Rejected</option>
                                            </select>
                                      </div>
                                      <div class="col-6">
                                        <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                                    </div>
                                  </div>


                            </form>
                        </td>
                        <td
                        @if($key->state == "Reviewing")
                        style = "background:yellow;padding-top:15px"
                        @elseif ($key->state == "Approves")
                        style = "background:green;color:white;padding-top:15px"
                        @elseif ($key->state == "Rejected")
                        style = "background:red;color:white;padding-top:15px"
                        @endif
                        >
                        {{ $key->state }}
                    </td>
                        <td>
                            <div class="container text-center"></div>
                            <div class="row">
                                <div class="col-6 container text-center">
                                    <a href="{{ route('appointments.show', $key->id) }}" type="button"
                                        class="btn btn-warning">Show</a>
                                </div>
                                <div class="col-6 container text-center">
                                    <form action="{{ route('appointments.destroy', $key->id) }}" method="get">
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
