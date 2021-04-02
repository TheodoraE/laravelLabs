<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$servicesFeaturesTitle[0]->title}}</h2>
            {{-- <h2>Get in <span>the Lab</span> and  discover the world</h2> --}}
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($servicesFeaturesCard->where('id',"<=", 3) as $card)
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$card->title}}</h2>
                            <p>{{$card->text}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$card->icons->icon}}"></i>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="{{asset('storage/img/'.$servicesDevices[0]->url)}}" alt="" height="490px">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($servicesFeaturesCard->where('id',">", 3) as $card)
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="{{$card->icons->icon}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$card->title}}</h2>
                            <p>{{$card->text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="{{$servicesFeaturesButton[0]->link}}" class="site-btn">{{$servicesFeaturesButton[0]->button}}</a>
        </div>
    </div>
</div>
<!-- features section end-->