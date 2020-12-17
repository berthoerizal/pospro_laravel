@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

        {{-- @include('partial.message') --}}
        @if ($message = Session::get('success_2'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            API Token: <strong style="color:red;">{{ $message }}</strong>
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
                <form action="{{ route('token.store') }}" method="POST">
                    @csrf
                    <input class="btn btn-primary btn-sm" type="submit" value="Generate API Token" />
                </form> 
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>No.</th>
                <th>API Token</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=1;
                     foreach($token as $token) { ?>
                    <tr>
                        <td class="text-center"><?php echo $x; ?>.</td>
                        <td>{{$token->api_token}}</td>
                        <td>
                            <form action="{{ route('token.destroy', $token->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger btn-sm" type="submit" value="Hapus" />
                            </form> 
                        </td>
                    </tr>
                <?php $x++; } ?>
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
