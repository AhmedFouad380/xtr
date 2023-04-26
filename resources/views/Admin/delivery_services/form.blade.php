@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush


<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.name_ar')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="name_ar"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('name_ar',$data->name_ar ?? '')}}" required/>
    <!--end::Input-->
</div>
<!--end::Input group-->  <!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.name_en')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="name_en"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('name_en',$data->name_en ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.commission')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="commission" step="any" min="0" @if(app()->getLocale() == 'ar') style="direction: rtl;"
           @endif
           class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('commission',$data->commission ?? '')}}"
           required/>
    <div class="text-muted fs-7">{{__('lang.commission')}}</div>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.min_cost')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="min_cost" step="any" min="0" @if(app()->getLocale() == 'ar') style="direction: rtl;"
           @endif
           class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('min_cost',$data->min_cost ?? '')}}"
           required/>
    <div class="text-muted fs-7">{{__('lang.min_cost')}}</div>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.kilo_cost')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="kilo_cost" step="any" min="0" @if(app()->getLocale() == 'ar') style="direction: rtl;"
           @endif
           class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('kilo_cost',$data->kilo_cost ?? '')}}"
           required/>
    <div class="text-muted fs-7">{{__('lang.kilo_cost')}}</div>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.min_distance')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="min_distance" step="any" min="0" @if(app()->getLocale() == 'ar') style="direction: rtl;"
           @endif
           class="form-control form-control-solid mb-3 mb-lg-0"
           value="{{old('min_distance',$data->min_distance ?? '')}}" required/>
    <div class="text-muted fs-7">{{__('lang.min_distance')}}</div>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.range_shop')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="range_shop" step="any" min="0" @if(app()->getLocale() == 'ar') style="direction: rtl;"
           @endif
           class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('range_shop',$data->range_shop ?? '')}}"
           required/>
    <div class="text-muted fs-7">{{__('lang.range_shop')}}</div>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.range_provider')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="range_provider" step="any" min="0"
           @if(app()->getLocale() == 'ar') style="direction: rtl;" @endif
           class="form-control form-control-solid mb-3 mb-lg-0"
           value="{{old('range_provider',$data->range_provider ?? '')}}" required/>
    <div class="text-muted fs-7">{{__('lang.range_provider')}}</div>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.range_provider_to_shop')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="range_provider_to_shop" step="any" min="0"
           @if(app()->getLocale() == 'ar') style="direction: rtl;" @endif
           class="form-control form-control-solid mb-3 mb-lg-0"
           value="{{old('range_provider_to_shop',$data->range_provider_to_shop ?? '')}}" required/>
    <div class="text-muted fs-7">{{__('lang.range_provider_to_shop')}}</div>
    <!--end::Input-->
</div>

<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.image')}}</label>
    <div class="col-lg-9 col-xl-12">
        <input type="file" @if(request()->segment(3) != 'edit') required @endif name="image" class="dropify" data-default-file="{{old('image',$data->image ?? '')}}" >
        <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
    </div>
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script !src="">
        $('.dropify').dropify();
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
@endpush


