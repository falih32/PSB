<?php

        $tmb_id=$data->tmb_id;
        $tmb_no_daftar=$data->tmb_no_daftar;
        $tmb_nama=$data->tmb_nama;
        $tmb_nisn=$data->tmb_nisn;
        $tmb_tempatL=$data->tmb_tempatL;
        $tmb_ttl=$data->tmb_ttl;
        $tmb_sdrk=$data->tmb_sdrk;
        $tmb_sdrt=$data->tmb_sdrt;
        $tmb_anakke=$data->tmb_anakke;
        $tmb_stsdkel=$data->tmb_stsdkel;
        $tmb_alamat=$data->tmb_alamat;
        $tmb_kec=$data->tmb_kec;
        $tmb_kota=$data->tmb_kota;
        $tmb_hobi=$data->tmb_hobi;
        $tmb_cita=$data->tmb_cita;
        $tmb_transport=$data->tmb_transport;
        $tmb_jarak=$data->tmb_jarak;
        $tmb_ayah=$data->tmb_ayah;
        $tmb_pnd_ayah=$data->tmb_pnd_ayah;
        $tmb_pek_ayah=$data->tmb_pek_ayah;
        $tmb_agm_ayah=$data->tmb_agm_ayah;
        $tmb_peng_ayah=$data->tmb_peng_ayah;
        $tmb_alamat_ortu=$data->tmb_alamat_ortu;
        $tmb_kec_ortu=$data->tmb_kec_ortu;
        $tmb_kota_ortu=$data->tmb_kota_ortu;
        $tmb_telp_ortu=$data->tmb_telp_ortu;
        $tmb_ibu=$data->tmb_ibu;
        $tmb_pnd_ibu=$data->tmb_pnd_ibu;
        $tmb_pek_ibu=$data->tmb_pek_ibu;
        $tmb_agm_ibu=$data->tmb_agm_ibu;
        $tmb_peng_ibu=$data->tmb_peng_ibu;
        
        $tmb_skl_asl=$data->tmb_skl_asl;
        $tmb_alm_skl=$data->tmb_alm_skl;
        $tmb_kelas=$data->tmb_kelas;
        $tmb_foto=$data->tmb_foto;
        $tmb_akte=$data->tmb_akte;
        $tmb_kk=$data->tmb_kk;
        $tmb_rapor=$data->tmb_rapor;
        
	$tmb_nilai=$data->tmb_nilai;
        $tmb_diterimadi=$data->tmb_diterimadi;
	$tmb_kelompok=$data->tmb_kelompok;
?>

