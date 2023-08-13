<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Booking System | {{ $tittle }}</title>
  </head>
  <body>
        <div class="container col-md-4">
            <h1>Registation Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}"/>
                    <label class="form-label" for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                    @enderror
                  </div>
                    

                  <div class="form-outline mb-4">
                    <input type="text" name="ic" id="ic" class="form-control @error('ic') is-invalid @enderror" required value="{{ old('ic') }}"/>
                    <label class="form-label" for="ic">NO. IC</label>
                    @error('ic')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}"/>
                  <label class="form-label" for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
              
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required/>
                  <label class="form-label" for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
              
              
                <!-- Submit button -->
                <button type="submit" class="w-100 btn btn-lg btn-primary">Sign up</button>
              
                  </button>
                  <small class= "d-block text-center mt-3">Already Registered ? <a href="/login">Login Now!</a></small>
                </div>
              </form>
              
        </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  </body>
</html>