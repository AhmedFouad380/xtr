@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.image')}}</label>
    <div class="col-lg-9 col-xl-12">
        <input type="file" @if(request()->segment(2) != 'edit') required @endif name="image" class="dropify"
               data-default-file="{{old('image',$data->image ?? '')}}">
        <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
    </div>
</div>

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
    <label class=" fw-bold fs-6 mb-2">{{__('lang.description_ar')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="description_ar"
           class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder="" value="" > {{old('description_ar',$data->description_ar ?? '')}}</textarea>
    <!--end::Input-->
</div>
<!--end::Input group-->  <!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-bold fs-6 mb-2">{{__('lang.description_en')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="description_en"
              class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder="" value="" > {{old('description_en',$data->description_en ?? '')}} </textarea>
    <!--end::Input-->
</div>


<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">facebook</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="facebook"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('facebook',$data->facebook ?? '')}}" required/>
    <!--end::Input-->
</div>
<!--end::Input group-->  <!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">whatsapp</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="whatsapp"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('whatsapp',$data->whatsapp ?? '')}}" required/>
    <!--end::Input-->
</div>

<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">instagram	</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="instagram"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('instagram',$data->instagram ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.phone')}}	</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="phone"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('phone',$data->phone ?? '')}}" required/>
    <!--end::Input-->
</div>

<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.address')}}	</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="address"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('address',$data->address ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.why_us_name_ar')}}	</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="why_us_name_ar"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('why_us_name_ar',$data->why_us_name_ar ?? '')}}" required/>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.why_us_name_en')}}	</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="why_us_name_en"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('why_us_name_en',$data->why_us_name_en ?? '')}}" required/>
    <!--end::Input-->
</div>


<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-bold fs-6 mb-2">{{__('lang.why_us_description_ar')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="why_us_description_ar"
              class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder="" value="" > {{old('why_us_description_ar',$data->why_us_description_ar ?? '')}}</textarea>
    <!--end::Input-->
</div>
<!--end::Input group-->  <!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-bold fs-6 mb-2">{{__('lang.why_us_description_en')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="why_us_description_en"
              class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder="" value="" > {{old('why_us_description_en',$data->why_us_description_en ?? '')}} </textarea>
    <!--end::Input-->
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


