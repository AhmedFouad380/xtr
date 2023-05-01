@extends('front.layout')

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
                    <a href="{{url('Category',$data->id)}}" class="text-uppercase fw-bold m-0 add-size color-text-about">
                      {{$data->name}}
                    </a>
                </div>
              </div>
            </div>
        </div>
        <!--/////////////////////////// end about srction 1 //////////////////////////////-->

        <!--/////////////////////////// start hikvision products ////////////////////////////-->
        <div class="bg-ptz">
             <div class="ptz-content">
                  <h2 class="text-capitalize fw-bold">
                      {{$data->name}}
                  </h2>
                  <p class="ptz-text">
                  {!! $data->description !!}
                  </p>
             </div>
        </div>
        <!--/////////////////////////// end hikvision products //////////////////////////////-->

         <!--/////////////////////////// start unv product srction 2 //////////////////////////////-->
         <div class="container">
             <div class="border-search-unv">
                 <h5 class="text-capitalize color-h5">{{__('lang.Search for available products')}}</h5>
                 <!-- search -->
                 <div class="">
                     <form class="d-flex justify-content-center m-auto" action="{{url('search-products')}}" method="post">
                         @csrf
                         <div class="d-flex w-100 position-relative">
                        <span class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                             <input class="form-control search-input text-capitalize" name="search" type="text" placeholder="" aria-label="Search">
                         </div>
                         <button class="btn btn-search" type="submit">{{__('lang.search')}}</button>
                     </form>
                 </div>
             </div>

         </div>
         <!--/////////////////////////// end unv product section 2 //////////////////////////////-->


          <!--/////////////////////////// start unv product section 3 //////////////////////////////-->
         <div class="container mb-pro-sec">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="result-num">
                     <span class="fw-bold">
                         {{$count}}
                     </span>
                    {{__('lang.result found')}}
                </div>
{{--                <div class="dropdown">--}}
{{--                    <button class="btn dropdown-toggle dropdown-toggle2 text-capitalize" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                       newst--}}
{{--                    </button>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">--}}
{{--                      <li><button class="dropdown-item" type="button">Action</button></li>--}}
{{--                      <li><button class="dropdown-item" type="button">Another action</button></li>--}}
{{--                      <li><button class="dropdown-item" type="button">Something else here</button></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
                @foreach($products as $product)
                <div class="col">
                   <div class="popular-products-box">
                       <div class="div-img">
                         <img src="{{$product->image}}" alt="{{$product->name}}">
                       </div>
                       <div class="box-content-1">
                         <p class="popular-product-description">
                             {{$product->name}}
                         </p>
                         <span class="price">
                           {{$product->price}} KWD
                         </span>
                       </div>
                       <div class="box-content-2">
                         <a class="details" href="{{url('Product',$product->id)}}">{{__('lang.Details')}}</a>
                         <button class="btn all-btn d-block m-auto add-cart">{{__('lang.add to cart')}}</button>
                       </div>
                   </div>
                </div>
                @endforeach
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
            @include('front.whyus')
          <!--///////////////////////////// end section 4 ///////////////////////////////-->

          <!--/////////////////////////// start section 5  ///////////////////////////////-->
    @include('front.agancies')


          <!--///////////////////////////// end section 5 ///////////////////////////////-->

@endsection
