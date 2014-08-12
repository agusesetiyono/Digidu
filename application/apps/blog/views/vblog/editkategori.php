<?php $this->load->view('_blocks/header_admin'); ?>

<div class="container">
	<h1>Sunting Kategori Blog</h1>
	<hr>
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				
				<?php echo validation_errors(); 
				if(isset($msg)){
					echo $msg;}
				?>
				<?php echo form_open($post_url, array('class' => 'well'));?>

					<div class="row">
						<div class="col-md-3">
							<input type="text" class="form-control" name="nama_kategori" value="<?=$kategori['nama_kategori']?>" required maxlength="40" autofocus />
						</div>
					</div>
					<br />
					<button type="submit" class="btn btn-primary btn-primary">
					<i class="fa fa-check"></i> Simpan</button>
					<a class="btn btn-default" href="<?=site_url('blog/kategori')?>">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('_blocks/footer'); ?>