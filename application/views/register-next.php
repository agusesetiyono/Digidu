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
                <div class="registration-next-form bottom well">
                    <h2>Lengkapi pendaftaran:</h2>
                    <div class="row">
                    	<div class="col-md-8">
		                    <?php $attributes = array('id' => 'registration-next', 'name' => 'registration-next');?>
							<?php echo form_open_multipart($post_url,$attributes); ?>
								<div class="form-group">
		                        	<label for="">Tanggal Lahir </label>
		                            <input name="tgl_lahir" class="form-control" required="required" placeholder="Tanggal Lahir" type="text">
		                        </div>
								<div class="form-group">
		                        	<label for="">Jenis Kelamin </label>
									<select class="form-control" name="jenis_kelamin">
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select>
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Profesi </label>
		                        	<input name="profesi" class="form-control" required="required" placeholder="Profesi" type="text">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">No Telepon </label>
		                            <input name="hp" class="form-control" required="required" placeholder="Nomor Telepon" type="text">
		                        </div>
								<div class="form-group">
									<label for="">Alamat Rumah </label>
									<textarea name="alamat" id="alamat" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap"></textarea>
								</div> 
		                        <div class="form-group">
		                        	<label for="">Kabupaten / Kota </label>
		                            <input name="kabupaten" class="form-control" required="required" placeholder="Kabupaten / Kota" type="text">
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Provinsi</label>
		                            <input name="provinsi" class="form-control" required="required" placeholder="Provinsi" type="text">
		                        </div>
		                     	<div class="form-group">
		                        	<label for="">Foto Profil</label>
		                            <input name="foto" class="form-control" required="required" placeholder="Provinsi" type="text">
		                        </div>
		                        <div class="form-group" style="margin-top: 40px;">
		                           <input type="submit" class="btn btn-alt" value="DAFTAR SEKARANG">
		                       		<?php echo anchor('digidu/profile','Skip','class="btn btn-common"'); ?>
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