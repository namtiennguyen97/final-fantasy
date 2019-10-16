<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ps4 shopping</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('ustora/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('ustora/css/font-awesome.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('ustora/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('ustora/style.css')}}">
    <link rel="stylesheet" href="{{asset('ustora/css/responsive.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="site-branding-area">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="{{route('webPage')}}"><img src="{{asset('ustora/img/ps4gif.gif')}}" style="width: 140px;height: 70px">Ps4 CENTER</a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('webPage')}}">Home</a></li>
                    <li><a href="{{route('user.index')}}">Shop page</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            @foreach($claim as $key => $value)
            <li>
                <img src="{{asset("storage/".$value->image)}}" alt="Slide" style="height: 500px">
                <div class="caption-group">
                    <h2 class="caption title">
                      <span class="primary"><strong>{{$value->pop_up}}</strong></span>
                    </h2>
                    <h4 class="caption subtitle">PS4</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Xem ngay!</a>
                </div>
            </li>
            @endforeach




        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <img src="{{asset('ustora/img/fffffff.png')}}" style="height: 100px;width: 90px" alt="">
                    <p>Bảo hành 2 tháng!</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <img src="{{asset('ustora/img/money.png')}}" style="height: 100px;width: 90px" alt="">
                    <p>Miễn phí ship</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <img src=" {{asset('ustora/img/card.png')}}" style="height: 100px;width: 90px" alt="">
                    <p>Bảo mật mua Online</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <img style="height: 100px;width: 90px" src="{{asset('ustora/img/ps4_and_ps4_controller_512.png')}}" alt="">
                    <p>Sản phẩm/Game mới</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 style="color: orangered" class="section-title"><b>Danh sách mua Ps4 Game/Đĩa bản quyền</b></h2>
                    <form action="{{route('products.search')}}" method="get">
                        @csrf
                        <input type="text" placeholder="Search" name="keyword">
                        <input type="submit" value="Search">
                    </form>
                    <div class="product-carousel">
                        @foreach($product as $key => $value)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset("storage/".$value->image)}}" style="width: 200px; height: 300px">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                    <a href="{{route('show.product', $value->id)}}" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                </div>
                            </div>
                            <h2><a href="{{route('show.product', $value->id)}}">{{$value->name}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{number_format($value->old_price)  }} <a style="color: red">VND</a></ins> <del>{{number_format($value->price) }} VND</del>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<!-- Package -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 style="color: orangered" class="section-title"><b>Danh sách sản phẩm/mua bán hệ máy Ps4 </b></h2>
{{--                    <form action="{{route('products.search')}}" method="get">--}}
{{--                        @csrf--}}
{{--                        <input type="text" placeholder="Search" name="keyword">--}}
{{--                        <input type="submit" value="Search">--}}
{{--                    </form>--}}
                    <div class="product-carousel">
                        @foreach($package as $key => $value)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{asset("storage/".$value->image)}}" style="width: 200px; height: 300px">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                        <a href="{{route('packages.show',$value->id)}}" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="{{route('show.product', $value->id)}}">{{$value->name}}</a></h2>
                                <h2 style="color: darkgreen">Phiên bản: {{$value->publisher->version}}</h2>
                                <h2 style="color: red">Hãng: {{$value->publisher->name}}</h2>

                                <div class="product-carousel-price">
                                    <ins>{{ number_format($value->old_price)}} <a style="color: red">VND</a></ins> <del>{{number_format($value->price) }} VND</del>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->



{{--<div class="brands-area">--}}
{{--    <div class="zigzag-bottom"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <div class="brand-list">--}}
{{--                        <img src="{{asset('ustora/img/brand1.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand2.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand3.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand4.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand5.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand6.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand1.png')}}" alt="">--}}
{{--                        <img src="{{asset('ustora/img/brand2.png')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div> <!-- End brands area -->--}}


<!-- chan trang-->
<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>Gaming<span>Ps4</span></h2>
                    <p>Bảo mật, an toàn, thông tin chính xác. Mọi liên hệ gửi đến anh Luân Codygym để được nghe "Chết rồi Chết rồi!".</p>
                    <div class="footer-social">
                        <a href="facebook.com.vn" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="https://fr.pornhub.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="footer-menu">--}}
{{--                    <h2 class="footer-wid-title">User Navigation </h2>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">My account</a></li>--}}
{{--                        <li><a href="#">Order history</a></li>--}}
{{--                        <li><a href="#">Wishlist</a></li>--}}
{{--                        <li><a href="#">Vendor contact</a></li>--}}
{{--                        <li><a href="#">Front page</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Góp ý</h2>
                    <p>Nhập gmail để gửi báo cáo về admin- namtien10101997@gmail.com</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Điền Gmail">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2019-CodyGym Casestudy <a href="gmail.com" target="_blank">toilanam97@gmail.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="{{asset('ustora/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('ustora/js/jquery.sticky.js')}}"></script>

<!-- jQuery easing -->
<script src="{{asset('ustora/js/jquery.easing.1.3.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('ustora/js/main.js')}}"></script>

<!-- Slider -->
<script type="text/javascript" src="{{asset('ustora/js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ustora/js/script.slider.js')}}"></script>
</body>
</html>
