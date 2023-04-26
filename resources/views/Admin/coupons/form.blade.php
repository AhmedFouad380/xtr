
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
    <label class="required fw-bold fs-6 mb-2">{{__('lang.discount')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="discount" min="0" step="any"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('discount',$data->discount ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.count')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="count" min="0"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('count',$data->count ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.expire_date')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="date" name="expire_date"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('expire_date',$data->expire_date ?? '')}}" required/>
    <!--end::Input-->
</div>


