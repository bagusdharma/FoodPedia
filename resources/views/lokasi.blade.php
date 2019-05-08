@extends('layouts.app')

<script src="js/filter.js"></script>

{{-- <style>
.container {
  overflow: hidden;
}

.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}
</style> --}}

{{-- <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script> --}}

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


<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-5">
            <div class="styled-heading">
                <h3>Lokasi</h3>
            </div>
        </div>
    </div>
    <div class="row form-group">
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
         Pilih Nama Provinsi :
        <select class="form-control" id="country" name="country"></select>
        {{-- Kabupaten / Kota:
       <select name="state" id="state" class="form-control"></select> --}}
      </div>
      <div class="col-lg-4">
           Kabupaten / Kota:
          <select name="state" id="state" class="form-control"></select>
      </div>
      <div class="col-lg-2"><br> <a href="/hasil" class="btn btn-md btn-primary"><i class="fa fa-search"></i> Search</a>
      </div>
    </div>
    <br />
    <br/>
    <script language="javascript">
        populateCountries("country", "state");
    </script>
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
                      <h6>Bebek Sinjay</h6>
                      <p>Restaurant </p> <span>• </span>
                      <p>45 Reviews</p> <span> </span>
                      <ul>
                          <li><span class="icon-location-pin"></span>
                              <p>Jl. Dharmahusada No.160B, Mojo, Gubeng</p>
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
                      <h6>Tasty Hand-Pulled Noodles</h6>
                      <p>Restaurant </p> <span>• </span>
                      <p>3 Reviews</p> <span>  </span>
                      <ul>
                          <li><span class="icon-location-pin"></span>
                              <p>1301 Avenue, Brooklyn, NY 11230</p>
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
    <!-- Control buttons -->
{{-- <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('cars')"> Cars</button>
    <button class="btn" onclick="filterSelection('animals')"> Animals</button>
    <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
    <button class="btn" onclick="filterSelection('colors')"> Colors</button>
  </div>
  
  <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
  <div class="container">
    <div class="filterDiv cars">BMW</div>
    <div class="filterDiv colors fruits">Orange</div>
    <div class="filterDiv cars">Volvo</div>
    <div class="filterDiv colors">Red</div>
    <div class="filterDiv cars animals">Mustang</div>
    <div class="filterDiv colors">Blue</div>
    <div class="filterDiv animals">Cat</div>
    <div class="filterDiv animals">Dog</div>
    <div class="filterDiv fruits">Melon</div>
    <div class="filterDiv fruits animals">Kiwi</div>
    <div class="filterDiv fruits">Banana</div>
    <div class="filterDiv fruits">Lemon</div>
    <div class="filterDiv animals">Cow</div>
  </div>
</div> --}}

{{-- <h2>Sort News</h2>
<select name="sort-news" id="sort-news">
	<option value="All">All news</option>
	<option value="Cat1">Category 1</option>
	<option value="Cat2">Category 2</option>
	<option value="Cat3">Category 3</option>
</select> 
<hr />
<section class="news-list">
  <article class="news-item" data-category="Cat1">
	<div class="thumb">
		<img alt="Our ALT text here" title="Our title here" src="http://placehold.it/150x150">
	</div>
	<div class="news-txt">
		<h3><a href="">A news title</a></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
	</div>
</article>
<article class="news-item" data-category="Cat2">
	<div class="thumb">
		<img alt="Our ALT text here" title="Our title here" src="http://placehold.it/150x150">
	</div>
	<div class="news-txt">
		<h3><a href="">A news title</a></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
	</div>
</article>
<article class="news-item" data-category="Cat3">
	<div class="thumb">
		<img alt="Our ALT text here" title="Our title here" src="http://placehold.it/150x150">
	</div>
	<div class="news-txt">
		<h3><a href="">A news title</a></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
    </div>
 </article>
  </section>
</div> --}}


</div>
@endsection