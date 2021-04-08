<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{{$homeTestimonialsTitle[0]->title}}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonials as $card)
                        <div class="testimonial">
                            <span>{{$card->span}}</span>
                            <p>{{$card->text}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('storage/img/'.$card->users->url)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$card->users->firstname}} {{$card->users->name}}</h2>
                                    <p>{{$card->users->positions->function}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->