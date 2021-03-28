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
				@foreach ($navbar as $navbar)
					<li><a href="{{$navbar->link}}">{{$navbar->page}}</a></li>
				@endforeach
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


    {{-- Content --}}
    @yield('content')


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