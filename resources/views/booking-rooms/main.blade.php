@extends('layout.main')

@section('container')
<h1 class="text-center">Booking Room</h1>
    <div class="row justify-content-between">
        <div class="col-5">
            Date Booking :
            <form action="/booking-rooms" >
                @csrf
                <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Search Room" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" >Search</button>
                </div>
            </form>
        </div>
        <div class="col-2">
            <a class="btn btn-primary mb-3" href="stumesyuarat" >Stumesyuarat</a>
        </div>
    </div>
@if (request('search'))
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Bilik</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Available</th>
                    <th scope="col">Slot</th>
                </thead>
                @foreach ($bookingrooms as $bookingroom)
                <tbody>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $bookingroom->name }}</td>
                    <td>{{ $bookingroom->type }}</td>
                    <td>{{ $bookingroom->capacity }}</td>
                    <td>{{ $bookingroom->facility }}</td>
                    <td>
                        {{-- Show available slots when the date is not present in the database --}}
                        @foreach ($bookingroom->available_slots as $slot)
                            <a href="{{ route('booking-rooms.create', ['searchdate'=> $bookingroom->searchdate, 'room_id' => $bookingroom->room_id, 'slot' => $slot]) }}" class="btn btn-primary">{{ ucfirst($slot) }}</a>
                        @endforeach
                        @empty($bookingroom->available_slots)
                            This room is full.
                        @endempty
                    </td>
                </tbody>
                @endforeach
                @else
                 cariii laaa 
                @endif
                {{-- @foreach ($bookingrooms as $bookingroom => $result)
                <tbody>
                    <th>{{ $bookingroom+1 }}</th>
                    <td>{{ $result->br_name }}</td>
                    <td>{{ $result->br_purpose }}</td>
                    <td>{{ $result->br_date }}</td>
                    <td>{{ $result->br_room_id }}</td>
                    <td>
                        <a href="" class="btn btn-primary">Pagi</a>
                        <a href="" class="btn btn-primary">Petang</a>
                    </td>
                </tbody>
                @endforeach --}}
            </table>
        </div>
    </div>
{{-- <div class="d-flex justify-content-center">
    {{ $users->links() }}
</div> --}}
@endsection