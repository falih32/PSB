<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="KeyWords" content="PSB, Qudsiyyah, Kudus">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo base_url();?>assets/css/images/iconqudsy.png">
    <link href="<?php echo base_url();?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/bootstrap-colorpalette.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/sidoel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/vis.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/dependent-dropdown.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/timeline.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/metisMenu/src/metisMenu.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url();?>assets/css/header/demo.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/header/header-user-dropdown.css" rel="stylesheet" type="text/css">
    
    
    <link href="<?php echo base_url();?>assets/css/footer/demo.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/footer/footer-distributed-with-address-and-phones.css" rel="stylesheet" type="text/css">
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.2_min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.3_min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/datepicker-id.js"></script>
     <script src="<?php echo base_url();?>assets/js/jquery-ui-timepicker-addon.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-colorpalette.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.file-input.js"></script>
    <script src="<?php echo base_url();?>assets/js/validator.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vis.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dependent-dropdown.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/amcharts.js"></script>
    <script src="<?php echo base_url();?>assets/js/serial.js"></script>
    <script src="<?php echo base_url();?>assets/metisMenu/src/metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/formValidation.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/Framework/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-checkbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url();?>assets/js/ajaxfileupload.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/jquery.maskMoney.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.maskMoney.min.js"></script>
    
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">

</style>    
</head>
<body>
<?php if($content!="f_daftar"){ ?>               

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php $this->load->view('head'); ?>
            <?php $this->load->view('sidebar'); ?>
        </nav>
        
        <div id="page-wrapper">
 <?php } ?>             
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
            <div id="content" class="panel-body"><?php $this->load->view($content); ?></div>
        </div>    
        
        <div id="footer"><?php $this->load->view('footer'); ?></div>
	</div>
</body>
<script type="text/javascript">
	// <![CDATA[
	$(document).ready(function () {
            $.datepicker.setDefaults(
                $.extend(
                    {'dateFormat':'dd-mm-yy'}
                )
            );
    
            
            $(function() {
                $( ".tgl" ).datetimepicker({
                    dateFormat: 'yy-mm-dd'
                });
            });
            
            $(function() {
                $( ".tgl1" ).datetimepicker({
                   'showTimepicker': false,
                    changeMonth: true,
                    changeYear: true,
                   dateFormat: 'yy-mm-dd'
                });
            });
            
	});
	// ]]>
	</script>
</html>