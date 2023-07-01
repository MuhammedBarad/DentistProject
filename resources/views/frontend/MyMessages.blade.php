@extends('layout.app')
@section('content')
    <style>

        nav,
        .site-mobile-menu,
        .site-navbar,
        .site-navbar-top {
            background: #000;
        }
        nav{
            display: block;
        }
        footer{
            display: none;
        }

    </style>
    <div style="padding-top: 120px">

    <table class="table table-striped table-bordered" >
        <thead style="text-align: center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Message Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">State</th>
                <th scope="col">Operators</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
            @foreach ($messages as $message => $key)
                <tr>
                    <th scope="row">{{ $message = $message +1  }}</th>
                    <td>{{ $key->full_name }}</td>
                    <td>{{ $key->email }}</td>
                    <td>{{ $key->message }}</td>
                    @if($key->state == "Reviewing")
                    <td style="background: yellow;text-align: center;font-weight: bold;padding-top:20px">{{ $key->state }} </td>
                    @elseif ($key->state == "Reed Done")
                    <td style="background: green;text-align: center;font-weight: bold;color:#fff;padding-top:20px">{{ $key->state }} </td>
                    @endif
                    <td>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-8 container text-center">
                                    <form action="{{ route('Messages.delete', $key->id) }}" method="get">
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
