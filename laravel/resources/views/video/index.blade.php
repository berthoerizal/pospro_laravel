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
                <a href="{{route('video.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nama Video</th>
                <th>Uploader</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($video as $video)
                    <tr>
                        <td style="width: 60%;"><b>{{$video->nama_video}}</b><br><span class="badge badge-light">Tanggal Upload: {{date("d M Y", strtotime($video->created_at))}}</span></td>
                        <td>{{$video->name}}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{route('video.show', $video->slug_video)}}"><i class="fa fa-file-alt"></i> Detail</a>
                            <a class="btn btn-success btn-sm" href="{{route('video.edit', $video->slug_video)}}"><i class="fa fa-pencil-alt"></i> Edit</a>
                            @include('video.delete')
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
