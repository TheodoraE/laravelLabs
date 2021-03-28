<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset('storage/img/'.$logo[0]->url)}}" alt="">
            @foreach ($homeCarousel as $carousel)
                <p>{{$carousel->carouselDescriptions->description}}</p>
            @endforeach
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($homeCarousel as $carousel)
            <div class="item  hero-item" data-bg="{{asset('storage/img/'.$carousel->url)}}"></div>
            {{-- <span style="display: none">{{$homeCarouselCount++}}</span> --}}
        @endforeach
    </div>
</div>
<!-- Intro Section -->