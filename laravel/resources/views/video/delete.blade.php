<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteModal{{$video->id}}">
    <i class="fa fa-trash-alt"></i>
    Hapus
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="deleteModal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Video</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">
            <p>Yakin ingin menghapus <b>{{$video->nama_video}}</b> ?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <form action="{{ route('video.destroy', $video->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <input class="btn btn-danger btn-sm" type="submit" value="Hapus" />
            </form> 
        </div>
    </div>
    </div>
</div>