<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><img src="<?php echo base_url();?>assets/css/images/icon.png" style="height:50px; margin-top:0px;"> <?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php echo base_url()."TesMasuk/proses_InputNilai"; ?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            
                <div class="col-md-6">
                    
                    
                    <input type="hidden" class="form-control" id="tmb_id" name="tmb_id" value="<?php echo $tmb_id; ?>" >
                    <input type="hidden" class="form-control" id="tmb_kelompok" name="tmb_kelompok" value="<?php echo $tmb_kelompok; ?>" >
                    <div class="form-group">
                        <label for="tmb_no_daftar" class="col-sm-4 control-label text-left">Nomor Pendaftaran</label>
                        <div class="col-sm-8"> 
                            <input type="text" class="form-control" id="tmb_no_daftar" name="tmb_no_daftar" value="<?php echo $tmb_no_daftar; ?>" required readonly>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nama Lengkap</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_nama" name="tmb_nama" placeholder="Nama Calon Siswa" value="<?php echo $tmb_nama; ?>" required readonly>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                 
                <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nilai Tes Masuk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="tmb_nilai" name="tmb_nilai" placeholder="Nilai Akhir Tes Masuk" value="<?php echo $tmb_nilai; ?>" pattern='[0-9]*' required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                
                    
                     <div class="form-group">
                        <label for="tmb_kelas" class="col-sm-4 control-label text-left">Dari Kelas</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="tmb_kelas" name="tmb_kelas" required readonly >
                                    <option value="">Select ...</option>
                                    <option value="-1" <?php if($tmb_kelas==-1){echo "selected";}?> >Belum Sekolah/PAUD</option>
                                    <option value="0" <?php if($tmb_kelas==0){echo "selected";}?> >TK/RA</option>
                                    <option value="1" <?php if($tmb_kelas==1){echo "selected";}?> >1 (Satu) MI/SD</option>
                                    <option value="2" <?php if($tmb_kelas==2){echo "selected";}?> >2 (Dua) MI/SD</option>
                                    <option value="3"<?php if($tmb_kelas==3){echo "selected";}?>>3 (Tiga) MI/SD</option>
                                    <option value="4"<?php if($tmb_kelas==4){echo "selected";}?>>4 (Empat) MI/SD</option>
                                    <option value="5"<?php if($tmb_kelas==5){echo "selected";}?>>5 (Lima) MI/SD</option>
                                    <option value="6"<?php if($tmb_kelas==6){echo "selected";}?>>6 (Enam) Lulus MI/SD </option>
                                    <option value="7"<?php if($tmb_kelas==7){echo "selected";}?>>1 (Satu) MTs/SMP</option>
                                    <option value="8"<?php if($tmb_kelas==8){echo "selected";}?>>2 (Dua) MTs/SMP</option>
                                    <option value="9"<?php if($tmb_kelas==9){echo "selected";}?>>3 (Tiga) MTs/SMP</option>
                                    <option value="10"<?php if($tmb_kelas==10){echo "selected";}?>>1 (Satu) MA/SMA/SMK</option>
                                    <option value="11"<?php if($tmb_kelas==11){echo "selected";}?>>2 (Dua) MA/SMA/SMK</option>
                                    <option value="12"<?php if($tmb_kelas==12){echo "selected";}?>>3 (Tiga) MA/SMA/SMK</option>
                                </select>
                        </div>
                    </div>
                   
                     <div class="form-group">
                        <label for="tmb_kelas" class="col-sm-4 control-label text-left">Diterima di kelas</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="tmb_diterimadi" name="tmb_diterimadi" required>
                                    <option value="" <?php if($tmb_diterimadi==0){echo "selected";}?>>Select ...</option>
                                    <option value="1a" <?php if($tmb_diterimadi=='1a'){echo "selected";}?> >1 (Satu) A </option>
                                    <option value="1b" <?php if($tmb_diterimadi=='1b'){echo "selected";}?> >1 (Satu) B </option>
                                    <option value="2" <?php if($tmb_diterimadi=='2'){echo "selected";}?> >2 (Dua) </option>
                                    <option value="3"<?php if($tmb_diterimadi=='3'){echo "selected";}?>>3 (Tiga) </option>
                                    <option value="4"<?php if($tmb_diterimadi=='4'){echo "selected";}?>>4 (Empat)</option>
                                    <option value="5"<?php if($tmb_diterimadi=='5'){echo "selected";}?>>5 (Lima) </option>
                                    <option value="6"<?php if($tmb_diterimadi=='6'){echo "selected";}?>>6 (Enam) </option>
                                    <option value="7"<?php if($tmb_diterimadi=='7'){echo "selected";}?>>7 (Tujuh) </option>
                                    <option value="8"<?php if($tmb_diterimadi=='8'){echo "selected";}?>>8 (Delapan)  </option>
                                    <option value="9"<?php if($tmb_diterimadi=='9'){echo "selected";}?>>9 (Sembilan) </option>
                                    <option value="10"<?php if($tmb_diterimadi=='10'){echo "selected";}?>>10 (Sepuluh) </option>
                                    <option value="11"<?php if($tmb_diterimadi=='11'){echo "selected";}?>>11 (Sebelas) </option>
                                    <option value="12"<?php if($tmb_diterimadi=='12'){echo "selected";}?>>12 (Duabelas)</option>
                                </select>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                
                
                <div class="col-md-12 text-center"><hr>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-lg btn-danger" href="javascript:history.back()"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Kembali</a>
                            <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Simpan</button>
                        </div>
                    </div>
                </div>
                                 
            </form>        
            </div>
        </div>
    </div>
