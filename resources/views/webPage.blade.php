<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Gaming Ps4</title>
    <meta charset="UTF-8">
    <meta name="description" content="EndGam Gaming Magazine Template">
    <meta name="keywords" content="endGam,gGaming, magazine, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('HTML/img/2bchibi.ico')}}" rel="shortcut icon"/>
    <base href="{{asset('')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('HTML/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('HTML/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('HTML/css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('HTML/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('HTML/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('HTML/css/animate.css')}}"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{asset('HTML/css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <div class="header-social d-flex justify-content-end">
            <p>Follow us:</p>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
        </div>
        <div class="header-bar-warp d-flex">
            <!-- site logo -->
            <a href="home.html" class="site-logo">
                <img src="{{asset('HTML/img/headee.png')}}" alt="" style="width: 100px;height: 39px"> <!-- ./ -->
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">


                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a  href="">Trang chủ</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('user.index')}}">Mua bán Game</a></li>
                            <li><a href="{{route('user.index')}}">Thông tin game</a></li>
                        </ul></li>

                    <li><a href="games.html">Games</a>
                        <ul class="sub-menu">
                            <li><a href="game-single.html">Game Singel</a></li>
                        </ul>
                    </li>
                    <li><a href="review.html">Reviews</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a style="color: orangered" href="games.html">Admin</a>
                        <ul class="sub-menu">
                            <li><a style="color: orangered" href="{{route('login.index')}}">Truy cập quyền Admin</a></li>
                        </ul></li>

                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section overflow-hidden">
    <div class="hero-slider owl-carousel">
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('HTML/img/slider-bg-1.jpg')}}">
            <div class="container">
                <h2 style="color: purple">Ps4 Center</h2>
                <p style="color: papayawhip">Hội tụ những sản phẩm, hệ máy ps4 mới nhất,<br>và những tựa game độc quyền ps4. Sở hữu ngay!</p>
                <a href="{{route('user.index')}}" class="site-btn">Xem ngay! <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>
            </div>
        </div>
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('HTML/img/slider-bg-2.jpg')}}">
            <div class="container">
                <h2>Gaming Center</h2>
                <p>Cập nhật những thông tin game<br>mới nhất.</p>
                <a href="#" class="site-btn">Xem ngay!  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end-->


<!-- Intro section -->
<section class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="intro-text-box text-box text-white">
                    <div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
                    <h3>The best online game is out now!</h3>
                    <p> add text vao day</p>
                    <a href="#" class="read-more">Read More  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-text-box text-box text-white">
                    <div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
                    <h3>Top 5 best games in november</h3>
                    <p>add text vao day</p>
                    <a href="#" class="read-more">Read More  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-text-box text-box text-white">
                    <div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
                    <h3>Get this game at a promo price</h3>
                    <p> add text vao day.</p>
                    <a href="#" class="read-more">Read More  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->


