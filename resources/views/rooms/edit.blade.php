@extends('layout.main')

@section('container')

<h1>Create User</h1>
<a href="{{ route('rooms.index') }}" class="btn btn-primary mb-3">Back</a>
<div class="card">
    <div class="card-body">
        <form action="{{ route('rooms.update', $rooms->r_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="r_name">Name</label>
                    <input type="text" name="r_name" id="r_name" class="form-control @error('r_name') is-invalid @enderror" required value="{{ $rooms->r_name }}"/>
                    @error('r_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                    @enderror

                    <label class="form-label" for="r_type">Type</label>
                    <input type="text" name="r_type" id="r_type" class="form-control @error('r_type') is-invalid @enderror" required value="{{ $rooms->r_type }}"/>
                    @error('r_type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="r_capacity">Capacity</label>
                    <input type="text" name="r_capacity" id="r_capacity" class="form-control @error('r_capacity') is-invalid @enderror" required value="{{ $rooms->r_capacity }}"/>
                    @error('r_capacity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="col-md-6">

                    <label class="form-label" for="r_facility">Facility</label>
                    <input type="text" name="r_facility" id="r_facility" class="form-control @error('r_facility') is-invalid @enderror" value="{{ $rooms->r_facility }}" />
                    @error('r_facility')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="r_description">Description</label>
                    <input type="text" name="r_description" id="r_description" class="form-control @error('r_description') is-invalid @enderror" value="{{ $rooms->r_description }}" />
                    @error('r_description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="r_is_available">Available</label>
                    <input type="text" name="r_is_available" id="r_is_available" class="form-control @error('r_is_available') is-invalid @enderror" value="{{ $rooms->r_is_available }}" />
                    @error('r_is_available')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror


                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>

@endsection