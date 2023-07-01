@extends('layout.app')

@section('content')
    <style>

        navm,
        .site-mobile-menu,
        .site-navbar,
        .site-navbar-top {
            background: #000;
        }

        table {
            margin-bottom: 100px;
            position: absolute;
            top: 12%
        }
        body{
            height: 100vh;
        }
        nav{
            position: relative;
            display: block;
        }
        footer{
            display: none

        }
    </style>

    <table class="table table-striped table-bordered">
        <thead style="text-align: center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Appointments Category</th>
                <th scope="col">Date</th>
                <th scope="col">Email</th>
                <th scope="col">Note</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">State</th>
                <th scope="col">Operators</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
            @foreach ($appo as $appointmen=>$key)
                <tr>
                    <th scope="row">{{ $appointmen= $appointmen+1 }}</th>
                    <td>{{ $key->first_name }}</td>
                    <td>{{ $key->last_name }}</td>
                    <td>{{ $key->appointment_type }}</td>
                    <td>{{ $key->date }}</td>
                    <td>{{ $key->email }}</td>
                    <td>{{ $key->note }}</td>
                    <td>{{ $key->created_at }}</td>
                    <td>{{ $key->updated_at }}</td>
                    @if($key->state == "Reviewing")
                    <td style="background: yellow;text-align: center;font-weight: bold;padding-top:20px">{{ $key->state }} </td>
                    @elseif ($key->state == "Approves")
                    <td style="background: green;text-align: center;font-weight: bold;color:#fff;padding-top:20px">{{ $key->state }} </td>
                    @elseif ($key->state == "Rejected")
                    <td style="background: red;text-align: center;font-weight: bold;color:#fff;padding-top:20px">{{ $key->state }} </td>
                    @endif
                    <td>
                        <div class="container text-center">
                            <div class="row">
                                {{-- <div class="col-3 container text-center">
                                    <a href="{{ route('keyts.show', $key->id) }}" type="button"
                                        class="btn btn-success">Show</a>
                                </div> --}}
                                <div class="col-8 container text-center">
                                    <form action="{{ route('deleteMyAppointments', $key->id) }}" method="get">
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
@endsection
