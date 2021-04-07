<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css/')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css/')}}">
	<link rel="stylesheet" href="{{asset('css/flaticon.css/')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css/')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css/')}}">
	<link rel="stylesheet" href="{{asset('css/style.css/')}}">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="{{asset('storage/img/'.$logo[0]->url)}}" height="32px" width="111px" alt=""><!-- Logo -->
			<h2>Loading.....</h2>
		</div>
	</div>

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

    <!-- page section -->
    <div class="page-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 blog-posts">
                    <!-- Single Post -->
                    
                    @yield('content')


                </div>
                <!-- Sidebar area -->
                <div class="col-md-4 col-sm-5 sidebar">
                    <!-- Single widget -->
                    <div class="widget-item">
                        <form action="/search" method="GET" class="search-form">
                            <input type="text" name="search" placeholder="Search">
                            <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="/filterCategory/{{$category->id}}">{{$category->category}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Tags</h2>
                        <ul class="tag">
                            @foreach ($tags as $tag)
                                <li><a href="/filterTag/{{$tag->id}}">{{$tag->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page section end-->

    @include('partials.newsletterSection')

    <!-- Footer section -->
    <footer class="footer-section">
        <h2>{{$footer[0]->copyright}}<a href="{{$footer[0]->creditsLink}}" target="_blank"> {{$footer[0]->credits}}</a></h2>
    </footer>
    <!-- Footer section end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/circle-progress.min.js')}}"></script>
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>

