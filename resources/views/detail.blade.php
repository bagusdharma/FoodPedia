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
<!--============================= slider =============================-->
<div>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{asset('template/images/reserve-slide2.jpg')}}" class="grid image-link">
                    <img src="{{asset('template/images/reserve-slide2.jpg')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('template/images/reserve-slide1.jpg')}}" class="grid image-link">
                    <img src="{{asset('template/images/reserve-slide1.jpg')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('template/images/reserve-slide3.jpg')}}" class="grid image-link">
                    <img src="{{asset('template/images/reserve-slide3.jpg')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('template/images/reserve-slide1.jpg')}}" class="grid image-link">
                    <img src="{{asset('template/images/reserve-slide1.jpg')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('template/images/reserve-slide2.jpg')}}" class="grid image-link">
                    <img src="{{asset('template/images/reserve-slide2.jpg')}} " class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('template/images/reserve-slide3.jpg')}}" class="grid image-link">
                    <img src="{{asset('template/images/reserve-slide3.jpg')}}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</div>
<!--//END BOOKING -->
<!--============================= RESERVE A SEAT =============================-->
<div class="reserve-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Soto Ayam Lamongan Cak Har</h5>
                <p><span>$$$$</span>$</p>
                <p class="reserve-description">Innovative cooking, paired with fine wines in a modern setting.</p>
            </div>
            <div class="col-md-6">
                <div class="reserve-seat-block">
                    <div class="reserve-rating">
                        <span>8.5</span>
                        {{-- <p>rating</p> --}}
                    </div>
                    <div class="review-btn">
                        <a href="" class="btn btn-outline-info">WRITE A REVIEW</a>
                        <span>34 reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END RESERVE A SEAT -->
<!--============================= BOOKING DETAILS =============================-->
<div class="light-bg booking-details_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 responsive-wrap">
                <div class="booking-checkbox_wrap">
                    <div class="booking-checkbox">
                        <p>Tasty Hand-Pulled Noodles is a 1950s style diner located in Madison, Wisconsin. Opened in
                            1946 by Mickey Weidman, and located just across the street from Camp Randall Stadium, it has
                            become a popular game day tradition amongst
                            many Badger fans. The diner is well known for its breakfast selections, especially the
                            Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of
                            other toppings.</p>
                        <p>Mickies has also been featured on “Todd’s Taste of the Town” during one of ESPN’s college
                            football broadcasts. We are one of the best Chinese restaurants in the New York, New York
                            area. We have been recognized for our outstanding
                            Chinese & Asian cuisine, excellent Chinese menu, and great restaurant specials. We are one
                            of the best Chinese restaurants in the New York, New York area. We have been recognized for
                            our outstanding Chinese & Asian cuisine,
                            excellent Chinese menu, and great restaurant specials.</p>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Bike Parking</span>
                            </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Wireless Internet </span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Smoking Allowed </span>
                            </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Street Parking</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Special</span>
                            </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Accepts Credit cards</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="booking-checkbox_wrap mt-4">
                    <h5>34 Reviews</h5>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="{{asset('template/images/customer-img1.jpg')}}" class="img-fluid" alt="#">
                            <p>Amanda G</p>
                            <span>35 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>Best noodles in the Newyork city</h6>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span class="round-icon-blank"></span>
                                    <p>Reviewed 2 days ago</p>
                                </div>
                                <div class="customer-rating">8.0</div>
                            </div>
                            <p class="customer-text">I love the noodles here but it is so rare that I get to come here.
                                Tasty Hand-Pulled Noodles is the best type of whole in the wall restaurant. The staff
                                are really nice, and you should be seated quickly. I usually get the
                                hand pulled noodles in a soup. House Special #1 is amazing and the lamb noodles are also
                                great. If you want your noodles a little chewier, get the knife cut noodles, which are
                                also amazing. Their dumplings are great
                                dipped in their chili sauce.
                            </p>
                            <p class="customer-text">I love how you can see into the kitchen and watch them make the
                                noodles and you can definitely tell that this is a family run establishment. The prices
                                are are great with one dish maybe being $9. You just have to remember
                                to bring cash.
                            </p>
                            <ul>
                                <li><img src="{{asset('template/images/review-img1.jpg')}}" class="img-fluid" alt="#">
                                </li>
                                <li><img src="{{asset('template/images/review-img2.jpg')}}" class="img-fluid" alt="#">
                                </li>
                                <li><img src="{{asset('template/images/review-img3.jpg')}}" class="img-fluid" alt="#">
                                </li>
                            </ul>
                            <span>28 people marked this review as helpful</span>
                            <span class="padding-left:10px"></span> <button class="btn btn-sm btn-outline-success"><i
                                    class="icon-like"></i> Helpful</button>
                        </div>
                    </div>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="{{asset('template/images/customer-img2.jpg')}}" class="img-fluid" alt="#">
                            <p>Kevin W</p>
                            <span>17 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>A hole-in-the-wall old school shop.</h6>
                                    <span class="customer-rating-red"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <p>Reviewed 3 months ago</p>
                                </div>
                                <div class="customer-rating customer-rating-red">2.0</div>
                            </div>
                            <p class="customer-text">The dumplings were so greasy...the pan-fried shrimp noodles were
                                the same. So much oil and grease it was difficult to eat. The shrimp noodles only come
                                with 3 shrimp (luckily the dish itself is cheap) </p>
                            <p class="customer-text">The beef noodle soup was okay. I added black vinegar into the broth
                                to give it some extra flavor. The soup has bok choy which I liked - it's a nice textural
                                element. The shop itself is really unclean (which is the case
                                in many restaurants in Chinatown) They don't wipe down the tables after customers have
                                eaten. If you peak into the kitchen many of their supplies are on the ground which is
                                unsettling... </p>
                            <span>10 people marked this review as helpful </span>
                            <span class="padding-left:10px"></span> <button class="btn btn-sm btn-outline-success"><i
                                    class="icon-like"></i> Helpful</button>
                        </div>
                    </div>
                    <p></p>
                    <hr>
                    <center><button class="btn btn-md btn-outline-danger mt-3 mb-3"> Load More ... </button></center>
                </div>
            </div>
            <div class="col-md-4 responsive-wrap">
                <div class="contact-info">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.1341558927525!2d112.78410862421048!3d-7.2899957789533785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa5caf205997%3A0x6ac098f3e685cf9c!2sSoto+Ayam+Lamongan+Cak+Har!5e0!3m2!1sid!2sid!4v1557019666071!5m2!1sid!2sid"
                        width="330" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="address">
                        <span class="icon-location-pin"></span>
                        <p>Jl. Arif Rahman Hakim, Keputih, Sukolilo</p>
                    </div>
                    <div class="address">
                        <span class="icon-screen-smartphone"></span>
                        <p>0821-4059-3009</p>
                    </div>
                    <div class="address">
                        <span class="icon-link"></span>
                        <p>https://google.com</p>
                    </div>
                    <div class="address">
                        <span class="icon-clock"></span>
                        <p>Mon - Sun 06:00 am - 11:00 pm <br>
                            <span class="open-now">OPEN NOW</span></p>
                    </div>
                    {{-- <a href="" class="btn btn-outline-danger btn-contact">SEND A MESSAGE</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END BOOKING DETAILS -->

<!-- Magnific popup JS -->
<script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
<!-- Swipper Slider JS -->
<script src="{{asset('template/js/swiper.min.js')}}"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script>
    if ($('.image-link').length) {
        $('.image-link').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
    if ($('.image-link2').length) {
        $('.image-link2').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
</script>

@endsection
