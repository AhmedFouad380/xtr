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
                    <a href="/" class="text-uppercase fw-bold m-0 add-size color-text-about">
                      Search Products
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
                      Search Products
                  </h2>
                  <p class="ptz-text">
                      Search Products
                  </p>
             </div>
        </div>
        <!--/////////////////////////// end hikvision products //////////////////////////////-->

         <!--/////////////////////////// start unv product srction 2 //////////////////////////////-->
         <div class="container">
            <div class="border-search-unv">
                 <h5 class="text-capitalize color-h5">Search for available products</h5>
                       <!-- search -->
                <div class="">
                    <form class="d-flex justify-content-center m-auto" method="post" action="{{route('search')}}">
                        @csrf
                    <div class="d-flex w-100 position-relative">
                        <span class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input class="form-control search-input text-capitalize" name="search" type="search" placeholder="Search for available products" aria-label="Search">
                    </div>
                    <button class="btn btn-search" type="submit">Search</button>
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
                         {{$data->count()}}
                     </span>
                     result found
                </div>
                <div class="dropdown">
                    <button class="btn dropdown-toggle dropdown-toggle2 text-capitalize" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                       newst
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><button class="dropdown-item" type="button">Action</button></li>
                      <li><button class="dropdown-item" type="button">Another action</button></li>
                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </div>
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
                     {!! $products->links() !!}
                    </ul>
                  </nav>
            </div>
         </div>
         <!--/////////////////////////// end unv product section 3 //////////////////////////////-->








          <!--/////////////////////////// start section 4 ///////////////////////////////-->
          <section class="container-fluid">
             <div class="row align-items-center">
                <div class="col-md-4 col-lg-4 col-12">
                   <div class="d-flex flex-column justify-content-center add-m-left">
                    <h4 class="popular-adress text-capitalize">
                      Why Choose Us
                    </h4>
                    <p class="choose-us-text">
                      It is a company that specializes in integrated security systems and light current and works in entertainment and satellite networks.
                    </p>
                   </div>
                </div>
                <div class="col-md-8 col-lg-8 col-12 p-0">
                    <div class="position-relative">
                        <div class="choose-us-box">
                          <div class="row">
                              <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{asset('website/assets/img/Professional installation.png')}}" alt="">
                                    </div>
                                    <h6 class="text-capitalize">Professional installation</h6>
                                    <p>By the most skilled technicians</p>
                                </div>
                              </div>
                              <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{asset('website/assets/img/State of the art technology.png')}}" alt="">
                                    </div>
                                    <h6 class="text-capitalize">State of the art technology (UNV)</h6>
                                    <p>By the most skilled technicians</p>
                                </div>
                              </div>
                              <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{asset('website/assets/img/FREE inspection.png')}}" alt="">
                                    </div>
                                    <h6 class="text-capitalize">FREE inspection (limited time offer)</h6>
                                    <p>By the most skilled technicians</p>
                                </div>
                              </div>
                              <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{asset('website/assets/img/24-7 alarm monitoring.png')}}" alt="">
                                    </div>
                                    <h6 class="text-capitalize">24/7 alarm monitoring</h6>
                                    <p>By the most skilled technicians</p>
                                </div>
                              </div>
                              <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{asset('website/assets/img/100% safety.png')}}" alt="">
                                    </div>
                                    <h6 class="text-capitalize">Two-Year Warranty</h6>
                                    <p>By the most skilled technicians</p>
                                </div>
                              </div>
                              <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{asset('website/assets/img/Two-Year Warranty.png')}}" alt="">
                                    </div>
                                    <h6 class="text-capitalize">Professional installation</h6>
                                    <p>By the most skilled technicians</p>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="bg-choose-us">
                        </div>
                    </div>
                </div>
             </div>
          </section>
          <!--///////////////////////////// end section 4 ///////////////////////////////-->

          <!--/////////////////////////// start section 5  ///////////////////////////////-->
    @include('front.agancies')


          <!--///////////////////////////// end section 5 ///////////////////////////////-->

@endsection
