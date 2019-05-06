@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('login_page/images/img-01.png') }}" alt="FoodPedia logo">
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ url('login') }}">
                @csrf
                <span class="login100-form-title">
                    Login to FoodPedia
                </span>
                @if (\Session::has('message'))
                    <div class="alert alert-danger text-center" role="alert">
                        <h6 style="font-size: 12px">{!! \Session::get('message') !!}</h6>
                    </div>
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success text-center" role="alert" >
                        <h6 style="font-size: 12px">{!! \Session::get('success') !!}</h6>
                    </div>
                @endif
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                    <input id="email" type="email" class="input100 name="email" value="{{ old('email') }}" required placeholder="Email" name="email">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input id="password" type="password" class="input100 name="password" required placeholder="Password" name="password">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    {{-- @if (Route::has('password.request')) --}}
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="">
                        Username / Password?
                    </a>
                    {{-- @endif --}}
                </div>
                <br><br>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('login_page/vendor/tilt/tilt.jquery.min.js')}} "></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('login_page/js/main.js')}}"></script>
@endsection
