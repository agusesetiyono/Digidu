<?php $this->load->view('_blocks/header_admin'); ?>

<div class="container">
	<h1>Ubah Kategori Materi</h1>
	<hr>
	<div class="content">
		<div class="row">
			<div class="span9">
				
				<?php echo validation_errors(); 
				if(isset($msg)){
					echo $msg;}
				?>
				<?php echo form_open($post_url, array('class' => 'well'));?>
					<div class="input-prepend">
						<input type="text" class="input-large" name="nama_kategori" value="<?=$kategori['nama_kategori']?>" required maxlength="40" autofocus />
					</div>
					<br />
					<button type="submit" class="btn btn-primary btn-primary">
					<i class="icon-ok icon-white"></i> Simpan</button>
					<a class="btn btn" href="<?=site_url('materi/kategori')?>"><i class="icon-remove"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
<?php $this->load->view('_blocks/footer'); ?>