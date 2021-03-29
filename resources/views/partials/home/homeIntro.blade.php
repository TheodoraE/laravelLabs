<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <?php $i=0?>
            <img src="{{asset('storage/img/'.$logo[0]->url)}}" alt="">

            {{-- @for ($i = 0; $i < 1; $i++) --}}
                <p>{{$homeCarousel[0]->carouseldescriptions->description}}</p>
            {{-- @endfor --}}
            
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($homeCarousel as $carousel)
            {{-- {{dd($i)}} --}}
            <div class="item  hero-item" data-bg="{{asset('storage/img/'.$carousel->url)}}"></div>
            {{-- <span style="display: none">{{$homeCarouselCount++}}</span> --}}
        @endforeach
    </div>
</div>
<!-- Intro Section -->