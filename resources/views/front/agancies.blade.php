<div class="container">
    <div class="bg-carousel">
        <div class="text-center">
            <h4 class="popular-adress text-uppercase mb-4 m-auto">
                {{__('lang.agencies')}}
            </h4>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($agancies as $agancy)
                <div class="item">
                    <div class="image-item">
                        <img src="{{$agancy->image}}" alt="">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