<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                <div class="section-title text-white">
                    <h2>Thông tin mới nhất:</h2>
                </div>
                <ul class="blog-filter">
                    <li><a href="#">Racing</a></li>
                    <li><a href="#">Shooters</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Online</a></li>
                </ul>


                <!-- Blog item -->
                <!-- ALERT BLOG HERE, code here-->

                @foreach($blog as $key => $value)
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{asset("storage/".$value->headImage)}}" style="width: 280px;height: 290px">
                    </div>
                    <div class="blog-text text-box text-white">
                        <div class="top-meta">Đã tạo: {{$value->created_at}} <a href="">Games</a></div>
                        <h3>{{$value->title}}</h3>
                        <a>Game: {{$value->game}}</a><br>
                        <a href="{{route('blogs.show',$value->id)}}" class="site-btn" style="color: #0b0b0b">Xem chi tiết  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>


                    </div>
                </div>
                    ---
                @endforeach


                <div> {{$blog->links()}}</div>

            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 sidebar">
                <div id="stickySidebar">

                    <div class="widget-item">
                        <h4 class="widget-title">Ps4 đang được bày bán!</h4>
                        @foreach($package as $key => $value)
                        <div class="trending-widget">
                            <div class="tw-item">
                                <div class="tw-thumb">
                                    <img src="{{asset("storage/".$value->image)}}" style="width: 50px;height: 50px">
                                </div>
                                <div class="tw-text">
                                    <div class="tw-meta">Cập nhật ngày: {{$value->created_at}}</div>
                                    <h5>{{$value->name}}</h5>
                                </div>
                            </div>
                        </div>
                            ---
                        @endforeach
                    </div>
                {{$package->links()}}

                    <div class="widget-item">
                        <div class="categories-widget">
                            <h4 class="widget-title">Thể loại:</h4>
                            <ul>
                                <li><a href="">Games</a></li>
                                <li><a href="">Sản phẩm</a></li>
                                <li><a href="">Phụ kiện</a></li>
                                <li><a href="">Tin tức</a></li>
                                <li><a href="">Community</a></li>
                            </ul>
                        </div>
                    </div>
{{--                    <div class="widget-item">--}}
{{--                        <a href="#" class="add">--}}
{{--                            <img src="{{asset('HTML/img/add.jpg')}}" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog section end -->


<!-- Intro section -->
<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="{{asset('HTML/img/promo-bg.jpg')}}">
    <a href="https://www.youtube.com/watch?v=NK9F1zwBNug" class="video-play-btn video-popup"><img src="{{asset('HTML/img/icons/solid-right-arrow.png')}}" alt="#"></a>
    <div class="container">
        <div class="video-text">
            <h2>Trải nghiệm đồ họa game trên PS4 Pro</h2>
            <p>Không gì là không thể!</p>
        </div>
    </div>
</section>
<!-- Intro section end -->

<!-- Featured section -->
<section class="featured-section">
    <div class="featured-bg set-bg" data-setbg="{{asset('HTML/img/oabqrhb06fcln62ndplu.gif')}}"></div>
    <div class="featured-box">
        <div class="text-box">
            <div class="top-meta">10-10 /  in <a href="">Games</a></div>
            <h3>Sở hữu ngay đĩa game và hệ Ps4 mới nhất!</h3>
            <p>Thế giới game rộng mở đang chờ bạn khám phá, chỉ với một lần bấm, bạn sẽ có thể sở hữu cho mình sản phẩm chính hãng và được tặng kèm một đĩa Horizon:Hero Dawn miễn phí!</p>
            <a href="{{route('user.index')}}" class="read-more">Mua ngay!  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></a>
        </div>
    </div>
</section>
<!-- Featured section end-->



<!-- Newsletter section -->
<section class="newsletter-section">
    <div class="container">
        <h2>Đăng kí để nhận những sản phẩm mới nhất</h2>
        <form class="newsletter-form">
            <input type="text" placeholder="ENTER YOUR E-MAIL">
            <button class="site-btn">Đăng kí  <img src="{{asset('HTML/img/icons/double-arrow.png')}}" alt="#"/></button>
        </form>
    </div>
</section>
<!-- Newsletter section end -->


<!-- Footer section -->
@yield('footer')
<footer class="footer-section">
    <div class="container">
        <div class="footer-left-pic">
            <img src="{{asset('HTML/img/gearps4.png')}}" alt="">
        </div>
        <div class="footer-right-pic">
            <img src="{{asset('HTML/img/batman.png')}}" alt="">
        </div>
        <a href="#" class="footer-logo">
            <img src="{{asset('HTML/img/headee.png')}}" style="width: 100px;height: 39px" alt="">
        </a>
        <ul class="main-menu footer-menu">
            <li><a href="">Home</a></li>
            <li><a href="">Games</a></li>
            <li><a href="">Reviews</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="footer-social d-flex justify-content-center">
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
        </div>
        <div class="copyright"><a href="">Gaming Ps4</a> 2019 @ All rights reserved Nam Nguyen</div>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('HTML/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('HTML/js/bootstrap.min.js')}}"></script>
<script src="{{asset('HTML/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('HTML/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('HTML/js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('HTML/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('HTML/js/main.js')}}"></script>

</body>
</html>
