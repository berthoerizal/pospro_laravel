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
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#">{{$konfigurasi->nama_web}}</a>
	  
			<form class="form-inline">
				<a href="{{route('login')}}" class="btn btn-outline-secondary" style="margin-right: 5px;">Login</a>
				<a href="{{route('register')}}" class="btn btn-outline-secondary">Register</a>
			</form>
	  </nav>
	<section id="welcome_message">
	</section>

	<script src="{{asset('assets/welcome/three.min.js')}}"></script>
	<script src="{{asset('assets/welcome/vanta.globe.min.js')}}"></script>
	<script>
	VANTA.GLOBE({
		el: "#welcome_message",
		mouseControls: true,
		touchControls: true,
		gyroControls: false,
		minHeight: 600.00,
		minWidth: 200.00,
		scale: 1.00,
		scaleMobile: 1.00,
		color: 0x0,
		color2: 0x0,
		size: 0.50,
	backgroundColor: 0xffffff
	})
	</script>
</body>

</html>