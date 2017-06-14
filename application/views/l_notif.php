<?php $role = $this->session->userdata('id_role'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <h1>
            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Notifikasi
        </h1>
        <hr>
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Daftar Notifikasi</div>
                    <div class="col-md-6 text-right"><button id="clearAllNotif" class="btn btn-sm btn-success"><i class="fa fa-trash"></i> Hapus semua notifikasi</button></div>
                </div>
            </div>
            <div class="panel-body">
            </div>
            <table class="table table-responsive table-hover" id="tabel-notif">
            	<thead>
                <tr>
                	<th> </th>
                	<th>Tipe</th>
                        <th>Pesan</th>
                        <th>ID</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	
	var table = $('#tabel-notif').DataTable( {
                "paging": true, 
		"searching":true,  
		"scrollX":true,
		"ordering": false, 
		"responsive": false,
		"processing":true, 
		"serverSide": true,
		"pageLength": 50,
		"ajax":{
                    "url":"<?php echo site_url('Notifikasi/ajaxTable');?>",
                    "type":"POST"
		},
		"columns": [
                    { "data": "ntf_icon" },
                    { "data": "m_ntf_title" },
                    { "data": "ntf_message" },
                    { "data": "ntf_id" }
                ],
		"columnDefs": [
                    { "visible":false, "targets": 3},
                    { "searchable":false, "targets":0}
                ],
		"order": [[ 3, "desc" ]],
                "dom": '<"row filter-row"<"col-md-2"l><"col-md-10"f><"col-md-12"p>><t><"row footer-row"<"col-md-6"i><"col-md-6"p>>',
                "createdRow": function ( row, data, index ) {
                    $(row).click(function(){
                        window.location.href = '<?php echo site_url('Notifikasi/goto_notif'); ?>/'+data.ntf_id;
                    });
                    $(row).find('a').click(function(e){e.stopPropagation();});
                    $(row).css('cursor', 'pointer');
                    if ( data.ntf_read_status == "0") { 
                        $(row).addClass('unread_notif');
                    }
                }
	} );
	
        $('#clearAllNotif').click(function() {
            $.ajax({ 
                url: "<?php echo site_url('Notifikasi/deleteByUser'); ?>",
                type: "POST",
                success:function(){
                    var list = document.getElementById("notif-list");
                    list.innerHTML = "";
                    table.draw();
                }
            });
        });
});
</script>