<?php
    $role = $this->session->userdata('id_role');
	if($mode == 'edit'){
		
		$Nama = $userlist->Nama;
		$username = $userlist->username;
                $Pass = $userlist->Pass;
                $usr_role = $userlist->usr_role;
                $konfirm = "";
       
			}
	else{
		
		$Nama = "";
		$username = "";
                $usr_role = "";
                $Pass ="";
                $konfirm ="";
			}
?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php if($mode == 'edit'){echo base_url()."user/proses_editUser";}else{echo base_url()."user/proses_addUser";}?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                <?php if($mode == 'edit'){ ?>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="usr_role" value="<?php echo $userlist->usr_role; ?>">
                <?php }?>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Nama" class="col-sm-2 control-label text-left">Nama</label>
                        <div class="col-sm-10">
	                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" required data-minlength="3" pattern="^[a-zA-Z\s]*$">
                            <p class="help-block">Minimal 3 karakter, hanya huruf dan spasi</p>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label text-left">Username</label>
                        <div class="col-sm-10">
                        	<?php if($mode == "add"){?>
	                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>" required data-minlength="3" pattern="^[a-zA-Z0-9]*$" data-remote="<?php echo site_url('User/checkUserAjax'); ?>">
                            <p class="help-block">Minimal 3 karakter, hanya huruf dan angka</p>
                            <div class="help-block with-errors"></div>
                            <?php } else {?>
                            <input type="hidden" id="username" name="username" value="<?php echo $username; ?>">
                            <p class="form-control-static"><?php echo $username; ?></p>
                            <?php }?>
                        </div>
                    </div>
                    
                    <?php if($role == 1){ ?>
                    <div class="form-group">
                        <label for="usr_role" class="col-sm-2 control-label text-left">User Level</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="usr_role" name="usr_role">
                            	
                            	<option value="1" <?php if($usr_role == 1){echo "selected";}?>>Admin</option>
                                <option value="2" <?php if($usr_role == 2){echo "selected";}?>>Operator</option>
                            </select>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if($mode == "add"){?>
                    <div class="form-group">
                        <label for="Pass" class="col-sm-2 control-label text-left">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Pass" name="Pass" placeholder="User Password" value="" required data-minlength="5">
                            <p class="help-block">Minimal 5 karakter</p>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="konfirm" class="col-sm-2 control-label text-left">Konfirmasi Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="konfirm" name="konfirm" placeholder="User Password" value="" required data-match="#Pass">
                            <p class="help-block">Ketik ulang password</p>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <?php } elseif ($mode == "edit") { ?>
                    <div class="form-group">
                        <label for="Pass" class="col-sm-2 control-label text-left">Password Anda</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Pass_confirm" name="Pass_confirm" placeholder="Password anda" value="" required data-minlength="5">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-12 text-center"><hr>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-lg btn-danger" href="javascript:history.back()"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Kembali</a>
                            <button type="submit" class="btn btn-lg btn-success confirm" data-confirm ="halo "><span class="glyphicon glyphicon-floppy-disk"  aria-hidden="true"></span> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>        
            </div>
        </div>
    </div>
</div>

