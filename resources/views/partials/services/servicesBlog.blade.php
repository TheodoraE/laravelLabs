<!-- services card section-->
<div id="services-card-section" class="services-card-section spad">
    <div class="container">
        <div class="row">

            @foreach ($servicesBlog as $blog)
                <!-- Single Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{asset('storage/img/'.$blog->url)}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$blog->title}}</h2>
                            <p>{!!Str::limit($blog->text, 318)!!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- services card section end-->