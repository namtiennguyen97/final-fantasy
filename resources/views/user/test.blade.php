<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('table_switcher/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('table_switcher/css/style.css')}}"> <!-- Resource style -->
    <script src="{{asset('table_switcher/js/modernizr.js')}}"></script> <!-- Modernizr -->
{{--    <title>{{$product}}| CodyHouse</title>--}}
</head>
<body>
<header class="cd-header">
    <h1>Trang quản lý Admin</h1>
</header>
<div class="cd-pricing-container">
    <div class="cd-pricing-switcher">
        <p class="fieldset">
            <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
            <label for="monthly-1">QL Chính</label>
            <input type="radio" name="duration-1" value="yearly" id="yearly-1">
            <label for="yearly-1">Khác</label>
            <span class="cd-switch"></span>
        </p>
    </div> <!-- .cd-pricing-switcher -->

    <ul class="cd-pricing-list cd-bounce-invert">
        <li>
            <ul class="cd-pricing-wrapper">
                <li data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Quản lý</h2>

                        <div class="cd-price">
{{--                            <span class="cd-currency">$</span>--}}
                            <span class="cd-value"> Game</span>
{{--                            <span class="cd-duration">mo</span>--}}
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>256MB</em> Memory</li>
                            <li><em>1</em> User</li>
                            <li><em>1</em> Website</li>
                            <li><em>1</em> Domain</li>
                            <li><em>Unlimited</em> Bandwidth</li>
                            <li><em>24/7</em> Support</li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="{{route('products.index')}}" >Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>

                <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header">
                        <h2>Basic</h2> <!-- nó ở đây này!!!!!!!!!!! -->
                        <div class="cd-price">
                            <span class="cd-currency">$</span>
                            <span class="cd-value">320</span>
                            <span class="cd-duration">yr</span>
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>256MB</em> Memory</li>
                            <li><em>1</em> User</li>
                            <li><em>1</em> Website</li>
                            <li><em>1</em> Domain</li>
                            <li><em>Unlimited</em> Bandwidth</li>
                            <li><em>24/7</em> Support</li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="http://codyhouse.co/?p=429">Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>

        <li class="cd-popular">
            <ul class="cd-pricing-wrapper">
                <li data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Quản lý</h2>

                        <div class="cd-price">
{{--                            <span class="cd-currency">$</span>--}}
                            <span class="cd-value">Blog</span>
{{--                            <span class="cd-duration">mo</span>--}}
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>512MB</em> Memory</li>
                            <li><em>3</em> Users</li>
                            <li><em>5</em> Websites</li>
                            <li><em>7</em> Domains</li>
                            <li><em>Unlimited</em> Bandwidth</li>
                            <li><em>24/7</em> Support</li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="{{ route('blogs.index') }}">Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>

                <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header">
                        <h2>Popular</h2>

                        <div class="cd-price">
                            <span class="cd-currency">$</span>
                            <span class="cd-value">630</span>
                            <span class="cd-duration">yr</span>
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>512MB</em> Memory</li>
                            <li><em>3</em> Users</li>
                            <li><em>5</em> Websites</li>
                            <li><em>7</em> Domains</li>
                            <li><em>Unlimited</em> Bandwidth</li>
                            <li><em>24/7</em> Support</li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="http://codyhouse.co/?p=429">Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>

        <li>
            <ul class="cd-pricing-wrapper">
                <li data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Quản lý</h2>

                        <div class="cd-price">
{{--                            <span class="cd-currency">$</span>--}}
                            <span class="cd-value">Dòng máy</span>
{{--                            <span class="cd-duration">mo</span>--}}
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>1024MB</em> Memory</li>
                            <li><em>5</em> Users</li>
                            <li><em>10</em> Websites</li>
                            <li><em>10</em> Domains</li>
                            <li><em>Unlimited</em> Bandwidth</li>
                            <li><em>24/7</em> Support</li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="http://codyhouse.co/?p=429">Truy cập</a>
                    </footer>  <!-- .cd-pricing-footer -->
                </li>

                <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header">
                        <h2>Premier</h2>
                        <div class="cd-price">
                            <span class="cd-currency">$</span>
                            <span class="cd-value">950</span>
                            <span class="cd-duration">yr</span>
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>1024MB</em> Memory</li>
                            <li><em>5</em> Users</li>
                            <li><em>10</em> Websites</li>
                            <li><em>10</em> Domains</li>
                            <li><em>Unlimited</em> Bandwidth</li>
                            <li><em>24/7</em> Support</li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                    </footer>  <!-- .cd-pricing-footer -->
                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>
    </ul> <!-- .cd-pricing-list -->
</div> <!-- .cd-pricing-container -->
<a href="{{route('login.index')}}" class="btn btn-primary" style="background-color: orangered">< Quay lại </a>



<script src="{{asset('table_switcher/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('table_switcher/js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>
