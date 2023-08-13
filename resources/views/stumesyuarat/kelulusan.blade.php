@extends('layout.main')

@section('container')
<h1 class="text-center">Kelulusan</h1>
<a href="{{ route('stumesyuarat.index') }}" class="btn btn-primary mb-3">Back</a>

<div class="row">
    <div class="col-md-8">
        <div class="nk-block">
            <div class="card">
                <div class="nk-invoice">
                    <div class="nk-invoice-head flex-column flex-sm-row">
                        <div class="nk-invoice-head-item mb-3 mb-sm-0">
                            <div class="nk-invoice-brand mb-1">
                                <a href="/html/index.html" class="logo-link">
                                    <div class="logo-wrap">
                                        <img class="logo-img logo-light" src="/images/logo.png" srcset="/images/logo2x.png 2x" alt="">
                                        <img class="logo-img logo-dark" src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x" alt="">
                                        <img class="logo-img logo-icon" src="/images/logo-icon.png" srcset="/images/logo-icon2x.png 2x" alt="">
                                    </div>
                                </a>
                            </div>
                            <ul>
                                <li>info@company.com</li>
                                <li>(120) 456 789</li>
                            </ul>
                        </div>
                        <div class="nk-invoice-head-item text-sm-end">
                            <h1 style="color: {{ $statusColors[$bookingrooms->br_status]['color'] }}">{{ $statusColors[$bookingrooms->br_status]['text'] }}</h1>
                            <div class="h3">Invoices No: #790033</div>
                            <ul>
                                <li>Invoice Date: 20 Oct 2022</li>
                                <li>Due Date: 26 Oct 2022</li>
                            </ul>
                        </div>
                    </div><!-- .nk-invoice-head -->
                    
                    <div class="nk-invoice-body">
                        <h1 class="mt-4">Tujuan Pemohonan</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Nama</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->br_name }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Tujuan</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->br_purpose }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Date</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->br_date }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Slot</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->br_slot }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Anggaran Peserta</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->br_participants }}</span></td>
                                </tr>
                            </table>
                        </div>
                        <h1 class="mt-4">Jenis Bilik</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Nama Bilik</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->rooms->r_name }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Jenis Bilik</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->rooms->r_type }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Jumlah Peserta</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->rooms->r_capacity }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Fasiliti Bilik</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->rooms->r_facility }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Description Bilik</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->rooms->r_description }}</span></td>
                                </tr>
                            </table>
                        </div>
                        <h1 class="mt-4">Ditempah Oleh</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Nama</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->user->name }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Staff ID</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->user->staffid }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Email</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->user->email }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>NO Phone</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->user->phone }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Department</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->user->department }}</span></td>
                                </tr>
                                <tr>
                                    <th class="tb-col" style="width: 200px">
                                        <span>Role</span>
                                    </th>
                                    <td class="tb-col"><span>{{ $bookingrooms->user->role_id }}</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!-- .nk-invoice-body -->
                </div><!-- .nk-invoice -->
            </div><!-- .card -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('list-user.store') }}" method="POST">
                    @csrf
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required />
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                    @enderror
                    <label class="form-label" for="status">status</label>
                    <input type="text" name="status" id="status" class="form-control @error('status') is-invalid @enderror"  />
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example" id="role_id" name="role_id">
                        {{-- @foreach($roles as $role=> $result)
                        <option value="{{ $result-> r_role}}">{{ $result-> r_name}}</option>@endforeach --}}
                    </select>
                    <input type="submit" class="btn btn-primary mt-3" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>



@endsection