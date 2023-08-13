@extends('layout.main')

@section('container')
<h1 class="text-center">List User</h1>
    <div class="nk-block-head">
        <div class="nk-block-head-between flex-wrap gap g-2">
            <div class="nk-block-head-content">
            </div>
            <div class="nk-block-head-content">
                <ul class="d-flex">
                    <li>
                        <a href="{{ route('list-user.create') }}" class="btn btn-md d-md-none btn-primary" >
                            <em class="icon ni ni-plus"></em>
                            <span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('list-user.create') }}" class="btn btn-primary d-none d-md-inline-flex" >
                            <em class="icon ni ni-plus"></em>
                            <span>Add User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-block-head-between -->
    </div>

    <div class="nk-block">
        <div class="card">
            <table class="datatable-init table" data-nk-container="table-responsive">
                <thead class="table-light">
                    <tr>
                        <th class="tb-col">
                            <span class="overline-title">Users</span>
                        </th>
                        <th class="tb-col">
                            <span class="overline-title">Staff ID</span>
                        </th>
                        <th class="tb-col">
                            <span class="overline-title">Positions</span>
                        </th>
                        <th class="tb-col">
                            <span class="overline-title">Department</span>
                        </th>
                        <th class="tb-col" data-sortable="false">
                            <span class="overline-title">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user => $result)
                    <tr>
                        <td class="tb-col">
                            <div class="media-group">
                                <div class="media media-md media-middle media-circle">
                                    <img src="/images/avatar/a.jpg" alt="user">
                                </div>
                                <div class="media-text">
                                    <span class="title">{{ $result->name }}</span>
                                    <span class="small text">{{ $result->email }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="tb-col">{{ $result->staffid }}</td>
                        <td class="tb-col">{{ $result->role_id }}</td>
                        <td class="tb-col">{{ $result->department }}</td>
                        <td class="tb-col">
                            <form action="{{ route('list-user.destroy', $result->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('list-user.edit', $result->id) }}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
{{-- <div class="d-flex justify-content-center">
    {{ $users->links() }}
</div> --}}

@endsection