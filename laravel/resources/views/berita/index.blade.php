@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

        @include('partial.message')

       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">Berita</h1><hr>

       <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-2">
            <a href="{{route('berita.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Berita</a>
        </div>
        <div class="col-md-10">
        <form action="{{route('cari')}}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan keyword pencarian" name="cari" value="{{old('cari')}}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <div class="row">
        @foreach($berita as $data)
        <div class="col-md-4">
            <div class="card shadow mb-4" >
                <div class="card-header" style="height: 200px;">
                    <img class="card-img-top" src="{{asset('assets/images/'.$data->gambar)}}" width="100%" height="100%">
                  </div>
                <div class="card-body">
                    <h5 class="card-title">{{$data->judul}}</h5>
                    <a class="btn btn-info btn-sm" href="{{route('berita.show', $data->slug_judul)}}"><i class="fa fa-file-alt"></i> Detail</a>
                    <a class="btn btn-success btn-sm" href="{{route('berita.edit', $data->slug_judul)}}"><i class="fa fa-pencil-alt"></i> Edit</a>
                    @include('berita.delete')
                </div>
                <div class="card-footer text-muted">
                   {{date('d F Y', strtotime($data->created_at))}}
                  </div>
              </div>
        </div>
        @endforeach
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-center">
                {!! $berita->links() !!}
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
