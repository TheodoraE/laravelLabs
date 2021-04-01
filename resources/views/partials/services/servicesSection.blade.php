<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{{$homeServicesTitle[0]->title}}</h2>
            {{-- <h2>Get in <span>the Lab</span> and see the services</h2> --}}
        </div>
        <div class="row">
            @foreach ($servicesCard as $card)
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$card->icons->icon}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$card->title}}</h2>
                            <p>{{$card->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services section end -->