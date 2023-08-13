@extends('layout.main')

@section('container')

<h1>Booking Rooms</h1>
<a href="{{ route('booking-rooms.index') }}" class="btn btn-primary mb-3">Back</a>
<div class="card">
    <div class="card-body">
        <form action="{{ route('booking-rooms.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">

                    <input type="hidden" name="room_id" value="{{ request('room_id') }}">
                    <input type="hidden" name="slot" value="{{ request('slot') }}">
                    <input type="hidden" name="date" value="{{ request('searchdate') }}">

                    <label class="form-label" for="br_name">Name</label>
                    <input type="text" name="br_name" id="br_name" class="form-control @error('br_name') is-invalid @enderror" required />
                    @error('br_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                    @enderror

                    <label class="form-label" for="br_purpose">Purpose</label>
                    <input type="text" name="br_purpose" id="br_purpose" class="form-control @error('br_purpose') is-invalid @enderror" required />
                    @error('br_purpose')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="br_participants">Participants</label>
                    <input type="text" name="br_participants" id="br_participants" class="form-control @error('br_participants') is-invalid @enderror" required />
                    @error('br_participants')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="col-md-6">
                   
                    
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>


@endsection



