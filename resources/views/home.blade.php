@extends('layout.main')

@section('container')
    <h1>apapapapapapaaa</h1>
    @if (auth()->user()->role_id == '1')
        <h1>admin</h1>
        @endif
@endsection
