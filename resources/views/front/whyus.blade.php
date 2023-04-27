<!--/////////////////////////// start section 4 ///////////////////////////////-->
<section class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-4 col-lg-4 col-12">
            <div class="d-flex flex-column justify-content-center add-m-left">
                <h4 class="popular-adress text-capitalize">
                    {{\App\Models\Setting::find(1)->why_us_name}}
                </h4>
                <p class="choose-us-text">
                    {{\App\Models\Setting::find(1)->why_us_description}}
                </p>
            </div>
        </div>
        <div class="col-md-8 col-lg-8 col-12 p-0">
            <div class="position-relative">
                <div class="choose-us-box">
                    <div class="row">
                        @foreach($whyus as $data)
                            <div class="col-md-4 col-lg-4 col-6">
                                <div class="choose-box text-center">
                                    <div class="choose-img">
                                        <img src="{{$data->image}}" alt="{{$data->name}}">
                                    </div>
                                    <h6 class="text-capitalize">{{$data->name}}</h6>
                                    <p>{{$data->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="bg-choose-us">
                </div>
            </div>
        </div>
    </div>
</section>
<!--///////////////////////////// end section 4 ///////////////////////////////-->
