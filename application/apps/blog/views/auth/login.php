<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">
    
    <p>Please login with your email/username and password below</p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open("blog/home/login", array('class' => 'form-horizontal')); ?>
    
    <div class="control-group <? if (!empty($error)): ?>error<? endif; ?>">
        <div class="form-group">
           <label class="col-sm-2 control-label">Username / Email</label>
		    <div class="col-sm-3">
           <input type="text" class="form-control col-sm-3" placeholder="Username" name="username">
		   </div>
        </div>

        <div class="form-group">
             <label class="col-sm-2 control-label">Password</label>
			  <div class="col-sm-3">
            <input type="password" class="form-control col-sm-3" placeholder="Password" name="password">
			</div>
        </div>
   

        <div class="form-group">
		 <label class="col-sm-2 control-label"></label>
		 <div class="col-sm-3">
            <button class="btn btn-primary btn-large" type="submit">Login</button>
			</div>
        </div>
    
	<?php
						if(isset($login_info))
{
	echo "<span style='background-color:#eee;padding:3px;'>";
	echo $login_info;
	echo '</span>';
}
						?>
						
	</div>
	
	
    <?php echo form_close(); ?>

   


<?php $this->load->view('_blocks/footer'); ?>
