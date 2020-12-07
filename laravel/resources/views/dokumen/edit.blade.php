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
                <a href="{{route('dokumen.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('dokumen.update', $dokumen->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nama_dokumen">Nama Dokumen</label>
                                <input type="text" class="form-control form-control-sm" name="nama_dokumen" id="nama_dokumen" placeholder="Nama Dokumen" value="{{$dokumen->nama_dokumen}}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gambar">File:</label>
                                <input type="file" class="" name="gambar" id="gambar">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control form-control-sm" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{$dokumen->gambar}}" disabled>
                            </div>
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
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