</div>
<script>
var $kelas = $('#tmb_kelas'), $sekolah = $('#tmb_skl_asl'); $alamat=$('#tmb_alm_skl');
$kelas.change(function () {
    if (($kelas.val() == '-1')||($kelas.val() == '')) {
        $sekolah.attr('disabled', 'disabled').val('');
        $alamat.attr('disabled', 'disabled').val('');
        $sekolah.removeAttr('required');
        $alamat.removeAttr('required');
    } else {
        $sekolah.removeAttr('disabled');
        $alamat.removeAttr('disabled');
        $sekolah.attr("required", "true");
        $alamat.attr("required", "true");
    }
}).trigger('change');    
       
    
    $('[data-toggle="tooltip"]').tooltip({});
 var filename = "";
    function randomString(length, chars) {
        var result = '';
        for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
        return result;
    }
    $('#file_upload').bind('change', function() {
        if ( window.FileReader && window.File && window.FileList && window.Blob )
        {
            if(this.files[0].type == "image/jpeg" || this.files[0].type == "image/png" || this.files[0].type == "application/pdf" || this.files[0].type == "image/gif"){
                if(this.files[0].size > 10485760){
                    alert("Ukuran file yang anda pilih terlalu besar.\n File dengan ukuran terlalu besar tidak akan disimpan pada sistem.");
                }
            }
            else{
                alert(this.files[0].type+"Tipe file yang anda masukkan tidak sesuai.\n File dengan tipe yang tidak sesuai spesifikasi tidak akan disimpan pada sistem.");
            }
        }
    });
    

$(document).ready(function(){
			$('#angka1').maskMoney();
			$('#angka2').maskMoney({prefix:'US$'});
			$('#tmb_peng_ayah').maskMoney({ prefix:'Rp. ',thousands:'.', decimal:',', precision:0});
                        $('#tmb_peng_ibu').maskMoney({ prefix:'Rp. ',thousands:'.', decimal:',', precision:0});
			$('#angka4').maskMoney();
		});


function fileSelectSetup(){
        $('input[type=file]').bootstrapFileInput();
        
    }
    fileSelectSetup();
 
 function resultSetup(){
        $('#remove-previewfoto').click(function(){
            $.ajax({ 
                url: "<?php echo site_url('VerPendaftaran/delete_scan/'.$tmb_id); ?>",
                type: "POST"
            });
            
            document.getElementById('file-select-divfoto').innerHTML = '<input type="file" class="" id="file_upload" name="tmb_foto" > <p class="help-block"><i>Format: JPG, JPEG, PNG, GIF, PDF <br>Max file size: 10 MB.</i></p>';
            
        });
        
        $('#remove-previewijasah').click(function(){
            
            document.getElementById('file-select-divijasah').innerHTML = '<input type="file" class="" id="file_upload" name="tmb_kk" > <p class="help-block"><i>Format: JPG, JPEG, PNG, GIF, PDF <br>Max file size: 10 MB.</i></p>';
            
        });
        
        $('#remove-previewakte').click(function(){
            
            document.getElementById('file-select-divakte').innerHTML = '<input type="file" class="" id="file_upload" name="tmb_akte" > <p class="help-block"><i>Format: JPG, JPEG, PNG, GIF, PDF <br>Max file size: 10 MB.</i></p>';
           
        });
        
        $('#remove-previewrapor').click(function(){
            
            document.getElementById('file-select-divrapor').innerHTML = '<input type="file" class="" id="file_upload" name="tmb_rapor" > <p class="help-block"><i>Format: JPG, JPEG, PNG, GIF, PDF <br>Max file size: 10 MB.</i></p>';
            
        });
        
    }
    resultSetup();
    
</script>