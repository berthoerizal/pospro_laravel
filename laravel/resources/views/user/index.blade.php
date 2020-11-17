@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

        {{-- @include('partial.message') --}}

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @else
        @include('partial.message')
        @endif

       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1><hr>

       <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-right">
                @include('user.add')
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Akses Level</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if ($user->id_role=="" || $user->id_role=="anggota")
                                Anggota
                                @elseif ($user->id_role=="admin")
                                Administrator
                                @endif
                        </td>
                        <td>
                            @include('user.edit')
                            @include('user.reset_password')
                            @include('user.delete')
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
