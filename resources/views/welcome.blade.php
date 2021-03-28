@extends('template.main')

@section('content')
    {{-- <!-- Header section -->
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
	<!-- Header section end --> --}}

    @include('partials.home.homeIntro')
    @include('partials.home.homeAbout')
    @include('partials.home.homeTestimonials')
    @include('partials.home.homeServices')
    @include('partials.home.homeTeam')


    @include('partials.newsletterSection')
    @include('partials.contactForm')
    
@endsection