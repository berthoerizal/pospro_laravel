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
                <a href="{{route('berita.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Judul</th>
                <th>Uploader</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($berita as $berita)
                    <tr>
                        <td><b>{{$berita->judul}}</b><br><span class="badge badge-light">Tanggal Upload: {{date("d M Y", strtotime($berita->created_at))}}</span></td>
                        <td>{{$berita->name}}</td>
                        <td>
                            @if($berita->status=="publish")
                            Publish
                            @else
                            Draft
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{route('berita.show', $berita->slug_judul)}}"><i class="fa fa-file-alt"></i> Detail</a>
                            <a class="btn btn-success btn-sm" href="{{route('berita.edit', $berita->slug_judul)}}"><i class="fa fa-pencil-alt"></i> Edit</a>
                            @include('berita.delete')
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
