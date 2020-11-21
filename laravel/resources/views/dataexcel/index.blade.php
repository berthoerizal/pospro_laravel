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
            <span class="float-left">
                <form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input id="excel" type="file" name="file" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-down"></i> Import</button>
                        
                <a href="{{route('export')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-up"></i> Export</a>
                    </div>
                </form>
            </span>
            <span class="float-right">
                @include('dataexcel.create')
                @include('dataexcel.delete_all')
            </span>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Nomor TPS</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataexcel as $dataexcel)
                    <tr>
                        <td>{{$dataexcel->username}}</td>
                        <td>{{$dataexcel->nama}}</td>
                        <td>{{$dataexcel->nomor_tps}}</td>
                        <td>
                            @include('dataexcel.edit')
                            @include('dataexcel.delete')
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
