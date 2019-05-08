@extends('layouts.app')

@section('content')

<!--============================= HEADER =============================-->
<div class="dark-bg sticky-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" style="color:white" href="/">FoodPedia</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" style="color:white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Kategori
                                    <span class="icon-arrow-down"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/breakfast">Breakfast</a>
                                    <a class="dropdown-item" href="/lunch">Lunch</a>
                                    <a class="dropdown-item" href="/dinner">Dinner</a>
                                    <a class="dropdown-item" href="/fastfood">FastFood</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:white" href="/lokasi">Lokasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:white" href="/aboutus">Tentang Kami</a>
                            </li>
                            @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/avatar.png" class="rounded-circle img-fluid" width="30px"
                                        height="30px" alt="avatar image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                </div>
                            </li>
                            @else

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg"
                                        class="rounded-circle img-fluid" width="30px" height="30px" alt="avatar image">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/profile" class="dropdown-item">My Profile </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--//END HEADER -->

<div class="main-block light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>Lunch</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="/detail">
                        <img src="{{asset('template/images/featured1.jpg')}} " class="img-fluid" alt="">
                        <div class="featured-title-box">
                            <h6>Soto Cak Har</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>12 Reviews</p> <span></span>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>Jl. Arif Rahman Hakim, Keputih</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>0821-4059-3009</p>
                                </li>
                                <li>
                                    <p><span>&#9733;</span>&nbsp; 8.5/10</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="/detail">
                        <img src="{{asset('template/images/featured2.jpg')}} " class="img-fluid" alt="">
                        <div class="featured-title-box">
                            <h6>I Am Geprek Bensu</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>45 Reviews</p> <span> </span>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>Jl. Raya Mulyosari No.73A, Kalisari</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>0878-4965-5545</p>
                                </li>
                                <li>
                                    <p><span>&#9733;</span>&nbsp; 8.5/10</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="open-now">OPEN NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="/detail">
                        <img src="{{asset('template/images/featured3.jpg')}} " class="img-fluid" alt="">
                        <div class="featured-title-box">
                            <h6>Dapoer Mantab</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span>  </span>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>Jl. Marina Emas Barat III Blok A67, Keputih</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li>
                                    <p><span>&#9733;</span>&nbsp; 8.5/10</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="open-now">OPEN NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="featured-btn-wrap">
                    <a href="/lunchview" class="btn btn-lg btn-outline-danger">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection