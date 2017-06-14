<?php
    if($mode == 'edit'){
        $tmb_id=$data->tmb_id;
        $tmb_no_daftar=$data->tmb_no_daftar;
        $tmb_nama=$data->tmb_nama;
        $tmb_nisn=$data->tmb_nisn;
        $tmb_nisa=$data->tmb_nisa;
        $tmb_tempatL=$data->tmb_tempatL;
        $tmb_ttl=$data->tmb_ttl;
        $tmb_sdrk=$data->tmb_sdrk;
        $tmb_sdrt=$data->tmb_sdrt;
        $tmb_anakke=$data->tmb_anakke;
        $tmb_stsdkel=$data->tmb_stsdkel;
        $tmb_alamat=$data->tmb_alamat;
        $tmb_kec=$data->tmb_kec;
        $tmb_kota=$data->tmb_kota;
        $tmb_telp=$data->tmb_telp;
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
        $tmb_wali=$data->tmb_wali;
        $tmb_alamat_wali=$data->tmb_alamat_wali;
        $tmb_kec_wali=$data->tmb_kec_wali;
        $tmb_kota_wali=$data->tmb_kota_wali;
        $tmb_telp_wali=$data->tmb_telp_wali;
        $tmb_skl_asl=$data->tmb_skl_asl;
        $tmb_alm_skl=$data->tmb_alm_skl;
        $tmb_kelas=$data->tmb_kelas;
        $tmb_foto=$data->tmb_foto;
        $tmb_akte=$data->tmb_akte;
        $tmb_kk=$data->tmb_kk;
        $tmb_rapor=$data->tmb_rapor;
			}
	else{
        $tmb_id='';    
        $tmb_no_daftar="";
        $tmb_nama="";
        $tmb_nisn="";
        $tmb_nisa="";
        $tmb_tempatL="";
        $tmb_ttl="";
        $tmb_sdrk="";
        $tmb_sdrt="";
        $tmb_anakke="";
        $tmb_stsdkel="";
        $tmb_alamat="";
        $tmb_kec="";
        $tmb_kota="";
        $tmb_telp="";
        $tmb_ayah="";
        $tmb_pnd_ayah="";
        $tmb_pek_ayah="";
        $tmb_agm_ayah="";
        $tmb_peng_ayah="";
        $tmb_alamat_ortu="";
        $tmb_kec_ortu="";
        $tmb_kota_ortu="";
        $tmb_telp_ortu="";
        $tmb_ibu="";
        $tmb_pnd_ibu="";
        $tmb_pek_ibu="";
        $tmb_agm_ibu="";
        $tmb_peng_ibu="";
        $tmb_wali="";
        $tmb_alamat_wali="";
        $tmb_kec_wali="";
        $tmb_kota_wali="";
        $tmb_telp_wali="";
        $tmb_skl_asl="";
        $tmb_alm_skl="";
        $tmb_kelas="";
        $tmb_foto="";
        $tmb_akte="";
        $tmb_kk="";
        $tmb_rapor="";
        
        
        }
?>

