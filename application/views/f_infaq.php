<?php
	if($mode == 'edit'){
		$inf_id = $dataUnit->inf_id;
		$inf_blangko = $dataUnit->inf_blangko;
                $inf_daftar=$dataUnit->inf_daftar;
                $inf_tahun=$dataUnit->inf_tahun;
                
			}
	else{
		
		$inf_blangko = "";
                $inf_daftar="";
                $inf_tahun="";
			}
?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php if($mode == 'edit'){echo base_url()."Infaq/proses_edit_infaq";}else{echo base_url()."Infaq/proses_tambah_infaq";}?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            <?php if($mode == 'edit'){ ?> <input type="hidden" name="inf_id" value="<?php echo $inf_id; ?>"><?php }?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label text-left">Infaq Blangko</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="inf_blangko" name="inf_blangko" placeholder="Infaq Blangko" value="<?php echo $inf_blangko; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label text-left">Infaq Daftar Ulang</label>
                        <div class="col-sm-8">
	                        <input type="text" class="form-control" id="inf_daftar" name="inf_daftar" placeholder="Infaq Daftar Ulang" value="<?php echo $inf_daftar; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="tmb_ttl" class="col-sm-4 control-label text-left">Tahun</label>
   
                        <div class="col-sm-8">
                            <input  value ="<?php echo $inf_tahun; ?>" type="text" class="form-control tgl1" id="inf_tahun" name="inf_tahun" placeholder="Tahun Infaq" data-error="periksa kembali Tahun" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required>
                            <div class="help-block with-errors"></div>
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
$(document).ready(function(){
			$('#angka1').maskMoney();
			$('#angka2').maskMoney({prefix:'US$'});
			$('#inf_daftar').maskMoney({ prefix:'Rp. ',thousands:'.', decimal:',', precision:0});
                        $('#inf_blangko').maskMoney({ prefix:'Rp. ',thousands:'.', decimal:',', precision:0});
			$('#angka4').maskMoney();
		});    
</script>