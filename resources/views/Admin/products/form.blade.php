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
    <label class="required fw-bold fs-6 mb-2">{{__('lang.price')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="number" name="price"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('price',$data->price ?? '')}}" required/>
    <!--end::Input-->
</div>

<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-bold fs-6 mb-2">{{__('lang.description_ar')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="description_ar"
           class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder="" >{{old('description_ar',$data->description_ar ?? '')}} </textarea>
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
              placeholder=""  > {{old('description_en',$data->description_en ?? '')}}</textarea>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-bold fs-6 mb-2">{{__('lang.long_description_ar')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="long_description_ar" id="editor1"
              class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder="" >{{old('long_description_ar',$data->long_description_ar ?? '')}} </textarea>
    <!--end::Input-->
</div>
<!--end::Input group-->  <!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-bold fs-6 mb-2">{{__('lang.long_description_en')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea rows="3" name="long_description_en" id="editor2"
              class="form-control form-control-solid mb-3 mb-lg-0"
              placeholder=""  > {{old('Long_description_en',$data->long_description_en ?? '')}}</textarea>
    <!--end::Input-->
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.category')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="category_id" class="form-control">

        @foreach(\App\Models\Category::all() as $category)
            <option @isset($data) @if($data->category_id == $category->id) selected @endif @endisset value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <!--end::Input-->
</div>
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.image')}}</label>
    <div class="col-lg-9 col-xl-12">
        <input type="file" @if(request()->segment(2) != 'edit') required @endif name="image" class="dropify"
               data-default-file="{{old('image',$data->image ?? '')}}">
        <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
    </div>
</div>
@if(request()->segment(2) != 'edit')
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.images')}}</label>
    <div class="col-lg-9 col-xl-12">
        <input type="file"  name="images[]" class="dropify" multiple
               data-default-file="">
        <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
    </div>
</div>
 @endif
@push('scripts')
    <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script !src="">
        $('.dropify').dropify();
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
@endpush


