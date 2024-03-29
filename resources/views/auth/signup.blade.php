<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  <link rel="stylesheet" href="./CSS/login.css">
  <script defer src="./js/script.js"></script>
</head>

<style>
  



</style>

<body>
  <div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
      <div class="col-lg-5">
        <div class="form-wrap border rounded p-4  rounded-5" style="box-shadow: -2px 6px 41px 3px rgba(0,0,0,0.52);
-webkit-box-shadow: -2px 6px 41px 3px rgba(0,0,0,0.52);
-moz-box-shadow: -2px 6px 41px 3px rgba(0,0,0,0.52);">
          <img style="margin-left: 140px;" width="180px" src="./IMG/logo.png">
          <h1>Sign up</h1>
          <p>Please fill this form to register</p>
          <!-- form starts here -->
          <form action="{{ route('user.store') }}" method="post" novalidate>
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control" name="name" id="name">
              {{-- <small class="text-danger"></small> --}}
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" id="email">
              {{-- <small class="text-danger"></small> --}}
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
              {{-- <small class="text-danger"></small> --}}
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="togglePassword">
              <label for="togglePassword" class="form-check-label">Show Password</label>
            </div>
            <div class="mb-3">
              <input type="submit" class="btn btn-success form-control" name="submit" value="Sign Up">
            </div>
            <p class="mb-0">Already have an account ? <a style="color: red" href="{{ route('auth.login') }}">Log In</a></p>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </form>
          <!-- form ends here -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>