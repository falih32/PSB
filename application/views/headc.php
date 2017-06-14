<?php 
    $role = $this->session->userdata('id_role');
    $onpage= strtolower($this->uri->segment(1));
?>
<div class="row">
<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="<?php echo base_url(); ?>"><div style="display:inline-block"><img src="<?php echo base_url();?>assets/css/images/icon.png" style="height:25px; margin-top:0px;"> SEDAN</div></a>                  
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">Explore</a></li>                         
		                    <li class="scroll"><a href="#event">Event</a></li>
		                    <li class="scroll"><a href="#about">About</a></li>                     
		                    <li class="no-scroll"><a href="#twitter">Twitter</a></li>
		                    <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li>
		                    <li class="scroll"><a href="#contact">Contact</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
</div>