@extends('layout.main')

@section('container')
<h1 class="text-center">List Rooms</h1>
<div class="nk-block">
    <div class="card">
        <table class="datatable-init table" data-nk-container="table-responsive">
            <thead class="table-light">
                <tr>
                    <th class="tb-col">
                        <span class="overline-title">Pemohon</span>
                    </th>
                    <th class="tb-col">
                        <span class="overline-title">Jenis Bilik</span>
                    </th>
                    <th class="tb-col">
                        <span class="overline-title">Description</span>
                    </th>
                    <th class="tb-col">
                        <span class="overline-title">Available</span>
                    </th>
                    <th class="tb-col" data-sortable="false">
                        <span class="overline-title">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookingrooms as $bookingroom)
                <tr>
                    <td class="tb-col">
                        <div class="media-group">
                            <div class="media media-md media-middle media-circle">
                                <img src="/images/avatar/a.jpg" alt="user">
                            </div>
                            <div class="media-text">
                                <span class="title">{{ $bookingroom->user->name }}</span>
                                <span class="small text">{{ $bookingroom->user->staffid }}</span>
                                <span class="small text">{{ $bookingroom->user->role_id }}</span>
                            </div>
                        </div>
                    </td>
                    <td class="tb-col">
                        <div class="media-text">
                            <span class="title">{{ $bookingroom->rooms->r_name }}</span>
                            <span class="small text">{{ $bookingroom->rooms->r_capacity }}</span>
                            <span class="small text">{{ $bookingroom->rooms->r_facility }} </span>
                        </div>
                    </td>
                    <td class="tb-col">
                        <div class="media-text">
                            <span class="title">{{ $bookingroom->rooms->r_name }}</span>
                            <span class="small text">{{ $bookingroom->rooms->r_capacity }}</span>
                            <span class="small text">{{ $bookingroom->rooms->r_facility }} </span>
                        </div>
                    </td>
                    <td class="text-center" style="background-color: {{ $statusColors[$bookingroom->br_status]['color'] }}">
                        {{ $statusColors[$bookingroom->br_status]['text'] }}
                    </td>
                    <td class="tb-col text-center">
                        <a class="btn btn-primary" href="{{ route('stumesyuarat.edit', $bookingroom->br_id) }}">sss</a>
                        {{-- <form action="{{ route('stumesyuarat.update', $bookingroom->br_id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="br_status" value="1">
                            <button type="submit" class="btn btn-success mb-2">LULUS</button>
                        </form>
                        <form action="{{ route('stumesyuarat.update', $bookingroom->br_id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="br_status" value="0">
                            <button type="submit" class="btn btn-danger">TAK LULUS</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 