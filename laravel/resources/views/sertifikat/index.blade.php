@extends('layouts.app')

@section('content')
<script src="{{asset('assets/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 100,
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        image_advtab: true,
        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

        @include('partial.message')

       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1><hr>

       <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <a href="{{route('pdf_sertifikat',[$sertifikat->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i> Download <b>PDF</b></a>
            </div>
        </div>
        <div class="card-body">
            <div class="modal-body">
                <form action="{{route('sertifikat.update', $sertifikat->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="kegiatan">Kegiatan</label>
                                        <input type="text" class="form-control form-control-sm" name="kegiatan" id="kegiatan" placeholder="Kegiatan" value="{{$sertifikat->kegiatan}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="instansi">Instansi</label>
                                        <input type="text" class="form-control form-control-sm" name="instansi" id="instansi" placeholder="Instansi" value="{{$sertifikat->instansi}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nomor">Nomor</label>
                                        <input type="text" class="form-control form-control-sm" name="nomor" id="nomor" placeholder="Nomor" value="{{$sertifikat->nomor}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="peserta">Nama Peserta</label>
                                        <input type="text" class="form-control form-control-sm" name="peserta" id="peserta" placeholder="Nama Peserta" value="{{$sertifikat->peserta}}" required>
                                    </div>
                                </div>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="panitia1">Nama Panitia ke-1</label>
                                            <input type="text" class="form-control form-control-sm" name="panitia1" id="panitia1" placeholder="Nama Panitia ke-1" value="{{$sertifikat->panitia1}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jabatan1">Jabatan Panitia ke-1</label>
                                            <input type="text" class="form-control form-control-sm" name="jabatan1" id="jabatan1" placeholder="Jabatan Panitia ke-1" value="{{$sertifikat->jabatan1}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="panitia2">Nama Panitia ke-2</label>
                                            <input type="text" class="form-control form-control-sm" name="panitia2" id="panitia2" placeholder="Nama Panitia ke-2" value="{{$sertifikat->panitia2}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jabatan2">Jabatan Panitia ke-2</label>
                                            <input type="text" class="form-control form-control-sm" name="jabatan2" id="jabatan2" placeholder="Jabatan Panitia ke-2" value="{{$sertifikat->jabatan2}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10">{{$sertifikat->keterangan}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tempat">Tempat</label>
                                            <input type="text" class="form-control form-control-sm" name="tempat" id="tempat" placeholder="Tempat" value="{{$sertifikat->tempat}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" value="{{$sertifikat->tanggal}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gambar">Background</label>
                                            <input type="file" name="gambar" id="gambar">
                                        </div>
                                    </div>
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
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
