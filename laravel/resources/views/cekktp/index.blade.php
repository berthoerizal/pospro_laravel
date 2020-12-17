@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

        {{-- @include('partial.message') --}}

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
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert">
                        <p style="text-align: justify;"><b>Cek KTP</b> adalah fitur untuk memastikan bahwa data KTP yang diisi oleh pengguna telah terdaftar dan dapat ditemukan secara online menggunakan <b>Restfull API</b> yang diakses dari website <a href="https://binderbyte.com">Binderbyte</a>.
                        <br>
                        Agar Website dapat menerima alamat API dari aplikasi lain maka terlebih dahulu menginstal <b>"guzzlehttp/guzzle": "~6.0"</b> di composer laravel. Tutorial penggunaan guzzle dapat diakses di website <a href="https://www.codewall.co.uk/laravel-guzzle-tutorial-with-get-post-examples/">Codewall.</a>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('cekktp.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="number" class="form-control form-control-sm" name="nik" id="nik" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control-sm" name="name" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="birthplace">Tempat Lahir</label>
                                                <input type="text" class="form-control form-control-sm" name="birthplace" id="birthplace" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="birthdate">Tanggal</label>
                                                <input type="date" class="form-control form-control-sm" name="birthdate" id="birthdate" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <p>Hasil Pencarian</p>
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="40%"><b>NIK</b></td>
                                        <td><?php echo $data['nik'] ? $data['nik'] : ""; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Status</b></td>
                                        <td><?php echo $data['status'] ? $data['status'] : ""; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Name Match</b></td>
                                        <td><?php echo $data['name_match'] ? $data['name_match'] : ""; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Birthplace Match</b></td>
                                        <td><?php echo $data['birthplace_match'] ? $data['birthplace_match'] : ""; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Birthdate Match</b></td>
                                        <td><?php echo $data['birthdate_match'] ? $data['birthdate_match'] : ""; ?></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
