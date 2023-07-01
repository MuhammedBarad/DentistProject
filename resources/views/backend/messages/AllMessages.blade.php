@extends('layout.admin')
@section('title', 'All Messages')

@section('content')
<div class="container-fluid">
    <label class="form-label" style="font-size: 25px;font-weight: 700;padding-bottom:20px;padding-left:7px">All Messages
        :</label>

    <table class="table table-striped table-bordered">
        <thead style="text-align: center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usr ID</th>
                <th scope="col">Message Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Created At</th>
                <th scope="col">State Update</th>
                <th scope="col">State</th>
                <th scope="col">Operators</th>

            </tr>
        </thead>
        <tbody style="text-align: center">
            @foreach ($messages as $message)
                <tr>
                    <th scope="row">{{ $message->id }}</th>
                    <th scope="row">{{ $message->user_id }}</th>
                    <td>{{ $message->full_name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>
                        {{-- <select name="state" class="form-select" required>
                            <option name="state" selected disabled>Choose State Type</option>
                            <option value="1">Reviewing</option>
                            <option value="0">Reed Done</option>
                        </select> --}}

                        <div class="container text-center">
                            <form action="{{ route('Messages.update', $message->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="container">
                                    <div class="row">
                                      <div class="col-6">
                                            <select name="state" class="form-select">
                                                <option value="{{ $message->state }}" selected disabled >{{ $message->state }}</option>
                                                <option value="Reviewing">Reviewing</option>
                                                <option value="Approves">Approves</option>
                                            </select>
                                      </div>
                                      <div class="col-6">
                                        <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                                    </div>
                                  </div>


                            </form>
                        </div>

                    </td>
                    <td
                    @if($message->state == "Reviewing")
                    style = "background:yellow"
                    @elseif ($message->state == "Approves")
                    style = "background:green;color:white;padding-top:15px"
                    @endif
                    >
                    {{ $message->state }}
                </td>

                    <td>
                        <div class="container text-center">
                            <div class="row">
                                <div class=" container text-center">
                                    <form action="{{ route('Messages.destroy', $message->id) }}" method="get">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                                {{-- <div class="col-3 container text-center">
                                    <form action="{{ route('Messages.update', $message->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button  type="submit" class="btn btn-success">Update</button>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>






@endsection
