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
	<link href="{{asset('assets/welcome/imagecss.css')}}" rel="stylesheet">
</head>

<body>
	
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#">{{$konfigurasi->nama_web}}</a>
		<form class="form-inline">
			<a href="{{route('login')}}" class="btn btn-outline-secondary" style="margin-right: 5px;">Login</a>
			<a href="{{route('register')}}" class="btn btn-outline-secondary">Register</a>
		</form>
	</nav>

	<div class="context">
		<h1>Welcome to {{$konfigurasi->nama_web}}</h1><br>
		<h6>{{$konfigurasi->author}}</h6>
    </div>
	<div class="area" >
		<ul class="circles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
    </div >

</body>
</html>