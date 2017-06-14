<?php 
    $role = $this->session->userdata('id_role');
    $onpage= strtolower($this->uri->segment(1));
?>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><div style="display:inline-block"><img src="<?php echo base_url();?>assets/css/images/icon.png" style="height:25px; margin-top:0px;"> SEDAN</div></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <?php if($this->session->userdata('id_user') != '') {?>
            <!--<li <?php if($onpage == "" || $onpage == "dashboard")echo "class='active'"; ?>><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>-->
            <li class="dropdown">
              <a class="active" href="#" aria-expanded="true"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Pengadaan Barang<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanBarangHPS"); ?>"><i class="fa fa-user"></i> HPS</a></li>
                     <li><a href="<?php echo site_url("Pengadaan/PengadaanBarangPenawaran"); ?>"><i class="fa fa-users"></i> Penawaran</a></li>
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanBarangFix"); ?>"><i class="fa fa-building"></i> Fix</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanBarang"); ?>"><i class="fa fa-building"></i> All</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a class="active" href="#" aria-expanded="true"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Pengadaan Jasa<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanJasaHPS"); ?>"><i class="fa fa-user"></i> HPS</a></li>
                     <li><a href="<?php echo site_url("Pengadaan/PengadaanJasaPenawaran"); ?>"><i class="fa fa-users"></i> Penawaran</a></li>
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanJasaFix"); ?>"><i class="fa fa-building"></i> Fix</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanJasa"); ?>"><i class="fa fa-building"></i> All</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a class="active" href="#" aria-expanded="true"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Pengadaan Konsultan<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanKonsultanHPS"); ?>"><i class="fa fa-user"></i> HPS</a></li>
                     <li><a href="<?php echo site_url("Pengadaan/PengadaanKonsultanPenawaran"); ?>"><i class="fa fa-users"></i> Penawaran</a></li>
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanKonsultanFix"); ?>"><i class="fa fa-building"></i> Fix</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo site_url("Pengadaan/PengadaanKonsultan"); ?>"><i class="fa fa-building"></i> All</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url("Laporan"); ?>"><i class="fa fa-user"></i> Laporan</a></li>
            <?php if($role == "1"){ ?>
            <li class="dropdown <?php if($onpage == "user" || $onpage == "pegawai" || $onpage == "jabatan" || $onpage == "suratizin")echo "active"; ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" aria-expanded="false"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Referensi <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url("User"); ?>"><i class="fa fa-user"></i> User</a></li>
                     <li><a href="<?php echo site_url("Pegawai"); ?>"><i class="fa fa-users"></i> Pegawai</a></li>
                    <li><a href="<?php echo site_url("Jabatan"); ?>"><i class="fa fa-building"></i> Jabatan</a></li>
                    <li><a href="<?php echo site_url("SuratIzin"); ?>"><i class="fa fa-book"></i> Surat Izin</a></li>
                    <li><a href="<?php echo site_url("Supplier"); ?>"><i class="fa fa-users"></i> Supplier</a></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        
            <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $this->session->userdata('nama'); ?> <span class="caret"></span></a>
       		<ul class="dropdown-menu" role="menu">
                    <li class="text-center"><strong><?php echo $this->session->userdata('nama')."<br>".$this->session->userdata('username'); ?></strong></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('User/editUser')."/".$this->session->userdata("id_user"); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Pengaturan akun</a></li>
                    <li><a href="<?php echo site_url('User/changePassword')."/".$this->session->userdata("id_user"); ?>"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Ubah Password</a></li>
                    <li><a onclick="destroySession();" href="<?php echo site_url('login/logout'); ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
                </ul>
            </li>
        
        </ul>
        <?php }?>
    </div><!--/.nav-collapse -->
  </div>
</nav>               
<?php if($this->session->flashdata('message') != ""){ $msg=$this->session->flashdata('message');?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="alert alert-<?php echo $msg['class']?> alert-dismissible" role="alert">
        <?php echo $msg['msg']; ?>
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        </div>
    </div>
</div>
<?php } ?>