<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="KeyWords" content="PSB, Penerimaan Siswa Baru, Qudsiyyah, Kudus, indonesia">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo "$title";?></title>
    <link rel="icon" href="<?php echo base_url();?>assets/css/images/icon.png">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/sidoel.css" rel="stylesheet" type="text/css">
       <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.2_min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.3_min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flip.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
    	<div class="panel panel-default transparent-bg2">
        	<div class="panel-body">
                <div class="col-md-12 text-center">
                    <h3>SISTEM INFORMASI PENERIMAAN SISWA BARU</h3>
                    <h4>MADRASAH QUDSIYYAH<br>KUDUS</h4>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-4 col-md-offset-4">
          <div id="header"><?php $this->load->view($content); ?></div>  
        </div>
    </div>
</div>
    
<script>
    $.backstretch([
        "<?php echo base_url();?>assets/css/images/qudsiyyah.jpg",
        "<?php echo base_url();?>assets/css/images/qudsiyyah2.jpg"],
        {duration: 3000, fade: 750});
    $("#card").flip({
      trigger: 'manual'
    });
    $('#tombol-flip').click(function(){
        $("#card").flip(true);
    });
</script>
</body>
</html>