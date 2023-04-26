@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.from')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number"  step="any" min="0" name="from"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('from',$data->from ?? '')}}" required/>
    <!--end::Input-->
</div>
<!--end::Input group-->  <!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.to')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number"  step="any" min="0" name="to"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('to',$data->to ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.price_per_km')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number"  step="any" min="0" name="price_per_km"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('price_per_km',$data->price_per_km ?? '')}}" required/>
    <!--end::Input-->
</div>


