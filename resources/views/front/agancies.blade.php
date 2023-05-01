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

@section('js')

    <script>
        // owl carousel
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            @if(Session()->get('lang') == 'ar')
            rtl:true,
            @endif
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            stagePadding: 50,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:8,
                    nav:true,
                    loop:false
                }
            }


        });
    </script>
@endsection
