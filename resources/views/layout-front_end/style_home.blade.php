<!DOCTYPE HTML>
<html>
	<head>
		<title>Hielo by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('/css/main.css')}}" />
	</head>
	<body>

		<!-- header -->
		@include('layout-front_end.partials.header')

		<!-- Banner -->
		@yield('section')
		<!-- main home -->
		@yield('content')

		<!-- Footer -->
		@include('layout-front_end.partials.footer')

		<!-- Scripts -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		 <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ asset('assets/js/skel.min.js') }}"></script>
		<script src="{{ asset('assets/js/util.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>


	</body>
</html>
