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
                <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm"> <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a>
            </div>
        </div>
        <div class="card-body">
            <div class="modal-body">
                <form action="{{route('konfigurasi.update', $konfig->id)}}" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control form-control-sm" name="author" id="author" placeholder="Author" value="{{$konfig->author}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama_web">Nama Website</label>
                                        <input type="text" class="form-control form-control-sm" name="nama_web" id="nama_web" placeholder="Nama Website" value="{{$konfig->nama_web}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="lokasi">Lokasi</label>
                                        <textarea name="lokasi" class="form-control form-control-sm" id="lokasi">{{$konfig->lokasi}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <iframe src="{{$konfig->lokasi}}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
