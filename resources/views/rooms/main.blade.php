@extends('layout.main')

@section('container')
    <h1 class="text-center">List Rooms</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <a class="btn btn-primary mb-3" href="{{ route('rooms.create') }}" >Create Room</a>
        </div>
        <div class="col-6">
            <form action="/rooms" >
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Room" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Bilik</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Available</th>
                    <th scope="col">Action</th>
                </thead>
                @foreach ($rooms as $room => $result)
                <tbody>
                    <th>{{ $room+1 }}</th>
                    <td>{{ $result->r_name }}</td>
                    <td>{{ $result->r_type }}</td>
                    <td>{{ $result->r_capacity }}</td>
                    <td>{{ $result->r_is_available }}</td>
                    <td>
                        <form action="{{ route('rooms.destroy', $result->r_id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('rooms.edit', $result->r_id) }}" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
<div class="d-flex justify-content-center">
    {{ $rooms->links() }}
</div>

@endsection