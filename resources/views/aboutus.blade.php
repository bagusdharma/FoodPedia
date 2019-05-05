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
                                    <a class="dropdown-item" href="">Breakfast</a>
                                    <a class="dropdown-item" href="">Lunch</a>
                                    <a class="dropdown-item" href="">Dinner</a>
                                    <a class="dropdown-item" href="">FastFood</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Lokasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/aboutus">Tentang Kami</a>
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
            <div class="row member-content">
                <div class="col-sm-4 col-sm-offset-1 member-thumb  fade-right in">
                    <img class="img-fluid img-center img-thumbnail rounded-circle"
                        src="https://bootdey.com/img/Content/User_for_snippets.png" alt="">
                    <h4>Bagus Dharma Iswara</h4>
                    <p class="title">5115100028</p>
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
                            <p style="font-size:20px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-push-8 member-thumb">
                        <img class="img-fluid img-center img-thumbnail rounded-circle"
                            src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="">
                        <h4>Karina S</h4>
                        <p class="title">5117----------</p>
                    </div>
                </div>

            <div class="row member-content">
                <div class="col-sm-4 col-sm-offset-1 member-thumb">
                    <img class="img-fluid img-center img-thumbnail rounded-circle"
                        src="https://bootdey.com/img/Content/HexGames349.jpg" alt="">
                    <h4>El morenito</h4>
                    <p class="title">Lead Developer</p>
                </div>
                <div class="col-sm-8">
                    <div class="details">
                        <p style="font-size:20px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>

            <div class="row member-content right">
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="details">
                        <p style="font-size:20px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-push-8 member-thumb">
                    <img class="img-fluid img-center img-thumbnail rounded-circle"
                        src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="">
                    <h4>Karina S</h4>
                    <p class="title">5117----------</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection