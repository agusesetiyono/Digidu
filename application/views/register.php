<?php $this->load->view('_blocks/header'); ?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Registrasi</h1>
                        
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
                <div class="registration-form bottom well">
                    <h2>Mari bergabung dengan DIGIDU dengan mengisi form dibawah ini:</h2>
                    <div class="row">
                    	<div class="col-md-8">
		                    <form id="registration" name="registration" method="post" action="sendemail.php">
		                        <div class="form-group">
		                        	<label for="">Nama </label>
		                            <input name="name" class="form-control" required="required" placeholder="Nama" type="text">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Username </label>
		                            <input name="Username" class="form-control" required="required" placeholder="Username" type="text">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Alamat Email</label>
		                            <input name="email" class="form-control" required="required" placeholder="Alamat Email" type="email">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Password</label>
		                            <input name="password" class="form-control" required="required" placeholder="Password" type="password">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Ulangi Password</label>
		                            <input name="repassword" class="form-control" required="required" placeholder="Ulangi Password" type="password">
		                        </div>
		                      
		                        <div class="form-group" style="margin-top: 40px;">
		                            <?php echo anchor('digidu/register_next','DAFTAR SEKARANG','class="btn btn-alt"'); ?>
		                        </div>
		                    </form>
                    	</div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('_blocks/sidebar'); ?>
        </div>
    </div>
</section>

<?php $this->load->view('_blocks/footer'); ?>