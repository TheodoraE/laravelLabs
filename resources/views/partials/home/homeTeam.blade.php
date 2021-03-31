<!-- Team Section -->
<div id="team-section" class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$homeTeamTitle[0]->title}}</h2>
            {{-- <h2>Get in <span>the Lab</span> and  meet the team</h2> --}}
        </div>
        <div class="row">
            @foreach ($homeTeamCards as $card)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{asset('storage/img/'.$card->url)}}" alt="">
                        <h2>{{$card->name}}</h2>
                        <h3>{{$card->function}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->