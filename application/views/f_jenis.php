<?php
    if($mode == 'edit'){
        $id = $dataJenis->jenis_id;
        $jenis_nama= $dataJenis-> jenis_nama;
        $jenis_color = $dataJenis-> jenis_color;
    }
    else{	
        $id= "";
        $jenis_nama = "";
        $jenis_color="";
    }
?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php if($mode == 'edit'){echo base_url()."Jenis/proses_edit_jenis";}else{echo base_url()."Jenis/proses_tambah_jenis";}?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            <?php if($mode == 'edit'){ ?> <input type="hidden" name="id" value="<?php echo $id; ?>"><?php }?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_nama" class="col-sm-4 control-label text-left">Jenis Surat</label>
                        <div class="col-sm-8">
                            
                                <input type="text" class="form-control" id="jenis_nama" name="jenis_nama" placeholder="Jenis Surat" value="<?php echo $jenis_nama; ?>" required>
                          
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_color" class="col-sm-4 control-label text-left">Warna</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="jenis_color" name="jenis_color" placeholder="Pilih warna" value="<?php echo $jenis_color; ?>" required>
                            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">Pilih warna</a>
                            <ul class="dropdown-menu">
                                <li><div id="colorpalette"></div></li>
                            </ul>
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
$('#colorpalette').colorPalette().on('selectColor', function(e) {
    $('#jenis_color').val(e.color);
});
</script>