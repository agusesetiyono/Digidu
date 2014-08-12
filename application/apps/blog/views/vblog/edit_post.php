<<<<<<< HEAD
<?php $this->load->view('_blocks/header_admin'); ?>
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

=======
<?php $this->load->view('_blocks/header'); ?>
<link href='<?php echo base_url('assets/css/summernote.css')?>' rel="stylesheet">
<style>
	.note-editor .note-editable{
		background-color: #fff;
	}
</style>
>>>>>>> origin/master
<div class="container">
	<h1>Sunting Posting</h1>
	<hr>
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<fieldset>
						<form class="form-horizontal" role="form" action="<?=site_url('blog/update/'.$blog['id_post'])?>" method="post" accept-charset="utf-8">
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Judul</label>
								<div class="col-sm-10">
									<input type="text" name="judul" value="<?php echo $blog['judul']?>" class="form-control" required maxlength="100">
								</div>
							</div>

							<div class="form-group">
								<label for="isi" class="col-sm-2 control-label">Isi</label>
								<div class="col-sm-10">
									<textarea class="summernote" name="isi" placeholder="isi" style="width: 100%; height: 200px;"><?php echo $blog['isi']?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="kategori" class="col-sm-2 control-label">Kategori</label>
								<div class="col-sm-4">
									<select name="kategori" class="form-control"><?php foreach($kategori as $k){ ?><option value="<?php echo $k->id_kategori?>" <?php if($blog['id_kategori']==$k->id_kategori){ echo "selected";}?> ><?php echo$k->nama_kategori?></option> <?php } ?></select>
								</div>
							</div>

							<div class="form-group">
								<label for="status" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-10">
									
									<div class="radio">
										<label>
											<input type="radio" name="status" id="status1" value="published" <?php if($blog['status']=="published"){ echo "checked";}?> >
											Publish
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="status" id="status2" value="unpublished" <?php if($blog['status']=="unpublished"){ echo "checked";}?> >
											Un-Publish
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary btn-primary">Simpan</button>
									<a class="btn btn-default" href="<?=site_url('blog/')?>"><i class="icon-remove"></i> Batal</a>
								</div>
							</div>

						</form>

						
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php $this->load->view('_blocks/footer'); ?>