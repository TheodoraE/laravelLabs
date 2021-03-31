<!-- Team Section -->
<div id="team-section" class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$homeTeamTitle[0]->title}}</h2>
            {{-- <h2>Get in <span>the Lab</span> and  meet the team</h2> --}}
        </div>
        <div class="row">
            @foreach ($users->where('id', "!=", 1)->random(2) as $user)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{asset('storage/img/'.$user->url)}}" alt="" height="440px" width="360px">
                        <h2>{{$user->firstname}} {{$user->name}}</h2>
                        <h3>{{$user->positions->function}}</h3>
                    </div>
                </div>
                @if ($loop->iteration == 1)
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{asset('storage/img/'.$users[0]->url)}}" alt="" height="440px" width="360px">
                            <h2>{{$users[0]->firstname}} {{$user->name}}</h2>
                            <h3>{{$users[0]->positions->function}}</h3>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->