<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahModal">
    <i class="fa fa-plus"></i>
    Tambah
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <form action="{{route('dataexcel.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="number" class="form-control form-control-sm" name="username" id="username" value="{{old('username')}}" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-sm" name="nama" id="nama" value="{{old('nama')}}" required>
                </div>
                <div class="form-group">
                    <label for="nomor_tps">Nomor TPS</label>
                    <input type="number" class="form-control form-control-sm" name="nomor_tps" id="nomor_tps" value="{{old('nomor_tps')}}" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>
