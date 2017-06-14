         <!-- Intro Page / Direct Page -->
    
  <section class="intro-page">
   <div class="cover-container" style="background: url(<?php echo base_url();?>assets/css/images/Menara_Kudus.jpg) no-repeat center center fixed; height: 550px; background-size: 100%">     
      
       <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 intro-panel">
                   <div class="panel-body">
                    <form method="post" action="<?php echo base_url()."front/prosesCLR";?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tmb_nama" class="col-sm-4 control-label text-left">Nama Lengkap</label>
                            <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tmb_nama" name="tmb_nama" placeholder="Nama Calon Siswa" value="" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tmb_nama" class="col-sm-4 control-label text-left">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input  value ="" type="text" class="form-control tgl1" id="tmb_ttl" name="tmb_ttl" placeholder="Tanggal Lahir" data-error="periksa kembali tanggal lahir anda" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12 text-center"><hr>
                            <div class="form-group">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="reset" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reset</button>
                                    <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                   </div>
                    
                </div>
            </div>
        </div>
        </div>   
    </section>

    <div class="section-mini">
    </div>