@extends('front.layout')
@section('title')
    {{__('lang.solution')}}
@endsection
@section('content')
    <!--/////////////////////////// start about srction 1 ////////////////////////////-->
    <div class="container padding-container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a href="{{url('/')}}" class="text-uppercase add-color add-size">{{__('lang.Home')}}</a>
                    <div class="d-flex add-space">
                        <span class="dott"></span><span class="dott"></span><span class="dott"></span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{url('solutions')}}" class="text-uppercase fw-bold m-0 add-size color-text-about">
                        {{__('lang.solution')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/////////////////////////// end about srction 1 //////////////////////////////-->

    <!--/////////////////////////// start hikvision products ////////////////////////////-->
    <div class="bg-ptz" style="background-image: url({{asset('website/assets/img/image-solutions@2x.png')}})!important;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        height: 60vh;
        ">
        <div class="ptz-content">


        </div>
    </div>
    <!--/////////////////////////// end hikvision products //////////////////////////////-->

    <!--/////////////////////////// start unv product srction 2 //////////////////////////////-->

    <!--/////////////////////////// end unv product section 2 //////////////////////////////-->


    <!--/////////////////////////// start unv product section 3 //////////////////////////////-->
    <div class="container mb-pro-sec">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="result-num">
                <h5>Discover Our Solution</h5>
            </div>

        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 popular-products p-0 justify-content-center">
            @foreach($products as $product)
                <div class="col-md-12  col-11 add-padding">
                    <div class="add-bg-1">
                        <div class="row">
                            <div class="col-md-3 col-lg-2 col-6">
                                <div class="our-solution-img">
                                    <img src="{{$product->image}}" alt="{{$product->name}}">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-6">
                                <div>
                                    <h6 class="mt-3 fw-bold our-solution-h">{{$product->name}}.</h6>
                                    <p class="our-solution-p">
                                        {!! $product->description  !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 col-12 text-center">
                                <a href="{{url('contact')}}" target="_blank" class="all-btn contact-btn mt-3 text-center">{{__('lang.contact-us')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- navigation -->
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @php
                    $paginator =$products->appends(request()->input())->links()->paginator;
                        if ($paginator->currentPage() < 2 ){
                            $link = $paginator->currentPage();
                        }else{
                             $link = $paginator->currentPage() -1;
                        }
                        if($paginator->currentPage() == $paginator->lastPage()){
                                   $last_links = $paginator->currentPage();
                        }else{
                                   $last_links = $paginator->currentPage() +1;

                        }
                @endphp
                @if ($paginator->lastPage() > 1)
                    <ul class="pagination">
                        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} page-item">
                            <a class="page-link" href="{{ $paginator->url(1) }}">First </a>
                        </li>
                        @for ($i = $link; $i <= $last_links; $i++)
                            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                                <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} page-item">
                            <a class="page-link"
                               href="{{ $paginator->url($paginator->lastPage()) }}">Last</a>
                        </li>
                    </ul>
                @endif
            </ul>
        </nav>
    </div>
    </div>
    <!--/////////////////////////// end unv product section 3 //////////////////////////////-->








    <!--/////////////////////////// start section 4 ///////////////////////////////-->
    <!--///////////////////////////// end section 4 ///////////////////////////////-->

    <!--/////////////////////////// start section 5  ///////////////////////////////-->
    @include('front.agancies')


    <!--///////////////////////////// end section 5 ///////////////////////////////-->

@endsection
