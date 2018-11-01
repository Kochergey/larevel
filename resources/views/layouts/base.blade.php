<!DOCTYPE html>
<html>

<head>

<title>E Shop | Home</title> 

    <meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--webfont-->
<!-- for bootstrap working -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
    <script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
@section('styles')
<link href="{{asset('media/css/page.css')}}" rel="stylesheet" type="text/css" >
@show
</head>
<body>
    <!-- header-section-starts -->
    <div class="header">
        <div class="header-top-strip">
            <div class="container">
                <div class="header-top-left">
                    <ul>
                        <li><a href="{{asset('account.html')}}"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
                        <li><a href= "{{asset('register.html')}}"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>           
                    </ul>
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{asset('#')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </div>
                <div class="header-right">
                        <div class="cart box_1">
                            <a href= "{{asset('checkout.html')}}">
                                <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
                            </a>    
                            <p><a href=  "{{asset('basket')}}" class="simpleCart_empty">Empty cart</a></p>
                            <div class="clearfix"> </div>
                        </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- header-section-ends -->
            <div class="banner-top">
        <div class="container">
                <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <div class="logo">
                    <h1><a href=  "{{asset('home')}}" <span>E</span> -Shop</a></h1>
                </div>
        </div>
        <!--/.navbar-header-->
    
        <div class="collapse navbar-collapse" id="bs-exfample-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li><a href="{{asset('home')}}" >Home</a></li>
                <li class="dropdown">
                    <a href="{{asset('#')}}" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>NEW IN</h6>
                                    <li><a href="{{asset('products.html')}}">New In Clothing</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Bags</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Shoes</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Watches</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Grooming</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>CLOTHING</h6>
                                    <li><a href="{{asset('products.html')}}">Polos & Tees</a></li>
                                    <li><a href="{{asset('products.html')}}">Casual Shirts</a></li>
                                    <li><a href="{{asset('products.html')}}">Casual Trousers</a></li>
                                    <li><a href="{{asset('products.html')}}">Jeans</a></li>
                                    <li><a href="{{asset('products.html')}}">Shorts & 3/4th</a></li>
                                    <li><a href="{{asset('products.html')}}">Formal Shirts</a></li>
                                    <li><a href="{{asset('products.html')}}">Formal Trousers</a></li>
                                    <li><a href="{{asset('products.html')}}">Suits & Blazers</a></li>
                                    <li><a href="{{asset('products.html')}}">Track Wear</a></li>
                                    <li><a href="{{asset('products.html')}}">Inner Wear</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>WATCHES</h6>
                                    <li><a href="{{asset('products.html')}}">Analog</a></li>
                                    <li><a href="{{asset('products.html')}}">Chronograph</a></li>
                                    <li><a href="{{asset('products.html')}}">Digital</a></li>
                                    <li><a href="{{asset('products.html')}}">Watch Cases</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{asset('#')}}" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>NEW IN</h6>
                                    <li><a href="{{asset('products.html')}}">New In Clothing</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Bags</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Shoes</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Watches</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Beauty</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>CLOTHING</h6>
                                    <li><a href="{{asset('products.html')}}">Polos & Tees</a></li>
                                    <li><a href="{{asset('products.html')}}">Casual Shirts</a></li>
                                    <li><a href="{{asset('products.html')}}">Casual Trousers</a></li>
                                    <li><a href="{{asset('products.html')}}">Jeans</a></li>
                                    <li><a href="{{asset('products.html')}}">Shorts & 3/4th</a></li>
                                    <li><a href="{{asset('products.html')}}">Formal Shirts</a></li>
                                    <li><a href="{{asset('products.html')}}">Formal Trousers</a></li>
                                    <li><a href="{{asset('products.html')}}">Suits & Blazers</a></li>
                                    <li><a href="{{asset('products.html')}}">Track Wear</a></li>
                                    <li><a href="{{asset('products.html')}}">Inner Wear</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>WATCHES</h6>
                                    <li><a href="{{asset('products.html')}}">Analog</a></li>
                                    <li><a href="{{asset('products.html')}}">Chronograph</a></li>
                                    <li><a href="{{asset('products.html')}}">Digital</a></li>
                                    <li><a href="{{asset('products.html')}}">Watch Cases</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <h6>NEW IN</h6>
                                    <li><a href="{{asset('products.html')}}">New In Boys Clothing</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Girls Clothing</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Boys Shoes</a></li>
                                    <li><a href="{{asset('products.html')}}">New In Girls Shoes</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                 <ul class="multi-column-dropdown">
                                    <h6>ACCESSORIES</h6>
                                    <li><a href="{{asset('products.html')}}">Bags</a></li>
                                    <li><a href="{{asset('products.html')}}">Watches</a></li>
                                    <li><a href="{{asset('products.html')}}">Sun Glasses</a></li>
                                    <li><a href="{{asset('products.html')}}">Jewellery</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                    <li><a href="{{asset('typography')}}">TYPO</a></li>
                    <li><a href="{{asset('contacts')}}">CONTACT</a></li>
            </ul>
        </div>
        <!--/.navbar-collapse-->
    </nav>
    <!--/.navbar-->
