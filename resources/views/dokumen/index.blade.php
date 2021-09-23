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
            <div class="float-right">
                <a href="{{route('dokumen.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nama Dokumen</th>
                <th>Tipe File</th>
                <th>Uploader</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dokumen as $dokumen)
                    <tr>
                        <td><b>{{$dokumen->nama_dokumen}}</b><br><span class="badge badge-light">Tanggal Upload: {{date("d M Y", strtotime($dokumen->created_at))}}</span></td>
                        <td class="text-center"><i><?php echo pathinfo(asset('assets/images/'. $dokumen->gambar), PATHINFO_EXTENSION); ?></i></td>
                        <td>{{$dokumen->name}}</td>
                        <td>
                            <a href="{{route('download_dokumen', $dokumen->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-download"></i> Download</a>
                            <a class="btn btn-success btn-sm" href="{{route('dokumen.edit', $dokumen->slug_dokumen)}}"><i class="fa fa-pencil-alt"></i> Edit</a>
                            @include('dokumen.delete')
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
