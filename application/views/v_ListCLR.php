<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-primary">
            
           
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
                        <th>Status</th>
                        
                        <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($listdata as $list) { ?>
                    <tr>    
                        <td><?php echo $list->tmb_no_daftar ?></td>
                        <td><?php echo $list->tmb_nama ?></td>
                        <td><?php echo $list->tmb_alamat ?></td>
                        <td><?php echo $list->tmb_kec ?></td>
                        <td><?php echo $list->tmb_kota ?></td>
                        <td><?php echo $list->tmb_skl_asl ?></td>
                        <td><?php echo $list->tmb_alm_skl ?></td>
                        
                        <td><?php if($list->tmb_status==0){
                            echo "Belum Registrasi dan Verifikasi Pendaftaran";
                        }else if($list->tmb_status==1){
                            echo "Belum Tes Masuk";
                        }else if($list->tmb_status==2){
                            echo "Belum Daftar Ulang";
                        }else if($list->tmb_status==3){
                            echo "Selamat Anda Diterima dikelas".$list->tmb_diterimadi;
                        } ?>
                        </td>
                        
                        <td>
                            <div class='form-group'>
                                <?php if($list->tmb_status==0){?>
                                <a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Cetak Lembar Registrasi' href=<?php echo base_url()."front/cetakCLR/".$list->tmb_id ;?>><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Lembar Registrasi</a>
                                <?php } ?>
                                <?php if($list->tmb_status==1){?>
                                <a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Cetak Kartu Tes' href=<?php echo base_url()."".$list->tmb_id ;?>><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Kartu Tes</a>
                                <?php } ?>
                            </div>
                            
                        </td>
                    </tr>    
                   <?php } ?>
                </tbody>
                
                
            </table>
        </div>
    </div>
</div>
