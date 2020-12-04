<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{$konfigurasi->nama_web}}</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('assets/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('assets/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <script src="{{ asset('assets/admin/js/core/jquery.3.2.1.min.js') }}"></script>
  <link  href="{{ asset('assets/admin/message/toastr.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/admin/message/toastr.min.js') }}"></script>
  
  <link  href="{{ asset('css/select2.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/jqueryui/jquery-ui.min.css')}}">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
        <div class="sidebar-brand-text mx-2">{{$konfigurasi->nama_web}}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{route('profile.show', Auth::user()->id)}}">
          <i class="fa fa-user"></i>
          <span>Profile</span></a>
      </li>

      @if(Auth::user()->id_role == "admin")
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="fa fa-users"></i>
          <span>User</span></a>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link" href="{{route('kamus.index')}}">
          <i class="fa fa-book"></i>
          <span>Kamus</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-folder"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{route('berita.index')}}">Berita</a>
                <a class="collapse-item" href="{{route('dokumen.index')}}">Dokumen</a>
                <a class="collapse-item" href="{{route('video.index')}}">Video</a>
                <a class="collapse-item" href="{{route('dataexcel.index')}}">Data Excel</a>
                <a class="collapse-item" href="{{route('autofill.index')}}">Auto Fill</a>
                <a class="collapse-item" href="{{route('sertifikat.index')}}">Sertifikat</a>
                <a class="collapse-item" href="{{route('countdown.index')}}">Countdown</a>
            </div>
        </div>
    </li>

    @if (Auth::user()->id_role == "admin")
    <li class="nav-item">
      <a class="nav-link" href="{{route('konfigurasi.index')}}">
          <i class="fa fa-wrench"></i>
          <span>Konfigurasi</span></a>
    </li>
    @endif

        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out-alt"></i>
            <span>{{ __('Logout') }}</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link" href="{{route('profile.show', Auth::user()->id)}}">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
            </a>
            </li>

        </ul>

        </nav>
        <!-- End of Topbar -->


    @yield('content')





     <!-- Footer -->
     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; {{$konfigurasi->author}}</span>
        </div>
        </div>
    </footer>
    <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets/admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('assets/admin/js/demo/datatables-demo.js')}}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  
  <script src="{{asset('assets/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>

  <script>
    $(document).ready(function() {
        $('.tags-selector').select2();
    });
</script>

</body>

</html>
