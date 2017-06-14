<div class="container-fluid">
    <div class="row-fluid">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3>Ubah Password</h3>
            </div>
            <div class="panel-body">
            	<form role="form" action="<?=base_URL()?>User/process_change_password" method="post" class="form-horizontal" data-toggle="validator">
                <fieldset>
            	<div class="col-md-6">
                    <input type="hidden" id="usr_id" name="usr_id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $userData->username; ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $userData->Nama; ?></p>
                        </div>
                    </div>
                </div>
            	<div class="col-md-6">
                    <div class="form-group">
                        <label for="old_pass" class=" col-sm-4 control-label">Password Lama</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="old_pass" placeholder="Password lama" name="old_pass" value=""  type="password" autofocus="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_pass" class="col-sm-4 control-label">Password Baru</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="new_pass" placeholder="Password baru" name="new_pass" value=""  type="password"  required data-minlength="5">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_pass" class="col-sm-4 control-label">Password Baru</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="new_pass2" placeholder="Tulis ulang password baru" name="new_pass2" value=""  type="password"  required data-minlength="5" data-match="#new_pass">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center"><hr>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="...">
                        	<a class="btn btn-lg btn-danger" href="javascript:history.back()"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Kembali</a>
                            <button type="reset" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Reset</button>
                            <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Simpan</button>
                        </div>
                    </div>
                </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>