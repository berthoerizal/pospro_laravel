<a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$dataexcel->id}}">
    <i class="fa fa-pencil-alt"></i>
        Edit
    </a>
    <!-- Tambah Modal-->
    <div class="modal fade" id="editModal{{$dataexcel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <form action="{{route('dataexcel.update', $dataexcel->id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="number" class="form-control form-control-sm" name="username" id="username" value="{{$dataexcel->username}}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-sm" name="nama" id="nama" value="{{$dataexcel->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_tps">Nomor TPS</label>
                        <input type="number" class="form-control form-control-sm" name="nomor_tps" id="nomor_tps" value="{{$dataexcel->nomor_tps}}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
