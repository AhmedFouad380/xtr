@extends('layout.layout')

@php
    $route = 'providers';
@endphp
@section('title',__('lang.show'))

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }
    </style>
@endsection
@section('header')

    <!--begin::Heading-->
    <h1 class="text-dark fw-bolder my-0 fs-2">{{trans('lang.show')}} </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb fw-bold fs-base my-1">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}" class="text-muted">
                {{trans('lang.Dashboard')}} </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{route($route.'.index')}}" class="text-muted">
                {{trans('lang.'.$route)}} </a>
        </li>
        <li class="breadcrumb-item">
            {{trans('lang.show')}}
        </li>
    </ul>
    <!--end::Breadcrumb-->
@endsection


@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="{{$data->image}}" alt="image"/>
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 @if($data->online == 1)bg-success rounded-circle border border-4 @endif  border-white h-20px w-20px"></div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="javascript:void($this);"
                                           class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$data->name}}</a>
                                        @if($data->online == 1)
                                            <a href="javascript:void($this);">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24">
																	<path
                                                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                                        fill="#00A3FF"/>
																	<path class="permanent"
                                                                          d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                                          fill="white"/>
																</svg>
															</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="javascript:void($this);"
                                               class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3">{{trans('lang.online')}}</a>
                                        @else
                                            <a href="javascript:void($this);"
                                               class="btn btn-sm btn-light-danger fw-bolder ms-2 fs-8 py-1 px-3">{{trans('lang.offline')}}</a>
                                        @endif
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                        <a href="javascript:void($this);"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <div class="rating-label checked ">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                <span class="svg-icon svg-icon-2">{{$data->rate}}
                                    <svg width="24"
                                         height="24"
                                         viewBox="0 0 24 24"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                        fill="currentColor"></path>
                                </svg>
                                </span>
                                            </div>
                                        </a>
                                        <a href="javascript:void($this);"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                                      fill="black"/>
																<path
                                                                    d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                            <!--end::Svg Icon-->{{trans('lang.provider')}}</a>
                                        {{--                                        <a href="javascript:void($this);"--}}
                                        {{--                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">--}}
                                        {{--                                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->--}}
                                        {{--                                            <span class="svg-icon svg-icon-4 me-1">--}}
                                        {{--															<svg xmlns="http://www.w3.org/2000/svg" width="24"--}}
                                        {{--                                                                 height="24" viewBox="0 0 24 24" fill="none">--}}
                                        {{--																<path opacity="0.3"--}}
                                        {{--                                                                      d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"--}}
                                        {{--                                                                      fill="black"/>--}}
                                        {{--																<path--}}
                                        {{--                                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"--}}
                                        {{--                                                                    fill="black"/>--}}
                                        {{--															</svg>--}}
                                        {{--														</span>--}}
                                        {{--                                            <!--end::Svg Icon-->SF, Bay Area</a>--}}
                                        <a href="javascript:void($this);"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                      fill="black"/>
																<path
                                                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                            <!--end::Svg Icon-->{{$data->email}}</a>
                                    </div>
                                    <!--end::Info-->
                                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">

                                    </div>
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                <div class="d-flex my-4">
                                    {{--                                    <a href="javascript:void($this);" class="btn btn-sm btn-light me-2"--}}
                                    {{--                                       id="kt_user_follow_button">--}}
                                    {{--                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->--}}
                                    {{--                                        <span class="svg-icon svg-icon-3 d-none">--}}
                                    {{--															<svg xmlns="http://www.w3.org/2000/svg" width="24"--}}
                                    {{--                                                                 height="24" viewBox="0 0 24 24" fill="none">--}}
                                    {{--																<path opacity="0.3"--}}
                                    {{--                                                                      d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"--}}
                                    {{--                                                                      fill="black"/>--}}
                                    {{--																<path--}}
                                    {{--                                                                    d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"--}}
                                    {{--                                                                    fill="black"/>--}}
                                    {{--															</svg>--}}
                                    {{--														</span>--}}
                                    {{--                                        <!--end::Svg Icon-->--}}
                                    {{--                                        <!--begin::Indicator-->--}}
                                    {{--                                        <span class="indicator-label">{{trans('lang.active')}}</span>--}}
                                    {{--                                        <span class="indicator-progress">{{trans('lang.please_wait')}}...--}}
                                    {{--														<span--}}
                                    {{--                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
                                    {{--                                        <!--end::Indicator-->--}}
                                    {{--                                    </a>--}}
                                    {{--                                    <a href="javascript:void($this);" class="btn btn-sm btn-primary me-2"--}}
                                    {{--                                       data-bs-toggle="modal"--}}
                                    {{--                                       data-bs-target="#kt_modal_offer_a_deal">{{trans('lang.'.$data->status)}}</a>--}}

                                    <div
                                        class="form-check form-switch form-check-custom form-check-solid">

                                        <input class="form-check-input" name="is_active" type="hidden"
                                               value="inactive" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            title="{{trans('lang.'.$data->status)}}"
                                            onchange="update_active(this,'{{route('providers.change_active')}}')"
                                            value="{{ $data->id }}" name="status" type="checkbox"
                                            @if($data->status == 'active') checked @endif
                                            id="flexSwitchDefault"/>
                                    </div>
                                    <!--begin::Menu-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                    {{--                                        <div--}}
                                    {{--                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">--}}
                                    {{--                                            <!--begin::Number-->--}}
                                    {{--                                            <div class="d-flex align-items-center">--}}
                                    {{--                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->--}}
                                    {{--                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">--}}
                                    {{--																	<svg xmlns="http://www.w3.org/2000/svg" width="24"--}}
                                    {{--                                                                         height="24" viewBox="0 0 24 24" fill="none">--}}
                                    {{--																		<rect opacity="0.5" x="13" y="6" width="13"--}}
                                    {{--                                                                              height="2" rx="1"--}}
                                    {{--                                                                              transform="rotate(90 13 6)" fill="black"/>--}}
                                    {{--																		<path--}}
                                    {{--                                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"--}}
                                    {{--                                                                            fill="black"/>--}}
                                    {{--																	</svg>--}}
                                    {{--																</span>--}}
                                    {{--                                                <!--end::Svg Icon-->--}}
                                    {{--                                                <div class="fs-2 fw-bolder" data-kt-countup="true"--}}
                                    {{--                                                     data-kt-countup-value="4500" data-kt-countup-prefix="$">0--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <!--end::Number-->--}}
                                    {{--                                            <!--begin::Label-->--}}
                                    {{--                                            <div class="fw-bold fs-6 text-gray-400">{{trans('lang.earning')}}</div>--}}
                                    {{--                                            <!--end::Label-->--}}
                                    {{--                                        </div>--}}
                                    <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13"
                                                                              height="2" rx="1"
                                                                              transform="rotate(90 13 6)" fill="black"/>
																		<path
                                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="{{count($data->ordersCompleated)}}">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div
                                                class="fw-bold fs-6 text-gray-400">{{trans('lang.completed_orders')}}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13"
                                                                              height="2" rx="1"
                                                                              transform="rotate(-90 11 18)"
                                                                              fill="black"/>
																		<path
                                                                            d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="{{count($data->ordersNotCompleated)}}">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div
                                                class="fw-bold fs-6 text-gray-400">{{trans('lang.canceled_orders')}}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                              <span class="svg-icon svg-icon-3 svg-icon-success me-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <rect fill="#000000" opacity="0.3" x="2" y="2" width="10" height="12" rx="2"/>
                                                        <path d="M4,6 L20,6 C21.1045695,6 22,6.8954305 22,8 L22,20 C22,21.1045695 21.1045695,22 20,22 L4,22 C2.8954305,22 2,21.1045695 2,20 L2,8 C2,6.8954305 2.8954305,6 4,6 Z M18,16 C19.1045695,16 20,15.1045695 20,14 C20,12.8954305 19.1045695,12 18,12 C16.8954305,12 16,12.8954305 16,14 C16,15.1045695 16.8954305,16 18,16 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="{{$data->wallet}}">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div
                                                class="fw-bold fs-6 text-gray-400">{{trans('lang.wallet_balance')}}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                            {{--                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">--}}
                            {{--                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">--}}
                            {{--                                        <span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>--}}
                            {{--                                        <span class="fw-bolder fs-6">50%</span>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="h-5px mx-3 w-100 bg-light mb-3">--}}
                            {{--                                        <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"--}}
                            {{--                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            <!--end::Progress-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 @if(request()->routeIs($route.'.show',$data->id) ) active @endif "
                               href="{{route($route.'.show',$data->id)}}">{{trans('lang.overview')}}</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 @if(request()->routeIs($route.'.show.orders',$data->id) ) active @endif "
                               href="{{route($route.'.show.orders',$data->id)}}">{{trans('lang.orders')}}</a>
                        </li>
                    {{--                        <li class="nav-item mt-2">--}}
                    {{--                            <a class="nav-link text-active-primary ms-0 me-10 py-5 @if(request()->routeIs($route.'.show.offers',$data->id) ) active @endif "--}}
                    {{--                               href="{{route($route.'.show.offers',$data->id)}}">{{trans('lang.offers')}}</a>--}}
                    {{--                        </li>--}}
                    <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 @if(request()->routeIs($route.'.show.rates',$data->id) ) active @endif "
                               href="{{route($route.'.show.rates',$data->id)}}">{{trans('lang.customer_rates')}}</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 @if(request()->routeIs($route.'.show.wallet_transactions',$data->id) ) active @endif "
                               href="{{route($route.'.show.wallet_transactions',$data->id)}}">{{trans('lang.wallet_transactions')}}</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
        @if(request()->routeIs($route.'.show',$data->id) )
            @include('Admin.providers.show.overview')
        @elseif(request()->routeIs($route.'.show.orders',$data->id) )
            @include('Admin.providers.show.orders')
        @elseif(request()->routeIs($route.'.show.rates',$data->id) )
            @include('Admin.providers.show.rates')
        @elseif(request()->routeIs($route.'.show.wallet_transactions',$data->id) )
            @include('Admin.providers.show.wallet_transactions')
        @else
        @endif
        <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection

