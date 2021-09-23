@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

        @include('partial.message')

       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1><hr>

       <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <a href="{{route('berita.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="border border-primary">
                        @include('berita.modal_image')
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <h5><?php echo $berita->judul; ?></h5>
                    <div class="col-md-12">
                        <span class="badge badge-light float-left">Diupload Oleh: <?php echo $berita->name; ?></span>
                        <span class="badge badge-light float-right">Tanggal Upload: <?php echo date("d M Y", strtotime($berita->created_at)); ?></span>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <br>
                        <p class="text-justify"><?php echo $berita->isi; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@endsection
