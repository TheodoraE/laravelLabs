<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                
                <!-- single card -->
                @foreach ($homeAboutCards as $about)
                    <div class="{{$about->classCol}}">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$about->icons->icon}}"></i>
                            </div>
                            <h2>{{$about->title}}</h2>
                            <p>{{$about->text}}</p>
                        </div>
                    </div> 
                @endforeach

            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{{$homeAboutTitle[0]->title}}</h2>
                {{-- <h2>Get in <span>the Lab</span> and discover the world</h2> --}}
            </div>
            <div class="row">
                @foreach ($homeAboutContent as $text)
                    <div class="col-md-6">
                        <p>{{$text->text}}</p>
                    </div>                
                @endforeach
            </div>
            <div class="text-center mt60">
                @foreach ($homeAboutButton as $button)
                    <a href="{{$button->link}}" class="site-btn">{{$button->button}}</a>
                @endforeach
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset('storage/img/'.$homeAboutVideo[0]->url)}}" alt="">
                        {{-- height="407px" width="754px" --}}
                        <a href="{{$homeAboutVideo[0]->youtubeLink}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->