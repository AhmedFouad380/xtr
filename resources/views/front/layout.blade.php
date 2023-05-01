<!DOCTYPE html>
<html lang="en"  @if(session()->get('lang') == 'ar') dir="rtl" @endif>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Itim&family=Poppins:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('website')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/bootstrap.min.css">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    @if(session()->get('lang') == 'ar')
        <link rel="stylesheet" href="{{asset('website')}}/assets/css/style En.css">
    @else
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/style En.css">
    @endif
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('lang.camera')}}
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('lang.bein sport')}}
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
                    <a href="{{url('cart')}}" >
                        <i class="fa-solid fa-cart-shopping"></i>
                        {{__('lang.cart')}}
{{--                        <span>04</span>--}}
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
                        <li><a class="dropdown-item" href="{{url('lang/ar')}}">ar</a></li>
                        <li><a class="dropdown-item" href="{{url('lang/en')}}">en</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- cart (pc)-->
        <div class="d-flex align-items-center cart-phone">
            <div class="cart-btn">
                <a href="{{url('cart')}}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    {{__('lang.cart')}}
{{--                    <span>04</span>--}}
                </a>
            </div>
            <div class="nav-border"></div>
            <div class=" dropdown">
                <a class=" dropdown-toggle lang-btn" href="camera.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="lang-icon">
                      <i class="fa-solid fa-globe"></i>
                    </span>
                    {{session()->get('lang')}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('lang/ar')}}">ar</a></li>
                    <li><a class="dropdown-item" href="{{url('lang/en')}}">en</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- search -->
<div class="bg-search">
    <form class="d-flex justify-content-center m-auto nav-search" method="post" action="{{route('search')}}">
        @csrf
        <div class="d-flex w-100 position-relative">
                <span class="search-icon">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            <input name="search" class="form-control search-input text-capitalize" type="search" placeholder="" aria-label="Search">
        </div>
        <button class="btn btn-search" type="submit">{{__('lang.search')}}</button>
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
                    <h6 class="text-uppercase fw-bold">{{__('lang.about')}} <span class="blue">x</span>TRADE</h6>
                    <p class="choose-us-text">{{\App\Models\Setting::find(1)->description}}.</p>
                    <div>
                        <h6 class="text-uppercase fw-bold">{{__('lang.Contact info')}}</h6>
                        <a href="">
                            <img src="{{asset('website/assets/img/fb.png')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('website/assets/img/whatsapp.png')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('website/assets/img/instagram.png')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('website/assets/img/twitter.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bottom-footer-content">
                    <h6 class="text-uppercase fw-bold">{{__('lang.QUICK LINK')}}</h6>
                    <ul class="quik-links">
                        <li>
                            <a href="{{url('/')}}" target="_blank">{{__('lang.home')}}</a>
                        </li>
                        <li>
                            <a href="{{url('/services')}}" target="_blank">{{__('lang.services')}}</a>
                        </li>
                        @foreach(\App\Models\Category::Active()->get() as $cat)
                        <li>
                            <a href="{{url('Category',$cat->id)}}" target="_blank">{{$cat->name}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bottom-footer-content">
                    <h6 class="text-uppercase fw-bold">{{__('lang.contact')}}</h6>
                    <ul class="contact-us">
                        <li class="d-flex">
                           <span>
                              <img src="{{asset('website/assets/img/phone.png')}}" alt="">
                           </span>
                            +965{{\App\Models\Setting::find(1)->phone}}
                        </li>
                        <li class="d-flex">
                           <span>
                              <img src="{{asset('website/assets/img/mail.png')}}" alt="">
                           </span>
                            {{\App\Models\Setting::find(1)->email}}
                        </li>
                        <li class="d-flex">
                           <span>
                              <img src="{{asset('website/assets/img/location.png')}}" alt="">
                           </span>
                            {{\App\Models\Setting::find(1)->address}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-md-12">
                <div class="copy-right">
                    &copy; 2023 eshotkw.com Dev. by 000
                </div>
            </div>
        </div>
    </div>
</footer>
<!--///////////////////////////// end (footer)/////////////////////////////////-->



<script src="{{asset('website/assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{asset('website')}}/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('js')
<script>
    $(".add-cart").click(function () {
        var id = $(this).data('id')


            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('add-cart')}}",
                data: {"id": id },
                success: function (data) {
                    $('#CountCart').html(data)
                    Swal.fire({
                        icon: 'success',
                        title: "{{__('lang.Success')}}",
                        text: "{{__('lang.Success_text')}}",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });

                }
            })

    })

</script>

</body>
</html>
<?php
$message = session()->get("message");
?>
@if( session()->has("message"))
    <script>
        Swal.fire({
            icon: 'success',
            title: "{{__('lang.Success')}}",
            text: "{{__('lang.Success_text')}}",
            type: "success",
            timer: 1000,
            showConfirmButton: false
        });
    </script>



@endif
<?php
$errors = session()->get("errors");
?>

@if( session()->has("errors"))
    <?php
    $e = implode(' - ', $errors->all());
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif


@if( session()->has("error"))
    <?php
    $e = session()->get("error");
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "كلمة المرور غير صحيحه  ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif
