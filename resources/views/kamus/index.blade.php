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
                @include('kamus.create')
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th width="5%">No.</th>
                <th width="20%">Kata / Kalimat</th>
                <th>Arti</th>
                <th width="40%">Contoh</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=1; ?>
                @foreach($kamus as $kamus)
                    <tr>
                        <td><?php echo $x; ?></td>
                        <td><b>{{$kamus->kata}}</b></td>
                        <td><i>{{$kamus->arti}}</i></td>
                        <td>{{$kamus->contoh}}</td>
                        <td>
                            @include('kamus.edit')
                            @include('kamus.delete')
                        </td>
                    </tr>
                    <?php $x++; ?>
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
