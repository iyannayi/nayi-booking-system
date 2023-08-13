@extends('layout.main')

@section('container')

<h1>Create User</h1>
<a href="{{ route('list-user.index') }}" class="btn btn-primary mb-3">Back</a>
<div class="card">
    <div class="card-body">
        <form action="{{ route('list-user.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required />
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                    @enderror

                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required />
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required/>
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror

                    <label class="form-label" for="ic">ic</label>
                    <input type="text" name="ic" id="ic" class="form-control @error('ic') is-invalid @enderror" required />
                    @error('ic')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="phone">phone</label>
                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" />
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="col-md-6">

                    <label class="form-label" for="staffid">staffid</label>
                    <input type="text" name="staffid" id="staffid" class="form-control @error('staffid') is-invalid @enderror"  />
                    @error('staffid')
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

                    <label class="form-label" for="department">department</label>
                    <input type="text" name="department" id="department" class="form-control @error('department') is-invalid @enderror"  />
                    @error('department')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label class="form-label" for="section">section</label>
                    <input type="text" name="section" id="section" class="form-control @error('section') is-invalid @enderror"  />
                    @error('section')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example" id="role_id" name="role_id">
                        @foreach($roles as $role=> $result)
                        <option value="{{ $result-> r_role}}">{{ $result-> r_name}}</option>@endforeach
                    </select>

                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>

@endsection