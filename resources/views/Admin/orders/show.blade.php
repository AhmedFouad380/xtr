@extends('layout.layout')
@php
    $route = 'orders';
@endphp

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
    <h1 class="text-dark fw-bolder my-0 fs-2">{{__('lang.order_details')}} </h1>
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
        <li class="breadcrumb-item text-muted">
            {{trans('lang.order_details')}}
        </li>
    </ul>
    <!--end::Breadcrumb-->
@endsection


@section('content')
    <!--begin::Content-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->


        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Navbar-->
            <div class="card mb-6 mb-xl-9">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                        <!--begin::Image-->
                        <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                            <img class="mw-100px mw-lg-100px" src="{{asset('assets/media/avatars/blank.png')}}" alt="image" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Wrapper-->
                        <div class="flex-grow-1">
                            <!--begin::Head-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::Details-->
                                <div class="d-flex flex-column a" >
                                    <!--begin::Description-->
                                    <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> {{__('lang.name')}} :  {{$data->first_name}}  {{$data->last_name}}</div>
                                    <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> {{__('lang.phone')}}  : {{$data->phone}}</div>
                                    <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> {{__('lang.email')}}  : {{$data->email}}</div>
                                    <!--end::Description-->
                                </div>
                                <div class="d-flex flex-column" style="">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> {{__('lang.Country')}} : {{$data->country}}</div>
                                    <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> {{__('lang.City')}} : {{$data->city}}</div>
                                    <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> zip : {{$data->zip}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Actions-->

                                <
                                <!--end::Actions-->
                            </div>
                            <!--end::Head-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap justify-content-start">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bolder">{{$data->created_at}}</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">{{__('lang.date')}}</div>
                                        <!--end::Label-->
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bolder">{{$data->total_price}}</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">{{__('lang.total_price')}}</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->

                                    <!--end::Stat-->
                                    <!--begin::Stat-->



                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover mb-3">
                                    <!--begin::User-->


                                    {{--                                <!--end::User-->--}}
                                    {{--                                    <!--begin::All users-->--}}
                                    {{--                                    <a href="{{url('projectEmployes',$data->id)}}" class="symbol symbol-35px symbol-circle" >--}}
                                    {{--                                        <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="رؤية العاملين على المشروع">+</span>--}}
                                    {{--                                    </a>--}}

                                    {{--                                    <!--end::All users-->--}}
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Details-->
                    <div class="separator"></div>
                    <!--begin::Nav wrapper-->

                    <!--end::Nav wrapper-->
                </div>
            </div>
            <!--end::Navbar-->

            <!--begin::Row-->
            <div class="row g-6 g-xl-9">
                <div class="card mb-5">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">{{__('lang.order_details')}}</span>
                            <span class="text-muted mt-1 fw-bold fs-7"></span>
                        </h3>
                        <div class="card-toolbar">

                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4" id="users_table">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-30px">م</th>
                                    <th class="min-w-125px">{{__('lang.Product')}}</th>
                                    <th class="min-w-100px">{{__('lang.Quantity')}}</th>
                                    <th class="min-w-100px">{{__('lang.price')}}</th>
                                    <th class="min-w-100px">{{__('lang.Total')}}</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                @foreach($data->OrderDetails as $key => $OrderDetails)

                                    <tr>
                                        <td>
                                            <span class="fw-bold text-dark d-block fs-5">{{$key + 1 }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{$OrderDetails->Product->name}}
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{$OrderDetails->count}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{$OrderDetails->price}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{$OrderDetails->price * $OrderDetails->count}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                              </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Post-->
    </div>

    <!--end::Content-->
@endsection
