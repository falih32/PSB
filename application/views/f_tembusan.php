<?php
	if($mode == 'edit'){
		$id = $dataUnit->tmb_id;
		$tmb_nama = $dataUnit->tmb_nama;
                
			}
	else{
		
		$tmb_nama = "";
			}
?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php if($mode == 'edit'){echo base_url()."Tembusan/proses_edit_tembusan";}else{echo base_url()."Tembusan/proses_tambah_tembusan";}?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            <?php if($mode == 'edit'){ ?> <input type="hidden" name="id" value="<?php echo $id; ?>"><?php }?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tmb_nama" class="col-sm-2 control-label text-left">Bagian</label>
                        <div class="col-sm-10">
	                        <input type="text" class="form-control" id="tmb_nama" name="tmb_nama" placeholder="Bagian" value="<?php echo $tmb_nama; ?>" required>
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