<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><img src="<?php echo base_url();?>assets/css/images/icon.png" style="height:50px; margin-top:0px;"> <?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php if($mode == 'edit'){echo base_url()."VerPendaftaran/proses_edit_siswa";}else {echo base_url()."VerPendaftaran/proses_daftar";}?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="" class="col-sm-6 pull-left">A. CALON SISWA</label>    
                 </div> 
                    
                    <?php if($mode == 'edit'){ ?>
                    
                    <input type="hidden" class="form-control" id="tmb_id" name="tmb_id" value="<?php echo $tmb_id; ?>" >
                    <div class="form-group">
                        <label for="tmb_no_daftar" class="col-sm-4 control-label text-left">Nomor Pendaftaran</label>
                        <div class="col-sm-8"> 
                            <input type="text" class="form-control" id="tmb_no_daftar" name="tmb_no_daftar" value="<?php echo $tmb_no_daftar; ?>" required readonly>
                        </div>
                    </div>
                   <?php } ?>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nama Lengkap</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_nama" name="tmb_nama" placeholder="Nama Calon Siswa" value="<?php echo $tmb_nama; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                 
                <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nomor Induk Nasional</label>
                        <div class="col-sm-6">
	                        <input type="text" class="form-control" id="tmb_nisn" name="tmb_nisn" placeholder="Nomor Induk Siswa Nasional" value="<?php echo $tmb_nisn; ?>" pattern='[0-9]*' >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="tmb_nama" class="col-sm-4 control-label text-left">Nomor Induk Sekolah Asal</label>
                        <div class="col-sm-6">
	                        <input type="text" class="form-control" id="tmb_nisa" name="tmb_nisa" placeholder="Nomor Induk Sekolah Asal" value="<?php echo $tmb_nisa;?>" pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_ttl" class="col-sm-4 control-label text-left">Tempat dan Tanggal Lahir</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_tempatL" name="tmb_tempatL" placeholder="Tempat Lahir" value="<?php echo $tmb_tempatL; ?>" >
                            <div class="help-block with-errors"></div>
                        </div>
   
                        <div class="col-sm-4">
                            <input  value ="<?php echo $tmb_ttl; ?>" type="text" class="form-control tgl1" id="tmb_ttl" name="tmb_ttl" placeholder="Tanggal Lahir" data-error="periksa kembali tanggal lahir anda" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="tmb_jumS" class="col-sm-4 control-label text-left">Jumlah Saudara</label>
                        <label for="tmb_jumSK" class="col-sm-2 control-label text-left">Kandung</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tmb_sdrk" name="tmb_sdrk" placeholder="" value="<?php echo $tmb_sdrk; ?>" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_jumST" class="col-sm-2 control-label text-left">Tiri</label>
                        <div class="col-sm-2">
	                        <input type="text" class="form-control" id="tmb_sdrt" name="tmb_sdrt" placeholder="" value="<?php echo $tmb_sdrt; ?>" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_anakke" class="col-sm-4 control-label text-left">Anak Ke-</label>
                        <div class="col-sm-2">
	                        <input type="text" class="form-control" id="tmb_anakke" name="tmb_anakke" placeholder="" value="<?php echo $tmb_anakke; ?>" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_stsdkel" class="col-sm-3 control-label text-left">Status dalam keluarga</label>
                        <div class="col-sm-3">
	                        <select class="form-control" id="tmb_stsdkel" name="tmb_stsdkel"  required >
                                    
                                    <option value="">Select ...</option>
                                    <option value="1"<?php if($tmb_stsdkel==1){echo "selected";}?> >Kandung </option>
                                    <option value="2"<?php if($tmb_stsdkel==2){echo "selected";}?>>Tiri </option>
                                    <option value="3"<?php if($tmb_stsdkel==3){echo "selected";}?>>Angkat</option>                               
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_alamat" name="tmb_alamat" placeholder="Jalan Desa Kecamatan Kodepos Calon Siswa Tinggal" value="<?php echo $tmb_alamat; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kecamatan</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kec" name="tmb_kec" placeholder="Kecamatan" value="<?php echo $tmb_kec; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kota/Kab.</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kota" name="tmb_kota" placeholder="Kota / Kabupaten" value="<?php echo $tmb_kota; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Telpon</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_telp" name="tmb_telp" placeholder="Nomor Telpon Calon Siswa" value="<?php echo $tmb_telp; ?>" pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="tmb_kelas" class="col-sm-4 control-label text-left">Dari Kelas</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="tmb_kelas" name="tmb_kelas" required >
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
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Nama Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tmb_skl_asl" name="tmb_skl_asl" placeholder="Nama Sekolah Asal" value="<?php echo $tmb_skl_asl; ?>"  disabled required >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tmb_alm_skl" name="tmb_alm_skl" placeholder="Alamat Lengkap Sekolah Asal" value="<?php echo $tmb_alm_skl; ?>" disabled required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Pass Foto</label>
                        <div class="col-sm-8" id="file-select-divfoto">
                            <img src='<?php echo base_url().'uploads/files/'.$tmb_foto; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_foto!=NULL) { echo $tmb_foto;?>
                            <input type="hidden" class="" id="file_upload" name="tmb_foto" value="<?php echo $tmb_foto; ?>">
                            
                            <?php } else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-previewfoto'><?php if ($tmb_foto!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Pass Foto</label>
                        <div class="col-sm-8" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="tmb_foto" >
                            <p class="help-block"><i>pas foto hitam putih 3 x 4(berbaju putih, berdasi dan berpeci hitam).<br>Format: JPG, JPEG, PNG, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Kartu Keluarga</label>
                        <div class="col-sm-8" id="file-select-divijasah">
                            <img src='<?php echo base_url().'uploads/files/'.$tmb_kk; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_kk!=NULL) { echo $tmb_kk;?>
                            <input type="hidden" class="" id="file_upload" name="tmb_kk" value="<?php echo $tmb_kk; ?>">
                            
                           <?php } else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-previewijasah'><?php if ($tmb_kk!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Kartu Keluarga</label>
                        <div class="col-sm-8" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="tmb_kk" >
                            <p class="help-block"><i>Format: JPG, JPEG, PNG, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
   
                    <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-4 control-label text-left">Akte Lahir</label>
                        <div class="col-sm-8" id="file-select-divakte">
                            <img src='<?php echo base_url().'uploads/files/'.$tmb_akte; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_akte!=NULL) { echo $tmb_akte;?>
                            <input type="hidden" class="" id="file_upload" name="tmb_akte" value="<?php echo $tmb_akte; ?>" >
                            
                            <?php } else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-previewakte'><?php if ($tmb_akte!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
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
                        <div class="col-sm-8" id="file-select-divrapor">
                            <img src='<?php echo base_url().'uploads/files/'.$tmb_rapor; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($tmb_rapor!=NULL) { echo $tmb_rapor;?>
                            <input type="hidden" class="" id="file_upload" name="tmb_rapor" value="<?php echo $tmb_rapor; ?>">
                            
                            <?php } else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-previewrapor'><?php if ($tmb_rapor!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
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
                    <label for="" class="col-sm-6  text-left">B. ORANG TUA</label>    
                 </div>
                     
                    <div class="form-group">
                        <label for="" class="col-sm-5 control-label text-center">Ayah</label>
                        <label for="" class="col-sm-5 control-label text-center">Ibu</label>
                    </div> 
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Nama</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_ayah" name="tmb_ayah" placeholder="Nama Lengkap Ayah" value="<?php echo $tmb_ayah; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_ibu" name="tmb_ibu" placeholder="Nama Lengkap Ibu" value="<?php echo $tmb_ibu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>              
                    </div>
                     
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Pendidikan</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pnd_ayah" name="tmb_pnd_ayah" placeholder="Pendidikan Terakhir Ayah" value="<?php echo $tmb_pnd_ayah; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pnd_ibu" name="tmb_pnd_ibu" placeholder="Pendidikan Terakhir Ibu" value="<?php echo $tmb_pnd_ibu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Pekerjaan</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pek_ayah" name="tmb_pek_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $tmb_pek_ayah; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_pek_ibu" name="tmb_pek_ibu" placeholder="Pekerjaan Ibu" value="<?php echo $tmb_pek_ibu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Agama</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_agm_ayah" name="tmb_agm_ayah" placeholder="Agama Ayah" value="<?php echo $tmb_agm_ayah; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_agm_ibu" name="tmb_agm_ibu" placeholder="Agama Ibu" value="<?php echo $tmb_agm_ibu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label text-left">Penghasilan Perbulan</label>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_peng_ayah" name="tmb_peng_ayah" placeholder="Penghasilan Ayah" value="<?php echo $tmb_peng_ayah; ?>" required >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-5">
	                        <input type="text" class="form-control" id="tmb_peng_ibu" name="tmb_peng_ibu" placeholder="Penghasilan Ibu" value="<?php echo $tmb_peng_ibu; ?>" required >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>  
                     
                      <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_alamat_ortu" name="tmb_alamat_ortu" placeholder="Nama Jalan, Desa, Kodepos Orang Tua Tinggal" value="<?php echo $tmb_alamat_ortu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kecamatan</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kec_ortu" name="tmb_kec_ortu" placeholder="Kecamatan" value="<?php echo $tmb_kec_ortu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kota/Kab.</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kota_ortu" name="tmb_kota_ortu" placeholder="Kota / Kabupaten" value="<?php echo $tmb_kota_ortu; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Telpon</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_telp_ortu" name="tmb_telp_ortu" placeholder="Nomor Telpon Orang Tua yang bisa dihubungi" value="<?php echo $tmb_telp_ortu; ?>" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                 <div class="form-group">
                    <label for="" class="col-sm-2 control-label text-left">C. WALI</label>    
                 </div>   
                    <div class="form-group">
                        <label for="tmb_nama_wali" class="col-sm-4 control-label text-left">Nama Wali</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_wali" name="tmb_wali" placeholder="Nama Lengkap Wali" value="<?php echo $tmb_wali; ?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Alamat</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_alamat_wali" name="tmb_alamat_wali" placeholder="Nama Jalan, Desa, Kodepos Wali Tinggal" value="<?php echo $tmb_alamat_wali; ?>" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kecamatan</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kec_wali" name="tmb_kec_wali" placeholder="Kecamatan" value="<?php echo $tmb_kec_wali; ?>" >
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="tmb_alamat" class="col-sm-2 control-label text-left">Kota/Kab.</label>
                        <div class="col-sm-4">
	                        <input type="text" class="form-control" id="tmb_kota_wali" name="tmb_kota_wali" placeholder="Kota / Kabupaten" value="<?php echo $tmb_kota_wali; ?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="tmb_alamat" class="col-sm-4 control-label text-left">Telpon</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="tmb_telp_wali" name="tmb_telp_wali" placeholder="Nomor Telpon Wali yang bisa dihubungi" value="<?php echo $tmb_telp_wali; ?>" pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                                         
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