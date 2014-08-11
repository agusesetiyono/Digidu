<?php $this->load->view('_blocks/header'); ?>
<script src='<?php echo base_url('assets/redactor/lib/jquery-1.7.min.js')?>'></script>
<script src='<?php echo base_url('assets/redactor/redactor/redactor.js')?>'></script>
<link href='<?php echo base_url('assets/redactor/css/style.css')?>' rel="stylesheet">
<link href='<?php echo base_url('assets/redactor/redactor/css/redactor.css')?>' rel="stylesheet">
<script type="text/javascript"> 
	$(document).ready(
		function()
		{
			$('#redactor').redactor({ imageUpload: './assets/upload.php' });
		}
		);
</script>		

<div class="container">
	<h1>Tambahkan blog</h1>
	<hr>
	<div class="content">
		<div class="row">
			<div class="span9">
				<div class="well">
					<fieldset>
						<form class="form-horizontal" action="<?=site_url('blog/add')?>" method="post" accept-charset="utf-8">

							<div class="control-group">
								<label class="control-label" for="">Pilih Kategori</label>
								<div class="controls">
									<select name="kategori"><?php foreach($kategori as $k){ ?><option value="<?php echo $k->id_kategori?>" ><?php echo $k->nama_kategori?></option> <?php } ?></select>
									<p class="help-block"><i>Pilih kategori blog Pelajaran</i></p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="">Judul blog</label>
								<div class="controls">
									<input type="text" name="judul" class="input-xlarge" required maxlength="100">
									<p class="help-block"><i>Masukkan judul blog Pelajaran</i></p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="">Isi</label>
								<div class="controls">
									<textarea id="redactor" name="isi" placeholder="isi" style="width: 100%; height: 200px; "></textarea>
									<p class="help-block"><i>Masukkan isi</i></p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="">Status</label>
								<div class="controls">
									<input type="radio" name="status" value="published"  > Published &nbsp;&nbsp; <input type="radio" name="status" value="unpublished" checked="checked"> Unpublished
									<p class="help-block"><i></i></p>
								</div>
							</div>

							<div class="form-actions">
								<button type="submit" name="submit" class="btn btn-primary">
									<i class="icon-check icon-white"></i> Simpan</button>
									<a class="btn btn" href="<?=site_url('blog/')?>"><i class="icon-remove"></i> Batal</a>
								</div>
							</form>
						</fieldset>
					</div>
				</div>




			</div>
		</div>

<?php $this->load->view('_blocks/footer'); ?>