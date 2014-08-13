<?php $this->load->view('_blocks/header_admin'); ?>
<link href='<?php echo base_url('assets/css/summernote.css')?>' rel="stylesheet">
<style>
	.note-editor .note-editable{
		background-color: #fff;
	}
</style>	

<div class="container">
	<h1>Tambahkan blog</h1>
	<hr>
	<div class="content">
		<div class="row">
			<div class="span9">
				<div class="well">
					<fieldset>
						<form class="form-horizontal" action="<?=site_url('blog/add')?>" method="post" accept-charset="utf-8">

							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Pilih Kategori</label>
								<div class="col-sm-3">
									<select name="kategori" class="form-control"><?php foreach($kategori as $k){ ?><option value="<?php echo $k->id_kategori?>" ><?php echo $k->nama_kategori?></option> <?php } ?></select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Judul</label>
								<div class="col-sm-10">
									<input type="text" name="judul" class="form-control" required maxlength="100">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for=""></label>
								<div class="controls">
									<textarea class="summernote" name="isi" placeholder="isi" style="width: 100%; height: 200px; "></textarea>
									
								</div>
							</div>
							
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-10">
							
								<label class="radio-inline">
									<input type="radio" name="status" value="published"  > Published  
								</label>
								
								<label class="radio-inline">
									<input type="radio" name="status" value="unpublished" checked="checked"> Unpublished
								</label>	
								
							</div>
</div>
							<div class="form-group">
							<label for="judul" class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
								<button type="submit" name="submit" class="btn btn-primary">
									<i class="icon-check icon-white"></i> Simpan</button>
									<a class="btn btn" href="<?=site_url('blog/')?>"><i class="icon-remove"></i> Batal</a>
								</div>
								</div>
							</form>
						</fieldset>
					
				</div>




			</div>
		</div>

<?php $this->load->view('_blocks/footer'); ?>