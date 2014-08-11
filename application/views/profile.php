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
						<img src="<?php echo base_url(); ?>/assets/img/testimonial/lisan_kyrana.png" alt="" style="padding-top: 15px;">
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
				                    <form id="registration-next" name="registration-next" method="post" action="sendemail.php">
										<div class="form-group">
				                        	<label for="">Tanggal Lahir </label>
				                            <input name="Tanggal Lahir" class="form-control" required="required" placeholder="Tanggal Lahir" type="text">
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
				                        	<input name="Profesi" class="form-control" required="required" placeholder="Profesi" type="text">
				                        </div>
				                        <div class="form-group">
				                        	<label for="">No Telepon </label>
				                            <input name="Nomor Telepon" class="form-control" required="required" placeholder="Nomor Telepon" type="text">
				                        </div>
										<div class="form-group">
											<label for="">Alamat Rumah </label>
											<textarea name="Alamat" id="alamat" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap"></textarea>
										</div> 
				                        <div class="form-group">
				                        	<label for="">Kabupaten / Kota </label>
				                            <input name="Kab" class="form-control" required="required" placeholder="Kabupaten / Kota" type="text">
				                        </div>
				                        <div class="form-group">
				                        	<label for="">Provinsi</label>
				                            <input name="Provinsi" class="form-control" required="required" placeholder="Provinsi" type="text">
				                        </div>
				                     	<div class="form-group">
				                        	<label for="">Foto Profil</label>
				                            <input type="file" id="foto-profil"></div>
				                        <div class="form-group" style="margin-top: 40px;">
				                            <?php echo anchor('digidu','Update','class="btn btn-common"'); ?>
				                        </div>
				                    </form>
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
					                            <?php echo anchor('digidu','Update','class="btn btn-common"'); ?>
					                        </div>
					                    </form>
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