<!-- newsletter section -->
<div id="newsletter-section" class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{{$newsletters[0]->title}}</h2>
            </div>
            <div class="col-md-9">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <!-- newsletter form -->
                <form action="/newsletterMail" method="POST" class="nl-form">
                    @csrf
                    <input type="text" name="email" id="" placeholder="{{$newsletters[0]->placeholder}}">
                    <button class="site-btn btn-2">{{$newsletters[0]->button}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->