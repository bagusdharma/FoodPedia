<div class="nav-menu">
    <div class="bg transition">
        <div class="container-fluid fixed">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">FoodPedia</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                            class="rounded-circle img-fluid" width="30px" height="30px"
                                            alt="avatar image"> {{ Auth::user()->name }}
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
</div>