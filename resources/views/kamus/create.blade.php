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
        <form action="{{route('kamus.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="kata">Kata / Kalimat</label>
                    <input type="text" class="form-control form-control-sm" name="kata" id="kata" value="{{old('kata')}}" required>
                </div>
                <div class="form-group">
                    <label for="arti">Arti</label>
                    <input type="text" class="form-control form-control-sm" name="arti" id="arti" value="{{old('arti')}}" required>
                </div>
                <div class="form-group">
                    <label for="contoh">Contoh</label>
                    <textarea name="contoh" id="contoh" class="form-control form-control-sm" cols="30" rows="5" required>{{old('contoh')}}</textarea>
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
