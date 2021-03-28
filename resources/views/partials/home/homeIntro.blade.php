<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset('storage/img/'.$logo[0]->url)}}" alt="">
            <p>{{$homeCarouselDescription[0]->description}}</p>
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