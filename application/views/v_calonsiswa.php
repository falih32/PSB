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
        $tmb_kelompok=$data->tmb_kelompok;
        $tmb_status=$data->tmb_status;
?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3>Detail Calon Santri</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                    	<tr>
                        	<th>Nomor Pendaftaran</th>
                                <td colspan="2" ><?php echo $tmb_no_daftar ?></td>
                        </tr>
                    	<tr>
                        	<th>Nama Lengkap</th>
                        	<td colspan="2"><?php echo $tmb_nama; ?></td>
                        </tr>
                    	<tr>
                        	<th>NISN</th>
                        	<td colspan="2"><?php echo $tmb_nisn; ?></td>
                        </tr>
                       
                        <tr>
                        	<th>Tempat & Tanggal Lahir </th>
                        	<td colspan="2"><?php echo $tmb_tempatL." ".date("d-m-Y", strtotime($tmb_ttl)); ?></td>
                        </tr>
                        <tr>
                        	<th>Jumlah Saudara</th>
                        	<td><?php echo "Kandung : ".$tmb_sdrk; ?></td>
                                <td><?php echo "Tiri : ".$tmb_sdrt; ?></td>
                        </tr>
                        <tr>
                        	<th>Anak Ke</th>
                                <td colspan="2"><?php echo $tmb_anakke; ?></td>
                        </tr>
                        <tr>
                        	<th>Status dalam keluarga</th>
                                <td colspan="2"><?php if($tmb_stsdkel==1){ echo "Kandung";}else if($tmb_stsdkel==2){ echo "Tiri";} else{ echo "Angkat";} ?></td>
                        </tr>
                        
                         <tr>
                        	<th>Alamat</th>
                                <td colspan="2"><?php echo $tmb_alamat." Kecamatan ".$tmb_kec." Kabupaten/Kota ".$tmb_kota; ?></td>
                        </tr>
                        <tr>
                        	<th>Hobi</th>
                        	<td colspan="2"><?php echo $tmb_hobi; ?></td>
                        </tr>
                        <tr>
                        	<th>Cita-Cita</th>
                        	<td colspan="2"><?php echo $tmb_cita; ?></td>
                        </tr>
                        <tr>
                        	<th>Transport</th>
                        	<td colspan="2"><?php 
                                   if($tmb_transport == 0){
                                       echo "Jalan Kaki";
                                   }else if($tmb_transport == 1){
                                       echo "Sepeda";
                                   }else if($tmb_transport ==2){
                                       echo "Motor";
                                   }else if($tmb_transport ==3){
                                       echo "Mobil Pribadi";
                                   }else if($tmb_kelas ==4){
                                       echo "Antar Jemput";
                                   }else if($tmb_kelas ==5){
                                       echo "Angkutan Umum";
                                   }
                                ?>
                                </td>
                        </tr>
                        
                        <tr>
                        	<th>Jarak</th>
                        	<td colspan="2"><?php 
                                    if($tmb_jarak == 0){
                                         echo "0-1 KM";
                                     }else if($tmb_jarak == 1){
                                         echo "1-3 KM";
                                     }else if($tmb_jarak ==2){
                                         echo "3-5 KM";
                                     }else if($tmb_jarak ==3){
                                         echo "5-10 KM";
                                     }else if($tmb_jarak ==4){
                                         echo "Lebih dari 10 KM";
                                     }
                                ?>
                                </td>
                        </tr>
                        
                        <tr>
                        	<th>Foto</th>
                        	<td>
                            	<?php if ($tmb_foto == ""){echo "<i>Tidak ada file yang diunggah</i>";} else {?>
                                <a class="btn btn-default" target="_blank" href="<?php echo base_url()."uploads/files/".$tmb_foto; ?>"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Buka file</a>
                                <?php } ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<th>Akte</th>
                        	<td>
                            	<?php if ($tmb_akte == ""){echo "<i>Tidak ada file yang diunggah</i>";} else {?>
                                <a class="btn btn-default" target="_blank" href="<?php echo base_url()."uploads/files/".$tmb_akte; ?>"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Buka file</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                        	<th>Kartu Keluarga</th>
                        	<td>
                            	<?php if ($tmb_kk == ""){echo "<i>Tidak ada file yang diunggah</i>";} else {?>
                                <a class="btn btn-default" target="_blank" href="<?php echo base_url()."uploads/files/".$tmb_kk; ?>"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Buka file</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                        	<th>Rapor / Ijasah</th>
                        	<td>
                            	<?php if ($tmb_rapor == ""){echo "<i>Tidak ada file yang diunggah</i>";} else {?>
                                <a class="btn btn-default" target="_blank" href="<?php echo base_url()."uploads/files/".$tmb_rapor; ?>"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Buka file</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                        	<th>Nama Ayah   </th>
                                <td><?php echo $tmb_ayah;?></td>
                                <td>Nama Ibu : <?php echo $tmb_ibu; ?></td>
                        </tr>
                        <tr>
                        	<th>Pendidikan Terakhir Ayah </th>
                                <td><?php echo $tmb_pnd_ayah;?> </td>
                                <td>Pendidikan Terakhir Ibu : <?php echo $tmb_pnd_ibu; ?></td>
                        </tr>
                        <tr>
                        	<th>Pekerjaan Ayah </th>
                                <td><?php echo $tmb_pek_ayah;?></td>
                                <td>Pekerjaan Ibu : <?php echo $tmb_pek_ibu ?></td>
                        </tr>
                        <tr>
                        	<th>Agama Ayah </th>
                                <td><?php echo $tmb_agm_ayah ;?> </td>
                                <td>Agama Ibu : <?php echo $tmb_agm_ibu; ?></td>
                        </tr>
                        <tr>
                        	<th>Penghasilan Ayah</th>
                                <td><?php echo $tmb_peng_ayah;?> </td>
                                <td >Penghasilan Ibu : <?php echo $tmb_peng_ibu ?></td>
                        </tr>
                        <tr>
                        	<th>Alamat Orangtua</th>
                                <td colspan="2" ><?php echo $tmb_alamat_ortu." Kecamatan ".$tmb_kec_ortu." Kabupaten/Kota ".$tmb_kota_ortu; ?></td>
                        </tr>
                        <tr>
                        	<th>No. Telpon Orang Tua</th>
                                <td colspan="2" ><?php echo $tmb_telp_ortu; ?></td>
                        </tr>
                        
                        <tr>
                        	<th>Nama Sekolah Asal</th>
                                <td><?php echo $tmb_skl_asl; ?></td>
                        </tr>
                        <tr>
                        	<th>Alamat Sekolah Asal</th>
                                <td><?php echo $tmb_alm_skl; ?></td>
                        </tr>
                        
            <?php    
                if($tmb_kelas ==-1){
                    $kelas = "Belum Sekolah / PAUD";
                }else if($tmb_kelas ==0){
                    $kelas = "TK / RA";
                }else if($tmb_kelas ==1){
                    $kelas = "1 (Satu) MI/SD";
                }else if($tmb_kelas ==2){
                    $kelas = "2 (Dua) MI/SD";
                }else if($tmb_kelas ==3){
                    $kelas = "3 (Tiga) MI/SD";
                }else if($tmb_kelas ==4){
                    $kelas = "4 (Empat) MI/SD";
                }else if($tmb_kelas ==5){
                    $kelas = "5 (Lima) MI/SD";
                }else if($tmb_kelas ==6){
                    $kelas = "6 (Enam) Lulus MI/SD ";
                }else if($tmb_kelas ==7){
                    $kelas = "1 (Satu) MTs/SMP ";
                }else if($tmb_kelas ==8){
                    $kelas = "2 (Dua) MTs/SMP ";
                }else if($tmb_kelas ==9){
                    $kelas = "3 (Tiga) MTs/SMP ";
                }else if($tmb_kelas ==10){
                    $kelas = "1 (Satu) MA/SMA/SMK";
                }else if($tmb_kelas ==11){
                    $kelas = "1 (Satu) MA/SMA/SMK";
                }else if($tmb_kelas ==12){
                    $kelas = "2 (Dua) MA/SMA/SMK";
                }else if($tmb_kelas ==13){
                    $kelas = "3 (Tiga) MA/SMA/SMK";
                }  ?>         
                        <tr>
                        	<th>Dari Kelas</th>
                                <td><?php echo $kelas ?></td>
                        </tr>
            <?php if($tmb_status>1){?>            
                         <tr>
                        	<th>Diterima dikelas</th>
                                <td><?php echo $data->tmb_diterimadi; ?></td>
                        </tr>
            <?php } ?>            
            <?php if($tmb_status>0){?>             
                         <tr>
                        	<th>Catatan</th>
                                <td><?php echo $data->tmb_keterangan; ?></td>
                        </tr>
              <?php } ?>        
                        
                    </tbody>
                </table>
                 </div>
                
                </div>
                
                <div class="col-md-12 text-center"><hr>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="...">
                            <form target="_blank" id = "histori_percetakan" method="post" action="<?php //echo site_url('Surat/cetakld/'.$srt_id);?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">                              
                                <a class="btn btn-lg btn-danger" href="javascript:history.back()"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Kembali</a>
                                <?php if($tmb_status==0){?> <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#modalAnggaran" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Verifikasi</button>
                                <?php } ?>
                           </form>
                                
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--------Modal keterangan-------------------------------------------------------------------------------------------------> 
<div class="modal fade" id="modalAnggaran" tabindex="-1" role="dialog" aria-labelledby="InsertNewAnggaran">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" >Catatan Verifikasi</h4>
                                     </div>
                                     <div class="modal-body">
                                       <form id = "anggaran_form" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" id="tmb_kelompok" name="tmb_kelompok" value="<?php echo $tmb_kelompok; ?>" > 
                                        <input type="hidden" class="form-control" id="tmb_ttl" name="tmb_ttl" value="<?php echo $tmb_ttl; ?>" >    
                                        <div class="form-group">
                                             <div class="col-sm-12">
                                                <textarea class="form-control" id="tmb_keterangan" name="tmb_keterangan"></textarea>
                                            </div>
                                         </div>
                                           <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" >Simpan</button>
                                          </div>
                                       </form>
                                     </div>
                                     
                                   </div>
                                 </div>
                               </div> 


<script type="text/javascript">
$(document).ready(function() {
	
	$('[data-toggle="tooltip"]').tooltip({});
	
	var deleteLinks = document.querySelectorAll('#set_status');
	for (var i = 0, length = deleteLinks.length; i < length; i++) {
		deleteLinks[i].addEventListener('click', function(event) {
			event.preventDefault();
		
			var choice = confirm(this.getAttribute('data-confirm'));
		
			if (choice) {
				window.location.href = this.getAttribute('href');
			}
		});
	}
        
        
         $("#anggaran_form").submit(function(e) {               
                e.preventDefault();
                $.ajax({
                    url: "<?php echo site_url('VerPendaftaran/Verifikasi/'.$tmb_id);?>",
                    type: "POST",
                    data: $(this).serialize()
                    
                });
                 
                 <?php if($tmb_kelompok==1){ ?>
                    window.location.href = "<?php echo base_url()."DaftarUlang/kelompok1"?>";
                 <?php }else if($tmb_kelompok==2){ ?>
                    window.location.href = "<?php echo base_url()."DaftarUlang/kelompok2"?>";
                 <?php } if($tmb_kelompok==3){ ?>
                    window.location.href = "<?php echo base_url()."TesMasuk/kelompok3"?>";
                 <?php }else if($tmb_kelompok==4){ ?>
                    window.location.href = "<?php echo base_url()."TesMasuk/kelompok4"?>";
                 <?php }else if($tmb_kelompok==5){ ?>
                    window.location.href = "<?php echo base_url()."TesMasuk/kelompok5"?>"; 
                 <?php }else if($tmb_kelompok==6){ ?>
                    window.location.href = "<?php echo base_url()."TesMasuk/kelompok6"?>"; 
                 <?php }else if($tmb_kelompok==7){ ?>
                    window.location.href = "<?php echo base_url()."TesMasuk/kelompok7"?>";
                 <?php } ?>
              
     });
 
});
</script>