<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><img src="<?php echo base_url();?>assets/css/images/icon.png" style="height:50px; margin-top:0px;"> <?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php echo base_url()."front/cek";?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label text-left">A. CALON SISWA</label>    
                 </div>   
                    <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nama Lengkap</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_nama" name="tmb_nama" placeholder="Nama Calon Siswa" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                 
                <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nomor Induk Nasional</label>
                        <div class="col-sm-6">
	                        <input type="text" class="form-control" id="tmb_nisn" name="tmb_nisn" placeholder="Nomor Induk Siswa Nasional" value="" pattern='[0-9]*' >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nomor Induk Sekolah Asal</label>
                        <div class="col-sm-6">
	                        <input type="text" class="form-control" id="tmb_nisa" name="tmb_nisa" placeholder="Nomor Induk Sekolah Asal" value="" pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_ttl" class="col-sm-4 control-label text-left">Tempat dan Tanggal Lahir</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_tempatL" name="tmb_tempatL" placeholder="Tempat Lahir" value="" >
                            <div class="help-block with-errors"></div>
                        </div>
   
                        <div class="col-sm-4">
                            <input  value ="" type="text" class="form-control tgl1" id="tmb_ttl" name="tmb_ttl" placeholder="Tanggal Lahir" data-error="periksa kembali tanggal lahir anda" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="tmb_jumS" class="col-sm-4 control-label text-left">Jumlah Saudara</label>
                        <label for="tmb_jumSK" class="col-sm-2 control-label text-left">Kandung</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tmb_sdrk" name="tmb_sdrk" placeholder="" value="" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_jumST" class="col-sm-2 control-label text-left">Tiri</label>
                        <div class="col-sm-2">
	                        <input type="text" class="form-control" id="tmb_sdrt" name="tmb_sdrt" placeholder="" value="" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_anakke" class="col-sm-4 control-label text-left">Anak Ke-</label>
                        <div class="col-sm-2">
	                        <input type="text" class="form-control" id="tmb_anakke" name="tmb_anakke" placeholder="" value="" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_stsdkel" class="col-sm-3 control-label text-left">Status dalam keluarga</label>
                        <div class="col-sm-3">
	                        <select class="form-control" id="tmb_stsdkel" name="tmb_stsdkel"  required >
                                    
                                    <option value="">Select ...</option>
                                    <option value="1">Kandung </option>
                                    <option value="2">Tiri </option>
                                    <option value="3">Angkat</option>                               
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_alamat" name="tmb_alamat" placeholder="Jalan Desa Kecamatan Kodepos Calon Siswa Tinggal" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kecamatan</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kec" name="tmb_kec" placeholder="Kecamatan" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kota/Kab.</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kota" name="tmb_kota" placeholder="Kota / Kabupaten" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Telpon</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_telp" name="tmb_telp" placeholder="Nomor Telpon Calon Siswa" value="" pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="tmb_kelas" class="col-sm-4 control-label text-left">Dari Kelas</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="tmb_kelas" name="tmb_kelas" required >
                                    <option value="">Select ...</option>
                                    <option value="-1">Belum Sekolah/PAUD</option>
                                    <option value="0">TK/RA</option>
                                    <option value="1">1 (Satu) MI/SD</option>
                                    <option value="2">2 (Dua) MI/SD</option>
                                    <option value="3">3 (Tiga) MI/SD</option>
                                    <option value="4">4 (Empat) MI/SD</option>
                                    <option value="5">5 (Lima) MI/SD</option>
                                    <option value="6">6 (Enam) Lulus MI/SD </option>
                                    <option value="7">1 (Satu) MTs/SMP</option>
                                    <option value="8">2 (Dua) MTs/SMP</option>
                                    <option value="9">3 (Tiga) MTs/SMP</option>
                                    <option value="10">1 (Satu) MA/SMA/SMK</option>
                                    <option value="11">2 (Dua) MA/SMA/SMK</option>
                                    <option value="12">3 (Tiga) MA/SMA/SMK</option>
                                </select>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Nama Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tmb_skl_asl" name="tmb_skl_asl" placeholder="Nama Sekolah Asal" value=""  disabled required >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tmb_alm_skl" name="tmb_alm_skl" placeholder="Alamat Lengkap Sekolah Asal" value="" disabled required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Pass Foto</label>
                        <div class="col-sm-8" id="file-select-div">
                            <img src='<?php echo $base.'uploads/foto/'.$tmb_foto; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_foto!=NULL) { echo $tmb_foto;} else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-preview'><?php if ($tmb_foto!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Pass Foto</label>
                        <div class="col-sm-8" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="tmb_foto" >
                            <p class="help-block"><i>pas foto hitam putih 3 x 4(berbaju putih, berdasi dan berpeci hitam).</i><br><i>Format: JPG, JPEG, PNG, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Kartu Keluarga</label>
                        <div class="col-sm-8" id="file-select-div">
                            <img src='<?php echo $base.'uploads/foto/'.$tmb_kk; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_kk!=NULL) { echo $tmb_kk;} else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-preview'><?php if ($tmb_kk!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Kartu Keluarga</label>
                        <div class="col-sm-8" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="tmb_kk" >
                            <p class="help-block">Format: JPG, JPEG, PNG, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
   
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Akte Lahir</label>
                        <div class="col-sm-8" id="file-select-div">
                            <img src='<?php echo $base.'uploads/foto/'.$tmb_akte; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_akte!=NULL) { echo $tmb_akte;} else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-preview'><?php if ($tmb_akte!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Akte Lahir</label>
                        <div class="col-sm-8" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="tmb_akte" >
                            <p class="help-block"><i>Format: JPG, JPEG, PNG, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Rapor/Ijasah Terakhir</label>
                        <div class="col-sm-8" id="file-select-div">
                            <img src='<?php echo $base.'uploads/foto/'.$tmb_rapor; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_rapor!=NULL) { echo $tmb_rapor;} else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-preview'><?php if ($tmb_rapor!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Rapor/Ijasah Terakhir</label>
                        <div class="col-sm-8" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="tmb_rapor" >
                            <p class="help-block"><i>Format: JPG, JPEG, PNG, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
               
               
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label text-left">B. ORANG TUA</label>    
                 </div>
                     
                    <div class="form-group">
                        <label for="" class="col-sm-5 control-label text-center">Ayah</label>
                        <label for="" class="col-sm-5 control-label text-center">Ibu</label>
                    </div> 
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Nama</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_ayah" name="tmb_ayah" placeholder="Nama Lengkap Ayah" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_ibu" name="tmb_ibu" placeholder="Nama Lengkap Ibu" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>              
                    </div>
                     
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Pendidikan</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pnd_ayah" name="tmb_pnd_ayah" placeholder="Pendidikan Terakhir Ayah" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pnd_ibu" name="tmb_pnd_ibu" placeholder="Pendidikan Terakhir Ibu" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Pekerjaan</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pek_ayah" name="tmb_pek_ayah" placeholder="Pekerjaan Ayah" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pek_ibu" name="tmb_pek_ibu" placeholder="Pekerjaan Ibu" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Agama</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_agm_ayah" name="tmb_agm_ayah" placeholder="Agama Ayah" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_agm_ibu" name="tmb_agm_ibu" placeholder="Agama Ibu" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Penghasilan Perbulan</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_peng_ayah" name="tmb_peng_ayah" placeholder="Penghasilan Ayah" value="" required >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_peng_ibu" name="tmb_peng_ibu" placeholder="Penghasilan Ibu" value="" required >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>  
                     
                      <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_alamat_ortu" name="tmb_alamat_ortu" placeholder="Nama Jalan, Desa, Kodepos Orang Tua Tinggal" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kecamatan</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kec_ortu" name="tmb_kec_ortu" placeholder="Kecamatan" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kota/Kab.</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kota_ortu" name="tmb_kota_ortu" placeholder="Kota / Kabupaten" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Telpon</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_telp_ortu" name="tmb_telp_ortu" placeholder="Nomor Telpon Orang Tua yang bisa dihubungi" value="" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                 <div class="form-group">
                    <label for="" class="col-sm-2 control-label text-left">C. WALI</label>    
                 </div>   
                    <div class="form-group">
                        <label for="tmb_nama_wali" class="col-sm-4 control-label text-left">Nama Wali</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_wali" name="tmb_wali" placeholder="Nama Lengkap Wali" value="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_alamat_wali" name="tmb_alamat_wali" placeholder="Nama Jalan, Desa, Kodepos Wali Tinggal" value="" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kecamatan</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kec_wali" name="tmb_kec_wali" placeholder="Kecamatan" value="" >
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kota/Kab.</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kota_wali" name="tmb_kota_wali" placeholder="Kota / Kabupaten" value="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Telpon</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_telp_wali" name="tmb_telp_wali" placeholder="Nomor Telpon Wali yang bisa dihubungi" value="" pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                 
                    <div class="g-recaptcha" data-sitekey="6Le7oyEUAAAAAI0IdY4ugkZcoe13u2Y5uYj090K5"></div>   
<!--                     6LdGVxQUAAAAAOCy7ShTfVAzbabiDNmz-SWbGS8B                  -->
                </div>
                
                
                <div class="col-md-12 text-center"><hr>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-lg btn-danger" href="javascript:history.back()"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Kembali</a>
                            <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Daftar</button>
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



    
</script>