<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>EndGam - Gaming Magazine Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="EndGam Gaming Magazine Template">
    <meta name="keywords" content="endGam,gGaming, magazine, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('HTML/img/2bchibi.ico')}}" rel="shortcut icon"/>

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
                    <a href="">Login</a> / <a href="">Register</a>
                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="games.html">Games</a>
                        <ul class="sub-menu">
                            <li><a href="game-single.html">Game Singel</a></li>
                        </ul>
                    </li>
                    <li><a href="review.html">Reviews</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="{{asset('HTML/img/page-top-bg/3.jpg')}}">
    <div class="page-info">
        <h2>Blog</h2>
        <div class="site-breadcrumb">
            <a href="">Home</a>  /
            <span>Blog</span>
        </div>
    </div>
</section>
<!-- Page top end-->


<!-- Blog page -->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                <ul class="blog-filter">
                    <li><a href="#">Racing</a></li>
                    <li><a href="#">Shooters</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Online</a></li>
                </ul>
                <div class="big-blog-item">
                    <img src="{{asset('HTML/img/blog-big/1.jpg')}}" alt="#" class="blog-thumbnail">
                    <div class="blog-content text-box text-white">
                        <div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
                        <h3>The best VR games on the market</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
                        <a href="#" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
                    </div>
                </div>

                <div class="site-pagination">
                    <a href="#" class="active">01.</a>
                    <a href="#">02.</a>
                    <a href="#">03.</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 sidebar">
                <div id="stickySidebar">
                    <div class="widget-item">
                        <form class="search-widget">
                            <input type="text">
                            <button>search</button>
                        </form>
                    </div>
                    <div class="widget-item">
                        <h4 class="widget-title">Trending</h4>
                        <div class="trending-widget">
                            <div class="tw-item">
                                <div class="tw-thumb">
                                    <img src="./img/blog-widget/1.jpg" alt="#">
                                </div>
                                <div class="tw-text">
                                    <div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
                                    <h5>The best online game is out now!</h5>
                                </div>
                            </div>
                            <div class="tw-item">
                                <div class="tw-thumb">
                                    <img src="./img/blog-widget/2.jpg" alt="#">
                                </div>
                                <div class="tw-text">
                                    <div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
                                    <h5>The best online game is out now!</h5>
                                </div>
                            </div>
                            <div class="tw-item">
                                <div class="tw-thumb">
                                    <img src="./img/blog-widget/3.jpg" alt="#">
                                </div>
                                <div class="tw-text">
                                    <div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
                                    <h5>The best online game is out now!</h5>
                                </div>
                            </div>
                            <div class="tw-item">
                                <div class="tw-thumb">
                                    <img src="./img/blog-widget/4.jpg" alt="#">
                                </div>
                                <div class="tw-text">
                                    <div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
                                    <h5>The best online game is out now!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="widget-item">--}}
{{--                        <div class="categories-widget">--}}
{{--                            <h4 class="widget-title">categories</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="">Games</a></li>--}}
{{--                                <li><a href="">Gaming Tips & Tricks</a></li>--}}
{{--                                <li><a href="">Online Games</a></li>--}}
{{--                                <li><a href="">Team Games</a></li>--}}
{{--                                <li><a href="">Community</a></li>--}}
{{--                                <li><a href="">Uncategorized</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="widget-item">
                        <a href="#" class="add">
                            <img src="./img/add.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog page end-->


<!-- Newsletter section -->
<section class="newsletter-section">
    <div class="container">
        <h2>Subscribe to our newsletter</h2>
        <form class="newsletter-form">
            <input type="text" placeholder="ENTER YOUR E-MAIL">
            <button class="site-btn">subscribe <img src="img/icons/double-arrow.png" alt="#"/></button>
        </form>
    </div>
</section>
<!-- Newsletter section end -->


<!-- Footer section -->
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
        <div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
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
