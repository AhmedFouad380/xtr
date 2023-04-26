@extends('layout.layout')

@php
    $route = 'providers';
@endphp

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
@section('header')
    <!--begin::Heading-->
    <h1 class="text-dark fw-bolder my-0 fs-2"> {{trans('lang.request_details')}}</h1>
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
            <a href="{{url($route . "/show/" . $provider_id)}}" class="text-muted">
                {{trans('lang.show')}} </a>

        </li>
        <li class="breadcrumb-item">
            {{trans('lang.request_details')}}
        </li>
    </ul>
    <!--end::Breadcrumb-->
@endsection


@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Basic info-->
            <div class="row">
                <div class="col-md-6">
                    <div class=" card mb-5 mb-xl-10">
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                             data-bs-target="#kt_account_profile_details" aria-expanded="true"
                             aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">{{__('lang.provider')}}</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="{{$data->provider->image}}" alt="image"/>
                                        <div
                                            class="position-absolute translate-middle bottom-0 start-100 mb-6 @if($data->provider->online == 1)bg-success rounded-circle border border-4 @endif  border-white h-20px w-20px"></div>
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
                                                   class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$data->provider->name}}</a>
                                                @if($data->provider->online == 1)
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
                                                        <span class="svg-icon svg-icon-2">{{$data->provider->rate}}
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
                                                    <!--end::Svg Icon-->{{$data->provider->email}}</a>
                                            </div>
                                            <!--end::Info-->
                                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">

                                            </div>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Actions-->
                                        <div class="d-flex my-4">
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card mb-5 mb-xl-10">
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                             data-bs-target="#kt_account_profile_details" aria-expanded="true"
                             aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">{{__('lang.service')}}</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="{{$data->service->image}}" alt="image"/>
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
                                                   class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$data->service->name}}</a>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                                @if($data->service_id == 4)
                                                    @foreach($data->provider->readyServices as $readyService)
                                                        <div class="symbol symbol-35px symbol-circle"
                                                             data-bs-toggle="tooltip"
                                                             title="" data-bs-original-title="{{$readyService->name}}">
                                                            <img alt="Pic" src="{{$readyService->image}}">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!--end::Info-->
                                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">

                                            </div>
                                        </div>
                                        <div class="d-flex my-4"></div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">{{__('lang.request_details')}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">{{__('lang.name')}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name"
                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                   placeholder="" value="{{old('name',$data->name ?? '')}}" required/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->  <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">{{__('lang.city')}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="city_id"
                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                   placeholder="" value="{{old('city_id',$data->city->name ?? '')}}" required/>
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">{{__('lang.email')}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="email"
                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                   placeholder="" value="{{old('email',$data->email ?? '')}}" required/>
                            <!--end::Input-->
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.image')}}
                                <a href="{{$data->image}}" download="" title="{{trans('lang.download_file')}}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Download.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11"
              y="1" width="2" height="14" rx="1"/>
        <path
            d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <!--end::Svg Icon-->
                                </a>
                            </label>

                            <div class="col-lg-9 col-xl-12">
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{old('image',$data->image ?? '')}}">
                                <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.id_image')}}
                                <a href="{{$data->id_image}}" download="" title="{{trans('lang.download_file')}}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Download.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11"
              y="1" width="2" height="14" rx="1"/>
        <path
            d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <!--end::Svg Icon-->
                                </a>
                            </label>
                            <div class="col-lg-9 col-xl-12">
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{old('id_image',$data->id_image ?? '')}}">
                                <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.driving_license_image')}}
                                <a href="{{$data->driving_license_image}}" download=""
                                   title="{{trans('lang.download_file')}}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Download.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11"
              y="1" width="2" height="14" rx="1"/>
        <path
            d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <!--end::Svg Icon-->
                                </a>

                            </label>
                            <div class="col-lg-9 col-xl-12">
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{old('driving_license_image',$data->driving_license_image ?? '')}}">
                                <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.undermining_image')}}
                                <a href="{{$data->undermining_image}}" download=""
                                   title="{{trans('lang.download_file')}}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Download.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11"
              y="1" width="2" height="14" rx="1"/>
        <path
            d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <!--end::Svg Icon-->
                                </a>

                            </label>
                            <div class="col-lg-9 col-xl-12">
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{old('undermining_image',$data->undermining_image ?? '')}}">
                                <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.insurance_image')}}
                                <a href="{{$data->insurance_image}}" download="" title="{{trans('lang.download_file')}}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Download.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11"
              y="1" width="2" height="14" rx="1"/>
        <path
            d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    <!--end::Svg Icon-->
                                </a>
                            </label>
                            <div class="col-lg-9 col-xl-12">
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{old('insurance_image',$data->insurance_image ?? '')}}">
                                <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">{{__('lang.approval_request')}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">{{__('lang.current_status')}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" readonly
                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                   placeholder="" value="{{trans('lang.'.$data->status)}}" required/>
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            @if($data->status != 'accepted')
                                <a href="{{route('provider_service_requests.change_status',['id'=>$data->id,'status'=>'accepted'])}}"
                                   class="btn btn-success" title="{{trans('lang.accept')}}"><i class="fa fa-check"></i></a>
                            @endif
                            @if($data->status != 'rejected')
                                <a href="{{route('provider_service_requests.change_status',['id'=>$data->id,'status'=>'rejected'])}}"
                                   class="btn btn-danger" title="{{trans('lang.reject')}}"><i
                                        class="fa fa-times"></i></a>
                            @endif

                        </div>

                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script !src="">
        $('.dropify').dropify();
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
    <script>

        $("#state").change(function () {
            var wahda = $(this).val();

            if (wahda != '') {
                $.get("{{ URL::to('/get-branch')}}" + '/' + wahda, function ($data) {
                    var outs = "";
                    $.each($data, function (title, id) {
                        console.log(title)
                        outs += '<option value="' + id + '">' + title + '</option>'
                    });
                    $('#branche').html(outs);
                });
            }
        });
    </script>



@endsection

