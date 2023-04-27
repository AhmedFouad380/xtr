@extends('front.layout')

@section('content')
          <section class="cart-body">
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
                                  <a href="{{url('cart')}}" class="text-uppercase fw-bold m-0 add-color add-size">{{__('lang.cart')}}</a>
                                  <div class="d-flex add-space">
                                    <span class="dott"></span><span class="dott"></span><span class="dott"></span>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="text-uppercase fw-bold m-0 add-size color-text-about">
                                    {{__('lang.customer data')}}
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                     <!--/////////////////////////// end about srction 1 //////////////////////////////-->


                     <!-- //////////////////////// start custmer page section 1 /////////////////////////-->
                      <div class="row">
                          <div class="col-md-8 col-lg-8 col-12 mt-3">
                            <form action="">
                                <div class="customer-info">
                                    <h6 class="fw-bold text-capitalize color-text-about mb-3">
                                        customer data
                                     </h6>
                                     <input type="text" class="form-control" placeholder="email adress" value="" name="">
                                     <h6 class="fw-bold text-capitalize color-text-about mb-3">
                                        customer data
                                     </h6>
                                     <input type="text" class="form-control" placeholder="country" value="" name="">
                                     <div class="d-flex justify-content-between flex-input">
                                        <input type="text" class="form-control" placeholder="first name" value="" name="">
                                        <input type="text" class="form-control" placeholder="last name" value="" name="">
                                     </div>
                                     <input type="text" class="form-control" placeholder="adress" value="" name="">
                                     <input type="text" class="form-control" placeholder="adress" value="" name="">
                                     <div class="d-flex justify-content-between flex-input">
                                        <input type="text" class="form-control" placeholder="city" value="" name="">
                                        <input type="number" class="form-control" placeholder="zip code" value="" name="">
                                     </div>
                                     <input type="tel" class="form-control" placeholder="number" value="" name="">
                                     <div class="check-box">
                                        <input type="checkbox" id="save" name="" value="">
                                        <label for="save"> save data for next time</label>
                                     </div>
                                     <div class="d-flex justify-content-between end-form">
                                         <a href="cart.html">
                                            <i class="fa-solid fa-angle-left"></i>
                                             back to cart
                                         </a>
                                         <submit class="all-btn btn form-submit">check out</submit>
                                     </div>
                                  </div>
                            </form>
                          </div>
                          <div class="col-md-4 col-lg-4 col-12 mt-3">
                            <div class="bg-customer">
                                   <h6 class="fw-bold text-capitalize color-text-about mb-3">
                                      review your order
                                      <span class="fw-light text-lowercase">( 03 items )</span>
                                   </h6>
                                   <div class="customer-data-scroll">
                                       <?php
                                       $total[] = 0;
                                       ?>
                                       @foreach($carts as $cart)
                                        <div class="add-bg-2 border-gray">
                                        <div class="row d-flex">
                                            <div class="col-md-5 col-lg-3 col-6">
                                              <div class="our-solution-img cart-img cart-customer-img">
                                                  <img src="{{$cart->Product->image}}" alt="{{$cart->Product->name}}">
                                              </div>
                                            </div>
                                            <div class="col-md-7 col-lg-9 col-6">
                                              <div>
                                                  <h6 class="fw-light our-solution-h text-capitalize blue unview">
                                                      {{$cart->Product->name}}</h6>
                                                  <div class="">
                                                    <p class="customer-p-size">{{$cart->Product->description}}</p>
                                                  </div>
                                                  <div class="fw-bold blue d-flex flex-row justify-content-end" style="height:100%">
                                                      <div class="cart-price customer-price">
                                                        <span class="text-uppercase fw-light">kwd</span>
                                                          {{$cart->Product->price}}
                                                      </div>
                                                    </div>

                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                           <?php
                                           $total[] = $cart->count * $cart->Product->price;
                                           ?>
                                       @endforeach

                                   </div>
                                    <div class="sub-total">
                                         <div class=" add-mb d-flex justify-content-between align-items-center">
                                             <span class="d-block sub-total-color">Sub Total</span>
                                             <span class="d-block text-uppercase size-kwd">
                                                 kwd
                                                  <span class="fw-bold color-black">{{array_sum($total)}}</span>
                                             </span>
                                         </div>
                                         <div class=" add-mb d-flex justify-content-between align-items-center">
                                            <span class="d-block sub-total-color">Shipping Fees</span>
                                            <span class="d-block text-uppercase size-kwd">
                                                 kwd
                                                  <span class="fw-bold color-black">000</span>
                                            </span>
                                        </div>
                                        <div class=" add-mb d-flex justify-content-between align-items-center">
                                            <span class="d-block sub-total-color">Tax</span>
                                            <span class="d-block text-uppercase size-kwd">
                                                 kwd
                                                  <span class="fw-bold color-black">000</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="sub-total2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="text-uppercase fw-bold">total</h5>
                                            <div class="cart-price blue fw-bold">
                                                <span class="text-uppercase fw-light">kwd</span>
                                                {{array_sum($total)}}
                                            </div>
                                        </div>
                                    </div>
                            </div>
                          </div>

                      </div>
                </div>

          </section>
@endsection
