<?php 
    $role = $this->session->userdata('id_role');
    $onpage= strtolower($this->uri->segment(1));
?> 
<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><div style="display:inline-block"><img src="<?php echo base_url();?>assets/css/images/icon.png" style="height:25px; margin-top:0px;"> P</div></a>
    </div>
<ul class="nav navbar-top-links navbar-right">
                <?php if($this->session->userdata('id_user') != '') {?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $this->session->userdata('nama'); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="text-center"><strong><?php echo $this->session->userdata('nama')."<br>".$this->session->userdata('username'); ?></strong></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('User/editUser')."/".$this->session->userdata("id_user"); ?>"><i class="fa fa-user fa-fw"></i> Pengaturan akun</a>
                        </li>
                        <li><a href="<?php echo site_url('User/changePassword')."/".$this->session->userdata("id_user"); ?>"><i class="fa fa-gear fa-fw"></i> Ubah Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a onclick="destroySession();" href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    
                    <!-- /.dropdown-user -->
                </li>
                <?php }?>
                <!-- /.dropdown -->
            </ul>
