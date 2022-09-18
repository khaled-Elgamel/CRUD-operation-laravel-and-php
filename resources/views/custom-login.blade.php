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
      <h2>Login</h2>
      <form id="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <p>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Email" >
            @error('email')
        <span>{{ $message }}</span>
        @enderror
        </p>
        <p>
        <input type="password" id="password" name="password" placeholder="Password" >
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        </p>
        <p>
        <input type="submit" id="login" value="Login">
        </p>
      </form>
      <div id="create-account-wrap">
        <p>Not a member? <a href="{{ route('register') }}">Create Account</a><p>
      </div><!--create-account-wrap-->
    </div><!--login-form-wrap-->
    <!-- partial -->

    </body>
    </html>






