<?php   $role = $this->session->userdata('id_role'); 

    switch ($state) {
        case "1":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/1');
            break;
        case "2":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/2');
            break;
        case "3":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/3');
             break;
        case "4":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/4');
            break;
        case "5":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/5');
            break;
        case "6":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/6');
            break;
        case "7":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/7');
            break;
        case "8":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/8');
            break;
        case "9":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/9');
            break;
        case "10":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/10');
            break;
        case "11":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/11');
            break;
        case "12":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/12');
            break;
        case "13":
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/13');
            break;
        
        default:
            $linkAjax =  site_url('SiswaBaru/ajaxProcessSiswaBaru/-1');
    }
    $Judul = $title;
    $SubJudul = $title;
?>
<div class="container-fluid">
    <div class="row-fluid">
        <h1>
            <i class="fa fa-users"></i> <?php echo $Judul; ?>
            
        </h1>
        <hr>
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <a class="btn btn-lg btn-warning " href="<?php echo base_url()."Infaq/cetakListSB";?>"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak Laporan Siswa Baru</a>
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
                { "data": "tmb_diterimadi" }, //5
                
                { "data": "aksi" }, //6
                { "data": "tmb_id" } //7
              ],
		"columnDefs": [
				{ "searchable": false, "orderable":false, "targets": [6] },
				{ "searchable": false, "visible":false, "targets": [7] }
             
			],
		"order": [[ 7, "asc" ]],
		"drawCallback": function( settings ) {
			makeConfirmation();
			makeTooltip();
                        fixedButton();
		},
                "createdRow": function ( row, data, index ) {
                $(row).click(function(){window.location.href = '<?php echo site_url('SiswaBaru/detail_siswa').'/'; ?>'+data.tmb_id;});
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