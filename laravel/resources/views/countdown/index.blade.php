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
            <div class="float-left">
                <button class="btn-dark btn-sm" id="demo"><i class="fa fa-calendar"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="modal-body">
                <form action="{{route('countdown.update', $countdown->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal">Waktu Selesai</label>
                                    <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" value="{{$countdown->tanggal}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="waktu">Waktu Selesai</label>
                                    <input type="time" class="form-control form-control-sm" name="waktu" id="waktu" value="{{$countdown->waktu}}" required>
                                </div>
                            </div>
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
    </div>
    <!-- /.container-fluid -->
</div>
<script>
    // Set the date we're counting down to
    var tanggal_waktu = new Date("<?php echo $countdown->tanggal; echo " "; echo $countdown->waktu; ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = tanggal_waktu - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            // window.location = ""; //kondisi pindah halaman otomatis
            // document.getElementById('btnSignIn').click(); //kondisi tombol ditekan otomatis
        }
    }, 1000);
</script>
<!-- End of Main Content -->
@endsection
