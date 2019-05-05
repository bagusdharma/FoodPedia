@extends('layouts.app')

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
                                <a class="nav-link" href="">Tentang Kami</a>
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

<style>
    .inf-content {
        border: 1px solid #DDDDDD;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="container bootstrap snippet mt-3 mb-3">
    <div class="card-body inf-content">
        <div class="row">
            <div class="col-md-5">
                <img alt="" style="width:600px;" title="" class="rounded-circle img-thumbnail isTooltip img-fluid"
                    src="https://bootdey.com/img/Content/user-453533-fdadfd.png" data-original-title="Usuario">
                {{-- <ul title="Ratings" class="list-inline ratings text-center">
                        <li><a href=""><span class="fa fa-star"></span></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-star"></span></a></li>
                    </ul> --}}
            </div>
            <div class="col-md-6">
                <h5 class="mt-4"><strong>User Profile</strong></h5>

                <br>
                <div class="table-responsive">
                    <table class="table table-condensed table-responsive table-user-information">
                        <tbody>
                            <tr>
                                {{-- <br> --}}
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        Full Name
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$data->name}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        Email
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$data->email}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        Phone Number
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$data->phone}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        Description
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$data->description}}
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong>
                                        Address
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$data->address}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection