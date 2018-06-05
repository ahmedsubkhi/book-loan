<!DOCTYPE html>
<html>
<head>
<title>Peminjaman Buku</title>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<style>
		html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Raleway', sans-serif;
				font-weight: 100;
				height: 100vh;
				margin: 0;
		}

		.full-height {
				height: 100vh;
		}

		.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
		}

		.position-ref {
				position: relative;
		}

		.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
		}

		.content {
				text-align: center;
		}

		.title {
				font-size: 84px;
		}

		.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
		}

		.m-b-md {
				margin-bottom: 30px;
		}
</style>
</head>
<body>
@if (Route::has('login'))
		<div class="top-right links">
				@if (session('logindata'))
						<a href="{{ url('/home') }}">Home</a>
						<a href="{{ url('/member') }}">Member</a>
						<a href="{{ url('/book') }}">Buku</a>
						<a href="{{ url('/logout') }}">Logout</a>
				@else
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Register</a>
				@endif
		</div>
@endif
<div class="wrapper" style="margin-top:100px;">
  <div class="container">
		@yield('content')
  </div>
</div>
</body>
</html>
