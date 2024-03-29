<a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$user->id}}">
    <i class="fa fa-pencil-alt"></i>
        Edit
    </a>
    <!-- Tambah Modal-->
    <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <form action="{{route('user.update', $user->id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_role">Akses Level</label>
                        <select class="form-control form-control-sm" id="id_role" name="id_role">
                            <option value="anggota"
                                @if($user->id_role=="anggota")
                                selected
                                @endif>Anggota</option>   
                            <option value="admin"
                                @if($user->id_role=="admin")
                                selected
                                @endif>Administrator</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Nama Lengkap" value="{{$user->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Email" value="{{$user->email}}" required>
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
