@extends('template.main')

@section('content')
    <!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
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