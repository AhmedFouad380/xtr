@extends('front.layout')
@section('content')
          <!--////////////////////////// start cart page ////////////////////////////////-->

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
                                  <a href="{{url('cart')}}" class="text-uppercase fw-bold m-0 add-size color-text-about">{{__('lang.cart')}}</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                     <!--/////////////////////////// end about srction 1 //////////////////////////////-->
                      <div class="row">
                          <div class="col-md-8 col-lg-8 col-6 mt-3">
                              <?php
                              $total[] = 0;
                              ?>
                              @foreach($carts as $cart)
                            <div class="add-bg-2">
                              <div class="row d-flex">
                                  <div class="col-md-3 col-lg-2 col-12">
                                    <div class="our-solution-img cart-img">
                                        <img src="{{$cart->Product->image}}" alt="{{$cart->Product->name}}">
                                    </div>
                                  </div>
                                  <div class="col-md-7 col-lg-8 col-12">
                                    <div>
                                        <h6 class="fw-light our-solution-h text-capitalize blue unview">{{$cart->Product->name}}</h6>
                                        <div class="">
                                          <p class="add-cart-width">{{$cart->Product->description}}</p>
                                          <div class="d-flex align-items-center">
                                            <div class="number">
                                              <span class="minus">
                                                <span class="d-block">-</span>
                                              </span>
                                              <input type="text" value="{{$cart->count}}" class="input-counter"/>
                                              <span class="plus">
                                                <span class="d-block">+</span>
                                              </span>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-lg-2 col-12">
                                    <div class="fw-bold blue d-flex flex-column justify-content-between" style="height:100%">
                                      <div class="cart-price">
                                        <span class="text-uppercase fw-light">kwd</span>
                                          {{$cart->Product->price}}
                                      </div>
                                      <div class="right-trash">
                                          <span class="cart-trash delete" data-id="{{$cart->id}}">
                                            <i class="fa-solid fa-trash-can"></i>
                                          </span>
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
                          <div class="col-md-4 col-lg-4 col-6 mt-3">
                            <div class="cart-total">
                                <div class="d-flex justify-content-between">
                                   <h5 class="text-uppercase fw-bold cart-total-h">cart total</h5>
                                   <div class="cart-price cart-price2 blue fw-bold">
                                    <span class="text-uppercase fw-light">kwd</span>
                                       {{array_sum($total)}}
                                  </div>
                                </div>
                                <span class="gray">
                                  Shipping calculated at checkout
                                </span>
                                <div class="overviwe-line"></div>
                                <input type="text" placeholder="discount code" class="input-total form-control">
                                <span class="d-block color-gray">discount applied next step</span>
                                <div class="text-center">
                                  <a href="{{url('cart_customer_data')}}" class="all-btn fw-light cart-checkout">proceed to checkout</a>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                              <a href="{{url('/')}}" class="all-btn fw-light text-uppercase cart-shopping-btn">
                                 continue shopping
                              </a>
                          </div>
                      </div>
                </div>

          </section>

@endsection
@section('js')
    <script>
        $('.delete').on('click',function () {
            var id = $(this).data('id');

            Swal.fire({
                title: "{{__('lang.warrning')}} !",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f64e60",
                confirmButtonText: "{{__('lang.btn_yes')}}",
                cancelButtonText: "{{__('lang.btn_no')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then(function (result) {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: "GET",
                        url: "{{url('delete-cart-item')}}",
                        data: {"id": id },
                        success: function (data) {

                            location.reload();
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
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    Swal.fire('', "{{__('lang.Message_Cancelled')}}", "error");
                }
            });

        });

    </script>

@endsection
