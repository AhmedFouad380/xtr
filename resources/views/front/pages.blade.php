@extends('front.layout')

@section('content')
        <!--/////////////////////////// start about srction 1 ////////////////////////////-->
        <div class="container padding-container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 d-flex align-items-center">

                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-12 d-flex align-items-center">
                       <div class="d-flex align-items-center">
                            <a href="{{url('/')}}" class="text-uppercase add-color add-size">{{__('lang.Home')}}</a>
                            <div class="d-flex add-space">
                              <span class="dott"></span><span class="dott"></span><span class="dott"></span>
                            </div>
                       </div>
                       <div class="d-flex align-items-center">
                           <a href="{{url('Page',$data->id)}}" class="text-uppercase fw-bold m-0 add-size color-text-about">{{$data->name}}</a>
                       </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--/////////////////////////// end about srction 1 //////////////////////////////-->

        <!--/////////////////////////// start about srction 2 ////////////////////////////-->
        <div class="bg-about" style="background-image: url({{$data->image}}) !important;">
            <div class="about-content">
              <h4 class="text-uppercase fw-bold up-about">{{$data->name}}</h4>
              <p>
                  {!! $data->description !!}
              </p>
            </div>
        </div>
        <!--/////////////////////////// end about srction 2 //////////////////////////////-->





        @include('front.whyus')
        @include('front.agancies')

          <!--///////////////////////////// end section 5 ///////////////////////////////-->
    @endsection
