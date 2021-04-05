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
				<li><a href="{{$navbar[0]->link}}">{{$navbar[0]->page}}</a></li>
				<li><a href="{{$navbar[1]->link}}">{{$navbar[1]->page}}</a></li>
				<li class="active"><a href="{{$navbar[2]->link}}">{{$navbar[2]->page}}</a></li>
				<li><a href="{{$navbar[3]->link}}">{{$navbar[3]->page}}</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>{{$pageHeader[1]->page}}</h2>
				<div class="page-links">
					<a href="{{$pageHeader[1]->homeLink}}">{{$pageHeader[1]->home}}</a>
					<span>{{$pageHeader[1]->page}}</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


    @include('partials.blog.blogPost')

    @include('partials.newsletterSection')
    
@endsection