<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
      <h2>Register</h2>
      <form id="login-form" method="POST" action="{{ route('register') }}">
        @csrf

        <p>
            <input type="text" id="email" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <p>
        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" >
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror



        <p>
            <input id="email" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" >
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </p>


        <input id="email" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Password Confirmation">




        <p>
        <input type="submit" id="login" value="Register">
        </p>
      </form>
      <div id="create-account-wrapp">
        <p><p>
            <div id="create-account-wrap">
                <p>Already have an account? <a href="{{ route('login') }}">Login here!</a><p>
              </div><!--create-account-wrap-->
            </div><!--login-form-wrap-->
            <!-- partial -->

    </body>
    </html>




















