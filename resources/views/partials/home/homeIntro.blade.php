<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <?php $i=0?>
            <img src="{{asset('storage/img/'.$logo[0]->url)}}" height="170px" alt="">

            <p>{{$homeCarousel[0]->carouseldescriptions->description}}</p>
            
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($homeCarousel as $carousel)
            <div class="item  hero-item" data-bg="{{asset('storage/img/'.$carousel->url)}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->