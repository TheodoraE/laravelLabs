@extends('template.main')

@section('content')
    <!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('storage/img/'.$logo[0]->url)}}" height="32px" width="111px" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="{{$navbar[0]->link}}">{{$navbar[0]->page}}</a></li>
				<li><a href="{{$navbar[1]->link}}">{{$navbar[1]->page}}</a></li>
				<li><a href="{{$navbar[2]->link}}">{{$navbar[2]->page}}</a></li>
				<li><a href="{{$navbar[3]->link}}">{{$navbar[3]->page}}</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

    @include('partials.home.homeIntro')
    @include('partials.home.homeAbout')
    @include('partials.home.homeTestimonials')
    @include('partials.home.homeServices')
    @include('partials.home.homeTeam')

    <!-- Promotion section -->
    <div class="promotion-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Are you ready to stand out?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
                </div>
                <div class="col-md-3">
                    <div class="promo-btn-area">
                        <a href="" class="site-btn btn-2">Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion section end-->


    @include('partials.contactForm')
    
@endsection