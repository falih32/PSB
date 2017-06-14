<?php $role = $this->session->userdata('id_role'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <h1>
            <i class="fa fa-unlink"></i> Infaq
            <?php if($role <= 1){?>
            <a class="btn btn-success" href="<?php echo base_url()."Infaq/";?>tambah_infaq"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
            <?php } ?>
        </h1>
        <hr>
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-unlink"></i> Infaq
            </div>
            <div class="panel-body">
            </div>
            <table class="table table-responsive table-hover table-striped" id="tabel-unit">
            	<thead>
                <tr>
                	<th>Infaq Blangko</th>
                        <th>Infaq Daftar Ulang</th>
                	<th>Tahun</th>
                        <th>Aksi</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
<!--
    function makeConfirmation(){
	var deleteLinks = document.querySelectorAll('.delete');
	for (var i = 0, length = deleteLinks.length; i < length; i++) {
            deleteLinks[i].addEventListener('click', function(event) {
                event.preventDefault();

                var choice = confirm(this.getAttribute('data-confirm'));

                if (choice) {
                    window.location.href = this.getAttribute('href');
                }
            });
	}
    }

    function makeTooltip(){
	$('[data-toggle="tooltip"]').tooltip({});
    }
    
    function fixedButton(){
        $('.btn-aksi').width(
            Math.max.apply( 
                Math, 
                $('.btn-aksi').map(function(){
                    return $(this).outerWidth();
                }).get()
            )
        );
    }

$(document).ready(function() {
	
	var table = $('#tabel-unit').DataTable( {
    	"paging": true, 
		"search":true,  
		"ordering": true, 
		"responsive": false,
		"processing":true, 
		"serverSide": true,
                "pageLength": 50,
		"ajax":{
			"url":"<?php echo site_url('Infaq/ajaxProcess');?>",
			"type":"POST"
		},
		"columns": [
                { "data": "inf_blangko" },
                { "data": "inf_daftar" },
                { "data": "inf_tahun" },
                { "data": "aksi" },
                { "data": "inf_id" }
              ],
		"columnDefs": [
				{ "searchable": false, "orderable":false, "targets":3 },
				
                                { "visible":false, "targets": [4]}
			],
		"order": [[ 4, "asc" ]],
		"drawCallback": function( settings ) {
			makeConfirmation();
			makeTooltip();
                        fixedButton()
		},
                "createdRow": function ( row, data, index ) {
                    if ( data.dpt_id == "0") {
                        $('td', row).eq(1).html('<a class="btn btn-sm btn-aksi btn-danger delete" disabled="disabled"data-toggle="tooltip" data-placement="top" title="Hapus" data-confirm="Are you sure to delete this item?" href="Unit/delete_unit/'+data.dpt_id+'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>                        <a class="btn btn-sm btn-aksi btn-info" data-toggle="tooltip" data-placement="top" title="Edit" href="Unit/edit_unit/'+data.inf_id+'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ubah</a>');
                        
                    }
                }
	} );
	
});
</script>