<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
 <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script> 
<?php $this->load->view('_blocks/header'); ?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Profil Saya</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="user-profile" class="padding-top">
    <div class="container">
        <div class="row">
        	<div class="col-md-3 col-sm-3">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">
						<img src="<?php echo base_url(); ?>/foto/<?php echo $foto ?>" alt="" style="padding-top: 15px;" width="200px">
						<p><strong>agusesetiyono</strong></p>
					</div>
					<div class="list-group" role="tablist">
						<a href="#edit-profile" class="list-group-item" role="tab" data-toggle="tab">Sunting Pofil</a>
						<a href="#edit-account" class="list-group-item" role="tab" data-toggle="tab">Pengaturan Akun</a>
						<a href="#my-post" class="list-group-item" role="tab" data-toggle="tab">Posting Saya</a>
					</div>
				</div>
        	</div>
            <div class="col-md-9 col-sm-9">
            	<div class="tab-content" style="padding-top:0;">
					<div class="tab-pane fade in active" id="edit-profile">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Sunting Profile</h3>
							</div>
							<div class="panel-body">
								<div class="col-md-8">
				                    <?php $attributes = array('id' => 'registration-next', 'name' => 'registration-next');?>
									<?php echo form_open_multipart($post_url_profil,$attributes); ?>
										<div class="form-group">
				                        	<label for="">Tanggal Lahir </label>
				                            <input value="<?php echo $tgl_lahir?>" name="tgl_lahir" class="form-control tanggal" required="required" placeholder="Tanggal Lahir" type="text">
				                        </div>
										<div class="form-group">
				                        	<label for="">Jenis Kelamin </label>
											<select class="form-control">
												<option>Laki-laki</option>
												<option>Perempuan</option>
											</select>
				                        </div>
				                        <div class="form-group">
				                        	<label for="">Profesi </label>
				                        	<input value="<?php echo $profesi ?>" name="profesi" class="form-control" required="required" placeholder="Profesi" type="text">
				                        </div>
				                        <div class="form-group">
				                        	<label for="">No Telepon </label>
				                            <input value="<?php echo $hp ?>" name="hp" class="form-control" required="required" placeholder="Nomor Telepon" type="text">
				                        </div>
										<div class="form-group">
											<label for="">Alamat Rumah </label>
											<textarea name="alamat" id="alamat" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap"><?php echo $alamat ?></textarea>
										</div> 
				                        <div class="form-group">
				                        	<label for="">Kabupaten / Kota </label>
				                            <input value="<?php echo $kabupaten ?>" name="kabupaten" class="form-control" required="required" placeholder="Kabupaten / Kota" type="text">
				                        </div>
				                        <div class="form-group">
				                        	<label for="">Provinsi</label>
				                            <input value="<?php echo $provinsi?>" name="provinsi" class="form-control" required="required" placeholder="Provinsi" type="text">
				                        </div>
				                     	<div class="form-group">
				                        	<label for="">Foto Profil</label>
				                            <input type="file" id="imgInp" name="foto"></div>
				                        <div class="form-group" style="margin-top: 40px;">
				                           
											 <input type="submit" class="btn btn-common" value="Update">
				                        </div>
				                    <?php echo form_close(); ?>
		                    	</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="edit-account">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Pengaturan Akun</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-8">
										 <?php $attributes = array('id' => 'registration', 'name' => 'registration');?>
									<?php echo form_open_multipart($post_url_akun,$attributes); ?>
					                        <div class="form-group">
					                        	<label for="">Nama </label>
					                            <input value="<?php echo $nama ?>" name="name" class="form-control" required="required" placeholder="Nama" type="text">
					                        </div>
					                        <div class="form-group">
					                        	<label for="">Username </label>
					                            <input value="<?php echo $username ?>" name="Username" class="form-control" required="required" placeholder="Username" type="text">
					                        </div>
					                        <div class="form-group">
					                        	<label for="">Alamat Email</label>
					                            <input value="<?php echo $email ?>" name="email" class="form-control" required="required" placeholder="Alamat Email" type="email">
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
					                            <?php echo anchor('digidu','Update','class="btn btn-common"'); ?>
					                        </div>
					                    <?php echo form_close(); ?>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="my-post">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Posting Saya</h3>
							</div>
							<div class="panel-body">
								<h3>Posting Saya di DIGIDU</h3>
							</div>
						</div>
					</div>
				</div>

            </div>

        </div>
    </div>
</section>

<?php $this->load->view('_blocks/footer'); ?>

<script>
$(function() {
$( ".tanggal" ).datepicker({
changeMonth: true,
changeYear: true,
dateFormat: 'yy-mm-dd',
});
});
</script>