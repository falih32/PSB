<?php   $role = $this->session->userdata('id_role'); 

    switch ($kelompok) {
        case "1":
            $Judul = "TM Kelompok I";
            $SubJudul = "TM Kelompok I";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/1');
            break;
        case "2":
            $Judul = "TM Kelompok II";
            $SubJudul = "TM Kelompok II";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/2');
            break;
        case "3":
            $Judul = "TM Kelompok III";
            $SubJudul = "TM Kelompok III";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/3');
             break;
        case "4":
            $Judul = "TM Kelompok IV";
            $SubJudul = "TM Kelompok IV";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/4');
            break;
        case "5":
            $Judul = "TM Kelompok V";
            $SubJudul = "TM Kelompok V";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/5');
            break;
        case "6":
            $Judul = "TM Kelompok VI";
            $SubJudul = "TM Kelompok VI";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/6');
            break;
        case "7":
            $Judul = "TM Kelompok VII";
            $SubJudul = "TM Kelompok VII";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/7');
            break;
        
        default:
            $Judul = "TM Semua Kelompok";
            $SubJudul = "TM Semua Kelompok";
            $linkAjax =  site_url('TesMasuk/ajaxProcessTesMasuk/-1');
    }       
?>
<div class="container-fluid">
    <div class="row-fluid">
        <h1>
            <i class="fa fa-users"></i> <?php echo $Judul; ?>
            
        </h1>
        <hr>
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-users"></i> <?php echo $SubJudul; ?>
            </div>
            <div class="panel-body">
            </div>
            <table class="table table-responsive table-hover table-striped" id="tabel-surat">
            	<thead>
                <tr>
                	<th>No Pendaftaran</th>
                        <th>Nama Lengkap</th>
                        
                        <th>Alamat</th>
                        <th>Kecamatan</th>
                        <th>Kota</th>
                        <th>Sekolah Asal</th>
                        <th>Dari Kelas</th>
                        <th>Diterima dikelas</th>
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
	
	var table = $('#tabel-surat').DataTable( {
    	"paging": true, 
		"search":true,
                "scrollX":true,
		"ordering": true, 
		"responsive": false,
		"processing":true, 
		"serverSide": true,
                "pageLength": 50,
		"ajax":{
			"url":"<?php echo $linkAjax; ?>",
			"type":"POST"
		},
		"columns": [
                
                
                
                { "data": "tmb_no_daftar" }, //0
                { "data": "tmb_nama" }, //1
                { "data": "tmb_alamat" }, //2
                { "data": "tmb_kec" }, //3
                { "data": "tmb_kota" }, //4
                { "data": "tmb_skl_asl" }, //5
                { "data": "tmb_kelas" }, //6
                { "data": "tmb_diterimadi" }, //7
                
                { "data": "aksi" }, //8
                { "data": "tmb_id" } //9
              ],
		"columnDefs": [
				{ "searchable": false, "orderable":false, "targets": [8] },
				{ "searchable": false, "visible":false, "targets": [9] }
             
			],
		"order": [[ 9, "asc" ]],
		"drawCallback": function( settings ) {
			makeConfirmation();
			makeTooltip();
                        fixedButton();
		},
                "createdRow": function ( row, data, index ) {
                $(row).click(function(){window.location.href = '<?php echo site_url('TesMasuk/detail_siswa').'/'; ?>'+data.tmb_id;});
                $(row).css('cursor', 'pointer');
                
                $(row).find('a').click(function(e){e.stopPropagation();});
               
                }
                
                
                
	} );




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

                var confirmLinks = document.querySelectorAll('.confirm');
                for (var i = 0, length = confirmLinks.length; i < length; i++) {
                        confirmLinks[i].addEventListener('click', function(event) {
                                event.preventDefault();

                                var choice = confirm(this.getAttribute('data-confirm'));

                                if (choice) {
                                        $.ajax({
                                                url: this.getAttribute('data-href'),
                                                type: "POST",
                                                success: function(){table.draw();}
                                        });
                                }
                        });
                }
        }
//     $('#tabel-pengadaan tr td:not(:last-child)').click(function ()    {
//                    location.href = $(this).parent().find('td a').attr('href');
//                   });
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
    
     function moveSearch(){
                var newParent = document.getElementById('tabel-surat_filter');
                var oldParent = document.getElementById('date_search');

                while (oldParent.childNodes.length > 0) {
                        newParent.appendChild(oldParent.childNodes[0]);
                }
        }


});
</script>