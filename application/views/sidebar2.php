<?php
$_SESSION['username'] = $this->session->userdata('username'); // Must be already set
$ore = $_SESSION['username'];
?>
<?php 
    $usr_id_notif = $this->session->userdata('id_user');
    if($usr_id_notif){$notifDisposisi = $this->db->query("select count(*) as total from tr_disposisi_user where dus_user = '$usr_id_notif' and dus_read = '0'")->row()->total;}
	else{$notifDisposisi = 0;}
 ?>
<div class="container-fluid" style="background: #f8f8f8;">
    <div class="row-fluid">
        <table class="table" id="chat-table">
            <thead>
                <tr>
                    <th><h2><i class="fa fa-comment"></i> Chat</h2></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div id="bg-div"></div>

<script>
    $(function () {
        $('#sidemenu').metisMenu({
          toggle: false
        });
    });
</script>
<script type="text/javascript">
    

$(document).ready(function() {
	var table = $('#chat-table').DataTable( {
    	"paging": false, 
		"searching":false,  
		"ordering": false, 
		"responsive": false,
		"info": false,
		"scrollX":false,
		"scrollY":400,
		"processing":false, 
		"serverSide": false,
		"ajax":{
			"url":"<?php echo site_url('User/ajaxUserOnline');?>",
			"type":"POST"
		},
		"columns": [
				{ "data": "usr_chat" }
              ]
	} );
});
 
setUsername('<?php echo $this->session->userdata('username'); ?>');
</script>