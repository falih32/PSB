<?php   $role = $this->session->userdata('id_role'); 

    switch ($kelompok) {
        case "1":
            $Judul = "VP Kelompok I";
            $SubJudul = "VP Kelompok I";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/1');
            break;
        case "2":
            $Judul = "VP Kelompok II";
            $SubJudul = "VP Kelompok II";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/2');
            break;
        case "3":
            $Judul = "VP Kelompok III";
            $SubJudul = "VP Kelompok III";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/3');
             break;
        case "4":
            $Judul = "VP Kelompok IV";
            $SubJudul = "VP Kelompok IV";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/4');
            break;
        case "5":
            $Judul = "VP Kelompok V";
            $SubJudul = "VP Kelompok V";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/5');
            break;
        case "6":
            $Judul = "VP Kelompok VI";
            $SubJudul = "VP Kelompok VI";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/6');
            break;
        case "7":
            $Judul = "VP Kelompok VII";
            $SubJudul = "VP Kelompok VII";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/7');
            break;
        
        default:
            $Judul = "VP Semua Kelompok";
            $SubJudul = "VP Semua Kelompok";
            $linkAjax =  site_url('VerPendaftaran/ajaxProcessSiswa/-1');
    }       
?>
<div class="container-fluid">
    <div class="row-fluid">
        <h1>
            <i class="fa fa-users"></i> <?php echo $Judul; ?>
            <?php if($role <= 1){?>
            <a class="btn btn-success" data-toggle='tooltip' data-placement='top' title='Tambah Siswa' href="<?php echo base_url()."VerPendaftaran/";?>daftar"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
            <?php } ?>
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
                        <th>Alamat Sekolah</th>
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
                { "data": "tmb_alm_skl" }, //6
                
                { "data": "aksi" }, //7
                { "data": "tmb_id" } //8
              ],
		"columnDefs": [
				{ "searchable": false, "orderable":false, "targets": [7] },
				{ "searchable": false, "visible":false, "targets": [8] }
             
			],
		"order": [[ 8, "asc" ]],
		"drawCallback": function( settings ) {
			makeConfirmation();
			makeTooltip();
                        fixedButton();
		},
                "createdRow": function ( row, data, index ) {
                $(row).click(function(){window.location.href = '<?php echo site_url('VerPendaftaran/detail_siswa').'/'; ?>'+data.tmb_id;});
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