<?php $this->load->view('_blocks/header'); ?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Login</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="register" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-7">
                <div class="login-form bottom well">
                    <h2>Login ke DIGIDU:</h2>
                    <div class="row">
                    	<div class="col-md-5">
		                   <?php $attributes = array('id' => 'login', 'name' => 'login');?>
							<?php echo form_open_multipart("",$attributes); ?>

		                        <div class="form-group">
		                        	<label for="">Username </label>
		                            <input name="username" class="form-control" required="required" placeholder="Username" type="text">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Password</label>
		                            <input name="password" class="form-control" required="required" placeholder="Password" type="password">
		                        </div>
		                        <div class="form-group" style="margin-top: 40px;">
		                           <input class="btn btn-primary btn-large" name="btn-login" type="submit" value="LOGIN" />
		                        </div>
		                   <?php echo form_close(); ?>
						   <?php
						if(isset($error_login))
{
	echo "<span style='background-color:#eee;padding:3px;'>";
	echo $error_login['login'];
	echo '</span>';
}
						?>
                    	</div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('_blocks/sidebar'); ?>
        </div>
    </div>
</section>

<?php $this->load->view('_blocks/footer'); ?>