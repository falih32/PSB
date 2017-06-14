<?php $role = $this->session->userdata('id_role'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <h1>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
            <?php if($role <= 1){?>
             User
            <?php } ?>
            <a class="btn btn-success" data-toggle='tooltip' data-placement='top' title='Tambah User' href="<?php echo base_url()."User/";?>addUser"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
            
        </h1>
        <hr>
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar User
            </div>
            <div class="panel-body">
            </div>
            <table class="table table-responsive table-hover table-striped" id="tabel-user">
            	<thead>
                <tr>
                	<th>Nama</th>
                	<th>Username</th>
                        <th>Role</th>
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
	
	var table = $('#tabel-user').DataTable( {
    	"paging": true, 
		"search":true,  
		"scrollX":true,
		"ordering": true, 
		"responsive": false,
		"processing":true, 
		"serverSide": true,
                "pageLength": 50,
		"ajax":{
			"url":"<?php echo site_url('User/ajaxProcess');?>",
			"type":"POST"
		},
		"columns": [
                { "data": "Nama" },
                { "data": "username" },
                { "data": "usr_role" },
                { "data": "aksi" },
                { "data": "id" }
              ],
		"columnDefs": [
				{ "searchable": false, "orderable":false, "targets": [3] },
                                { "searchable": false, "visible":false, "targets": [4] }
                        ],
		"order": [[ 1, "asc" ]],
		"drawCallback": function( settings ) {
			makeConfirmation();
			makeTooltip();
                        fixedButton();
		},
                "createdRow": function ( row, data, index ) {
                    //$(row).click(function(){window.location.href = '<?php echo site_url('User/detail_user').'/'; ?>'+data.id;});
                    $(row).find('a').click(function(e){e.stopPropagation();});
                   }
	} );
	
});
</script>