</div>
</div>
   @yield("content")
        <!-- content-section-ends-here -->
        <div class="news-letter">
            <div class="container">
                <div class="join">
                    <h6>JOIN OUR MAILING LIST</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
                            <input type="submit" value="SUBSCRIBE" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="footer">
        <div class="container">
         <div class="footer_top">
            <div class="span_of_4">
                <div class="col-md-3 span1_of_4">
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        <li><a href="{{asset('#')}}">new arrivals</a></li>
                        <li><a href="{{asset('categories')}}">men</a></li>
                        <li><a href="{{asset('#')}}">women</a></li>
                        <li><a href="{{asset('#')}}">accessories</a></li>
                        <li><a href="{{asset('#')}}">kids</a></li>
                        <li><a href="{{asset('#')}}">brands</a></li>
                        <li><a href="{{asset('#')}}">trends</a></li>
                        <li><a href="{{asset('#')}}">sale</a></li>
                        <li><a href="{{asset('#')}}">style videos</a></li>
                    </ul>   
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>help</h4>
                    <ul class="f_nav">
                        <li><a href="{{asset('#')}}">frequently asked  questions</a></li>
                        <li><a href="{{asset('#')}}">men</a></li>
                        <li><a href="{{asset('#')}}">women</a></li>
                        <li><a href="{{asset('#')}}">accessories</a></li>
                        <li><a href="{{asset('#')}}">kids</a></li>
                        <li><a href="{{asset('#')}}">brands</a></li>
                    </ul>   
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>account</h4>
                    <ul class="f_nav">
                        <li><a href="{{asset('account.html')}}">login</a></li>
                        <li><a href="{{asset('register.html')}}">create an account</a></li>
                        <li><a href="{{asset('#')}}">create wishlist</a></li>
                        <li><a href="{{asset('checkout.html')}}">my shopping bag</a></li>
                        <li><a href="{{asset('#')}}">brands</a></li>
                        <li><a href="{{asset('#')}}">create wishlist</a></li>
                    </ul>               
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        <li><a href="{{asset('#')}}">new arrivals</a></li>
                        <li><a href="{{asset('#')}}">men</a></li>
                        <li><a href="{{asset('#')}}">women</a></li>
                        <li><a href="{{asset('#')}}">accessories</a></li>
                        <li><a href="{{asset('#')}}">kids</a></li>
                        <li><a href="{{asset('#')}}">brands</a></li>
                        <li><a href="{{asset('#')}}">trends</a></li>
                        <li><a href="{{asset('#')}}">sale</a></li>
                        <li><a href="{{asset('#')}}">style videos</a></li>
                        <li><a href="{{asset('#')}}">login</a></li>
                        <li><a href="{{asset('#')}}">brands</a></li>
                    </ul>           
                </div>
                <div class="clearfix"></div>
                </div>
          </div>
          <div class="cards text-center">
                <img src="images/cards.jpg" alt="" />
          </div>
          <div class="copyright text-center">
                <p>© 2015 E Shop. All Rights Reserved | Design by   <a href="{{asset('http://w3layouts.com')}}"  W3layouts</a></p>
          </div>
        </div>
        </div>
</body>
</html>