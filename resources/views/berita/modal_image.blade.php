<style>
    h4 { font-family: 'Open Sans'; margin: 0;}

.modal,body.modal-open {
    padding-right: 0!important
}

body.modal-open {
    overflow: auto
}

body.scrollable {
    overflow-y: auto
}

.modal-footer {
	display: flex;
	justify-content: flex-start;
	.btn {
		position: absolute;
		right: 10px;
	}
}
</style>
<script>
    $( 'a a' ).remove();

document.documentElement.setAttribute("lang", "en");
document.documentElement.removeAttribute("class");

axe.run( function(err, results) {
  console.log( results.violations );
} );
</script>

<a href="#" data-target="#modalIMG" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
<img src="{{ asset('assets/images/'.$berita->gambar) }}" class="img img-responsive" width="100%"></a>
    
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-0">
				<img src="{{ asset('assets/images/'.$berita->gambar) }}" alt="" style="width:100%">
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-secondary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
			</div>
		</div>
	</div>
</div>