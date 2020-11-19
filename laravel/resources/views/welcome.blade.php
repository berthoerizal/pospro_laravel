{{-- {{asset('assets/ --}}
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>{{$konfigurasi->nama_web}}</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<meta content="Bertho Erizal" name="author">
	<link href="{{asset('assets/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

	<style>
		body, html {
  			height: 100%;
		}
		.background {
		height: 80%;
		background-position: center;
  		background-repeat: no-repeat;
  		background-size: cover;
		}
	</style>
</head>

<body>
	
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#">{{$konfigurasi->nama_web}}</a>
		<form class="form-inline">
			<a href="{{route('login')}}" class="btn btn-outline-secondary" style="margin-right: 5px;">Login</a>
			<a href="{{route('register')}}" class="btn btn-outline-secondary">Register</a>
		</form>
	</nav>

	<header class="background">
		<div class="container h-100">
		  <div class="row h-100 align-items-center">
			<div class="col-12 text-center">
			  <h1 class="font-weight-light">Welcome to {{$konfigurasi->nama_web}}</h1>
			  <p class="lead">{{$konfigurasi->author}}</p>
			</div>
		  </div>
		</div>
	  </header>
</body>
</html>