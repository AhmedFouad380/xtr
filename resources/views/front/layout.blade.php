<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Itim&family=Poppins:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('website')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/style En.css">
    @yield('css')
    <title>{{\App\Models\Setting::find(1)->name}} || @yield('title') </title>
</head>
<body>

<!--/////////////////////////// start nav bar ////////////////////////////////////-->
<nav class="navbar navbar-expand-lg">
    <div class="container p-0">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{\App\Models\Setting::find(1)->image}}" alt="xtrade logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars-staggered"></i>
                  </span>
        </button>
        <!-- menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">{{__('lang.Home')}}</a>
                </li>
                @foreach(\App\Models\Page::active()->get() as $page)
                <li class="nav-item">
                    <a class="nav-link" href="{{url('Page',$page->id)}}">{{$page->name}}</a>
                </li>
                @endforeach
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="camera.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        camera
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(\App\Models\Category::active()->where('type','camera')->get() as $cat)
                        <li><a class="dropdown-item" href="{{url('Category',$cat->id)}}">
                               {{$cat->name}} </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="beinsport.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        beIN sport
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(\App\Models\Category::active()->where('type','!=','camera')->get() as $cat)
                            <li><a class="dropdown-item" href="{{url('Category',$cat->id)}}">
                                    {{$cat->name}} </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('solutions')}}">{{__('lang.solution')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">{{__('lang.contact-us')}}</a>
                </li>
            </ul>
            <!-- cart  (mobile)-->
            <div class="d-flex align-items-center cart-mobile">
                <div class="cart-btn">
                    <a href="cart.html" >
                        <i class="fa-solid fa-cart-shopping"></i>
                        cart
                        <span>04</span>
                    </a>
                </div>
                <div class="nav-border"></div>
                <div class=" dropdown">
                    <a class=" dropdown-toggle lang-btn" href="camera.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="lang-icon">
                            <i class="fa-solid fa-globe"></i>
                          </span>
                        ar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">ar</a></li>
                        <li><a class="dropdown-item" href="#">en</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- cart (pc)-->
        <div class="d-flex align-items-center cart-phone">
            <div class="cart-btn">
                <a href="cart.html">
                    <i class="fa-solid fa-cart-shopping"></i>
                    cart
                    <span>04</span>
                </a>
            </div>
            <div class="nav-border"></div>
            <div class=" dropdown">
                <a class=" dropdown-toggle lang-btn" href="camera.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="lang-icon">
                      <i class="fa-solid fa-globe"></i>
                    </span>
                    ar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">ar</a></li>
                    <li><a class="dropdown-item" href="#">en</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- search -->
<div class="bg-search">
    <form class="d-flex justify-content-center m-auto nav-search ">
        <div class="d-flex w-100 position-relative">
                <span class="search-icon">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            <input class="form-control search-input text-capitalize" type="search" placeholder="Search for available products" aria-label="Search">
        </div>
        <button class="btn btn-search" type="submit">Search</button>
    </form>
</div>
<!--/////////////////////////// end nav bar ////////////////////////////////////-->
@yield('content')


<!--///////////////////////////// start (footer) //////////////////////////////-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12">
                <div class="bottom-footer-content">
                    <h6 class="text-uppercase fw-bold">ABOUT <span class="blue">x</span>TRADE</h6>
                    <p class="choose-us-text">It is a company that specializes in integrated security systems and light current and works in entertainment and satellite networks.</p>
                    <div>
                        <h6 class="text-uppercase fw-bold">CONNECT WITH US</h6>
                        <a href="">
                            <img src="assets/img/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="assets/img/whatsapp.png" alt="">
                        </a>
                        <a href="">
                            <img src="assets/img/instagram.png" alt="">
                        </a>
                        <a href="">
                            <img src="assets/img/twitter.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bottom-footer-content">
                    <h6 class="text-uppercase fw-bold">QUICK LINK</h6>
                    <ul class="quik-links">
                        <li>
                            <a href="#" target="_blank">Home</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Services</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Our Agency</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Our Agency</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bottom-footer-content">
                    <h6 class="text-uppercase fw-bold">CONTACT US</h6>
                    <ul class="contact-us">
                        <li class="d-flex">
                           <span>
                              <img src="assets/img/phone.png" alt="">
                           </span>
                            +96595000362 +96560658666
                        </li>
                        <li class="d-flex">
                           <span>
                              <img src="assets/img/mail.png" alt="">
                           </span>
                            Info@xtradekuwait.com
                        </li>
                        <li class="d-flex">
                           <span>
                              <img src="assets/img/location.png" alt="">
                           </span>
                            Hessa Al-Hajeri Complex, Ibn Khaldoun St, Hawally, Kuwait
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-md-12">
                <div class="copy-right">
                    &copy; 2023 XTRADE Dev. by 000
                </div>
            </div>
        </div>
    </div>
</footer>
<!--///////////////////////////// end (footer)/////////////////////////////////-->



<script src="{{asset('website')}}/assets/js/jquery-3.6.1.min.js"></script>
<script src="{{asset('website')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('website')}}/assets/js/owl.carousel.min.js"></script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{asset('website')}}/assets/js/script.js"></script>

</body>
</html>