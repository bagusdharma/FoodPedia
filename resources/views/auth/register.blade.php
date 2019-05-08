<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun FoodPedia</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{asset('register-page/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('register-page/css/style.css')}}">
</head>

<body>
    <div class="main">

        <div class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" action="{{ route('register') }}" class="signup-form">
                        @csrf
                        <h2 class="form-title">Buat Akun FoodPedia</h2>
                        <div class="form-group">
                            <input id="name" placeholder="Masukkan Nama" type="text"
                                class="form-input @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <input id="email" placeholder="Masukkan Email" type="email"
                                class="form-input @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" placeholder="Masukkan Password" type="password"
                                class="form-input @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" placeholder="Confirm Password" type="password"
                                class="form-input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="form-submit"> Daftar</button>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="/login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('template/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('register-page/js/main.js')}} "></script>
