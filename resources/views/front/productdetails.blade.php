
@extends('front.layout')
@section('title')
{{__('lang.Home')}}
@endsection

@section('content')

<!--/////////////////////////// start about srction 1 ////////////////////////////-->
<div class="container padding-container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12 d-flex align-items-center">
            <div class="d-flex align-items-center">
                <a href="{{url('/')}}" class="text-uppercase add-color add-size">{{__('lang.home')}}</a>
                <div class="d-flex add-space">
                    <span class="dott"></span><span class="dott"></span><span class="dott"></span>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="HIKVISION PRODUCTS.html" class="text-uppercase fw-bold m-0 add-size add-color">
                    HIKVISION PRODUCTS
                </a>
                <div class="d-flex add-space">
                    <span class="dott"></span><span class="dott"></span><span class="dott"></span>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="/" class="text-uppercase fw-bold m-0 add-size color-text-about">
                    {{__('lang.product-details')}}
                </a>
            </div>
        </div>
    </div>
</div>
<!--/////////////////////////// end about srction 1 //////////////////////////////-->


<!--//////////////////////// start product details section 1 //////////////////-->

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12">
            <div class="d-flex flex-row-reverse">
                <!-- swiper gallery in product details -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff ; width: 75%"class="swiper mySwiper2 add-height">
                    <div class="swiper-wrapper">
                        @foreach($productImages as $image)
                        <div class="swiper-slide swiper-slide1">
                            <img src="{{asset($image->image)}}"/>
                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next swiper-button-next2"></div>
                    <div class="swiper-button-prev swiper-button-prev2"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper add-height" style="width: 18%;">
                    <div class="swiper-wrapper d-flex flex-column w-100 scroll">
                        @foreach($productImages as $image)
                            <div class="swiper-slide swiper-slide1 swiper-slide2 w-100">
                                <img src="{{asset($image->image)}}"/>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12">
            <div>
                <h5 class="blue fw-bold adress-dsecrip">
                    {{$data->name}}
                </h5>
                <div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        {{$data->description}}
                    </div>
                {{--    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Up to 3840×2160 resolution,20fps
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2.8~12 mm
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Smart IR, up to 30m IR distance
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2D/3D DNR, ROI, 9:16 corridor mode, ONVIF
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            DC12V,PoE.Wide voltage range of ±25%
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            IP67
                        </p>
                    </div>

--}}
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="price">{{$data->price}}.00 KWD</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="number">
                            <span class="minus">
                               <span class="d-block">-</span>
                            </span>
                        <input type="text" value="1" class="input-counter"/>
                        <span class="plus">
                               <span class="d-block">+</span>
                            </span>
                    </div>
                    <button class="all-btn btn add-cart">{{__('lang.add to cart')}} </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--//////////////////////// end product details section 1 //////////////////-->

<!--//////////////////////// start product details section 2 //////////////////-->
<div class="container-fluied top-overview">
    <div class="container">
        <h6 class="text-capitalize fw-bold overview text-capitalize">overview</h6>
    </div>
    <div class="overviwe-line">
        <div class="overviwe-line2"></div>
    </div>
    <div class="overview-details">
        <div class="container">
            <div class="row">
                <h6 class="text-capitalize blue fw-bold">optics</h6>
                <div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            {{$data->description}}
                        </p>
                    </div>
                    {{--<div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Up to 3840×2160 resolution,20fps
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2.8~12 mm
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Smart IR, up to 30m IR distance
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2D/3D DNR, ROI, 9:16 corridor mode, ONVIF
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            DC12V,PoE.Wide voltage range of ±25%
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            IP67
                        </p>
                    </div>--}}
                </div>
            </div>
        </div>
        <div class="overviwe-line add-m-topp"></div>
    </div>
    {{--<div class="overview-details">
        <div class="container">
            <div class="row">
                <h6 class="text-capitalize blue fw-bold">optics</h6>
                <div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            1/2.0",progressive scan,CMOS
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Up to 3840×2160 resolution,20fps
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2.8~12 mm
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Smart IR, up to 30m IR distance
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2D/3D DNR, ROI, 9:16 corridor mode, ONVIF
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            DC12V,PoE.Wide voltage range of ±25%
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            IP67
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overviwe-line add-m-topp"></div>
    </div>
    <div class="overview-details">
        <div class="container">
            <div class="row">
                <h6 class="text-capitalize blue fw-bold">optics</h6>
                <div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            1/2.0",progressive scan,CMOS
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Up to 3840×2160 resolution,20fps
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2.8~12 mm
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            Smart IR, up to 30m IR distance
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            2D/3D DNR, ROI, 9:16 corridor mode, ONVIF
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            DC12V,PoE.Wide voltage range of ±25%
                        </p>
                    </div>
                    <div class="d-flex align-items-center add-m-space">
                        <span class="add-dott"></span>
                        <p class="text-descrip">
                            IP67
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overviwe-line add-m-topp"></div>
    </div>--}}
</div>


<!--//////////////////////// end product details section 2 //////////////////-->

<!--/////////////////////////// start unv product section 3 //////////////////////////////-->
<div class="container mb-pro-sec">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class=" text-capitalize color-text-about fw-bold">
            similar products
        </h5>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

                @foreach($similarProducts as $key =>$Product)
                    @if($key < 4)
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="popular-products-box">
                                <div class="div-img">
                                    <img src="{{$Product->image}}" alt="{{$Product->name}}">
                                </div>
                                <div class="box-content-1">
                                    <p class="popular-product-description">
                                        {{$Product->name}}
                                    </p>
                                    <span class="price">
                                {{$Product->price}} KWD
                              </span>
                                </div>
                                <div class="box-content-2">
                                    <a class="details" href="{{url('Product',$Product->id)}}">{{__('lang.product-details')}}</a>
                                    <button class="btn all-btn d-block m-auto add-cart" data-id="{{$Product->id}}" >{{__('lang.add to cart')}}</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

        {{--<div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/4MP+4MP Lighthunter Dual-lens.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                           135.00 KWD
                         </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/5MP HD Intelligent 80m IR Fixed Bullet Network Camera.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                           135.00 KWD
                         </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/4MP+4MP Lighthunter Dual-lens.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                           135.00 KWD
                         </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/4MP HD IR VF Dome Network.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                            135.00 KWD
                          </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/4MP+4MP Lighthunter Dual-lens.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                            135.00 KWD
                          </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/5MP HD Intelligent 80m IR Fixed Bullet Network Camera.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                            135.00 KWD
                          </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="popular-products-box">
                <div class="div-img">
                    <img src="assets/img/4MP+4MP Lighthunter Dual-lens.png" alt="">
                </div>
                <div class="box-content-1">
                    <p class="popular-product-description">
                        4MP HD IR VF Dome Network Camera
                    </p>
                    <span class="price">
                            135.00 KWD
                          </span>
                </div>
                <div class="box-content-2">
                    <a class="details" href="#">details</a>
                    <button class="btn all-btn d-block m-auto add-cart">add to cart</button>
                </div>
            </div>
        </div>--}}
    </div>
</div>
<!--/////////////////////////// end unv product section 3 //////////////////////////////-->


<!--/////////////////////////// start section 5  ///////////////////////////////-->

<!--/////////////////////////// start section 5  ///////////////////////////////-->
@include('front.agancies')
@endsection
