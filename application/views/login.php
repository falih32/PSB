
<div id="card" class="card">
    <div class="front">
        <div class="panel panel-default transparent-bg">
            <div class="panel-body text-center">
                <img src="<?php echo base_url();?>assets/css/images/icon.png" alt="logo qudsiyyah" width="50%">
                <br><br><a id="tombol-flip" type="button" class="btn btn-success">Masuk</a>
                <br><br><p>Copyright &COPY; 2017, All Rights Reserved</p>
            </div>
        </div>
    </div>
    <div class="back">
        <div class="login-panel panel panel-primary transparent-bg2">
            <div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">
                <form role="form" action="<?=base_URL()?>login/do_login" method="post" data-toggle="validator">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" id="username" placeholder="username" name="username" value="<?php echo set_value('username')?>"  type="text" autofocus="" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="password" placeholder="password" name="password" type="password" value="<?php echo set_value('password')?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tahun</label>
                            <select class="form-control" id="year" name="thn_pilih" required>
                            <?php $nowYear = date("Y")?>
                            <?php while ($thn <= date("Y")) {?>
                            	<option value="<?php echo $nowYear?>"><?php echo $nowYear?></option>
                                <?php $thn = $thn + 1?>
                                <?php $nowYear = $nowYear - 1?>
                             <?php } ?>
                            </select>
                        </div>
                       
                        <!-- Change this to a button or input when using this as a form -->
                        <input type="submit" class="btn btn-sm btn-success" value="Login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
