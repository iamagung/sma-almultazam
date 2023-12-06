<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>SMAS AL-MULTAZAM</title>
	@include('include.style')
</head>

<body>
	<div class="wrapper">
		@include('include.sidebar')
		@include('include.header')

		<div class="page-wrapper">
			<div class="page-content">
				@yield('content')
			</div>
		</div>

		<div class="overlay toggle-icon"></div> <!--overlay-->
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

		@include('include.footer')
	</div>

	@include('include.script')
</body>
</html>
