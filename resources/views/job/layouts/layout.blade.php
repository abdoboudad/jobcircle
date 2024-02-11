<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Page Title -->
	<title>Job Circle</title>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&amp;display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href='{{ asset("cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css") }}'>
	<!-- Additional Plugins Styles -->
	<link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Site main stylesheet-->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">

		<!-- header of the page -->
        @include('job.components.header')
        @yield('content')
		<!-- footer of the page -->
        @include('job.components.footer')
	</div>
	<!-- Bootstrap JS -->
	<script src="{{ asset('cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js') }}"></script>
	<script src="{{ asset('cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.min.js') }}"></script>
	<!-- jQuery Library -->
	<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
	<!-- jQuery Plugins -->
	<script src="{{ asset('js/vendor.js') }}"></script>
	<!-- jQuery Main -->
	<script src="{{ asset('js/jquery.main.js') }}"></script>
</body>
</html>

