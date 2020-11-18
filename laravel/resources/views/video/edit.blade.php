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
                <a href="{{route('video.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('video.update', $video->id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_video">Nama Video</label>
                                <input type="text" class="form-control form-control-sm" name="nama_video" id="nama_video" placeholder="Nama Video" value="{{$video->nama_video}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="link_video">Link Video</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://www.youtube.com/watch?v=</span>
                                </div>
                                <input type="text" name="link_video" id="link_video" value="{{$video->link_video}}" placeholder="Kode Video Youtube" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_video">Keterangan</label>
                                <input type="text" class="form-control form-control-sm" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{$video->keterangan}}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
