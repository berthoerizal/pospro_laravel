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
                <a href="{{route('berita.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control form-control-sm" name="judul" id="judul" placeholder="Judul" value="{{old('judul')}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="isi">Isi Berita</label>
                                <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control form-control-sm" name="gambar" id="gambar" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control form-control-sm" id="status" name="status">
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                </select>
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
