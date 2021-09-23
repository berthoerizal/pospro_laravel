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
                <a href="{{route('dataexcel.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-file-excel"></i> Data Excel</a>
            </div>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Cari Username</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="number" class="form-control" id="data_search" aria-describedby="basic-addon3" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" id="data_result" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
 <!-- Script -->
 <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#data_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('getdata')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#data_search').val(ui.item.label); // display the selected text
           $('#data_result').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });
    </script>
@endsection
