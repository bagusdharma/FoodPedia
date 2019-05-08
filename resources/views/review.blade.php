@extends('layouts.app')

@section('content')
<div class="light-bg booking-details_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 responsive-wrap">
                <div class="booking-checkbox_wrap mt-4">
                    <h5>34 Reviews</h5>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="{{asset('template/images/customer-img1.jpg')}}" class="img-fluid" alt="#">
                            <p>Karina</p>
                            <span>35 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>Best noodles in the Newyork city</h6>
                                   <p><font color="orange">&#9733;&#9733;&#9733;&#9733;</font>&#9733;</p>
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
                            <p>Bagus</p>
                            <span>17 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>A hole-in-the-wall old school shop.</h6>
                                    {{-- <span></span> --}} <p><font color="orange">&#9733;</font>&#9733;&#9733;&#9733;&#9733;</p>
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
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="https://i.pinimg.com/originals/c1/eb/9c/c1eb9c35b3330c46a738631245c14ab5.jpg" width="70px" height="70px" class="img-fluid rounded-circle" alt="#">
                            <p>Tria</p>
                            <span>5 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>Best noodles in the world</h6>
                                   <p><font color="orange">&#9733;&#9733;&#9733;&#9733;&#9733;</font></p>
                                    <p>Reviewed 5 days ago</p>
                                </div>
                                <div class="customer-rating">9.0</div>
                            </div>
                            <p class="customer-text">I love eating so much .. and this noodle is awesome noodle in the world.. so, i really love this noodle
                            </p>
                            <span>30 people marked this review as helpful</span>
                            <span class="padding-left:10px"></span> <button class="btn btn-sm btn-outline-success"><i
                                    class="icon-like"></i> Helpful</button>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
