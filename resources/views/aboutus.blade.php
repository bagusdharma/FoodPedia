@extends('layouts.app')

<link rel="stylesheet" href="css/aboutus.css">

@section('content')

<!--============================= HEADER =============================-->
<div class="dark-bg sticky-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">FoodPedia</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
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

<div class="container">
    <div id="team" class="white-bg padding-top-bottom">
        <div class="container">
            <h1 class="section-title text-center page-title">Meet Our Team</h1>
            <p class="section-description text-center">We are a small team with great skills. See the faces behind the
                lines of code. </p>
            <hr>
            <hr>
            <div class="row member-content">
                <div class="col-sm-4 col-sm-offset-1 member-thumb  fade-right in">
                    <img class="img-fluid img-center img-thumbnail rounded-circle"
                        src="https://www.thewrap.com/wp-content/uploads/2015/04/Robert-Downey-Jr.-Tonight-Show.jpg" alt="">
                    <h4>Bagus Dharma Iswara</h4>
                    <p class="title">05111540000028</p>
                </div>
                <div class="col-sm-8">
                    <div class="details">
                       <p style="font-size:20px">Jalani kuliah dengan senang hati dan santai jangan terbebani </p>
                    </div>
                </div>
            </div>

            <div class="row member-content right">
                    <div class="col-sm-8 col-sm-pull-4">
                        <div class="details">
                            <p style="font-size:20px">Sans</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-push-8 member-thumb">
                        <img class="img-fluid img-center img-thumbnail rounded-circle"
                            src="http://pixdaus.com/files/items/pics/7/82/252782_47a760312539adb0b6157127979257e2_large.jpg" alt="">
                        <h4>Yanuar</h4>
                        <p class="title">05111640000000</p>
                    </div>
                </div>

            <div class="row member-content">
                <div class="col-sm-4 col-sm-offset-1 member-thumb">
                    <img class="img-fluid img-center img-thumbnail rounded-circle"
                        src="https://media.wmagazine.com/photos/5a5f5f33c4341d3bec531e85/4:3/w_1536/kendall-jenner-blake-griffin-never-serious-web-lead.jpg" alt="">
                    <h4>Karina Soraya Puspitasari</h4>
                    <p class="title">05111740000003</p>
                </div>
                <div class="col-sm-8">
                    <div class="details">
                        <p style="font-size:20px">Gapai mimpimu hingga idolamu menjadi partner hidupmu</p>
                    </div>
                </div>
            </div>

            <div class="row member-content right">
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="details">
                        <p style="font-size:20px">Food is Everything</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-push-8 member-thumb">
                    <img class="img-fluid img-center img-thumbnail rounded-circle"
                        src="https://data.whicdn.com/images/313946774/large.jpg" alt="">
                    <h4>Tria Nur Aisyah Amini</h4>
                    <p class="title">05111740000092</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection