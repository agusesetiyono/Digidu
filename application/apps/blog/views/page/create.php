<?php $this->load->view('_blocks/header_admin'); ?>
 <script src="<?php echo base_url(); ?>resources/bootstrap/js/jquery-1.7.2.min.js"></script>
<link href='<?php echo base_url('assets/css/summernote.css')?>' rel="stylesheet">
<style>
	.note-editor .note-editable{
		background-color: #fff;
	}
</style>	

<div class="container">
	<h1>Tambah Page</h1>
	<hr>
	<div class="content">
		<div class="row">
			<div class="span9">
				<div class="well">
					<fieldset>
						<form class="form-horizontal" action="<?php echo site_url($url) ?>" method="post" accept-charset="utf-8">

							
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Nama menu</label>
								<div class="col-sm-4">
									<input value="<?php echo $menu_title?>" type="text" name="menu_title" class="form-control" id="menu" required maxlength="100">
								</div>
							</div>
							<script>
                $(function() {
				
                    $('#menu').change(function() {
                        var title = $('#menu').val().toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
                        $('#slug').val(title);
                    });
                });
                </script>
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Slug</label>
								<div class="col-sm-4">
									<input type="text" value="<?php echo $slug?>" name="slug" id="slug" class="form-control" required maxlength="100">
								</div>
							</div>
							
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Judul</label>
								<div class="col-sm-10">
									<input type="text" value="<?php echo $judul?>" name="judul" class="form-control" required maxlength="100">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for=""></label>
								<div class="controls">
									<textarea class="summernote" name="isi" placeholder="isi" style="width: 100%; height: 200px; "><?php echo $isi?></textarea>
									
								</div>
							</div>
							
							<div class="form-group">
								<label for="judul" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-10">
							
								<?php if($status == "published") { ?>
								<label class="radio-inline">
									<input type="radio" name="status" value="published" checked="checked"> Published  
								</label>
								
								<label class="radio-inline">
									<input type="radio" name="status" value="unpublished" > Unpublished
								</label>	
								<?php } else { ?>
								<label class="radio-inline">
									<input type="radio" name="status" value="published"  > Published  
								</label>
								
								<label class="radio-inline">
									<input type="radio" name="status" value="unpublished" checked="checked"> Unpublished
								</label>	
								<?php } ?>
							</div>
</div>
							<div class="form-group">
							<label for="judul" class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
								<button type="submit" name="submit" class="btn btn-primary">
									<i class="icon-check icon-white"></i> Simpan</button>
									<a class="btn btn" href="<?=site_url('blog/page/index')?>"><i class="icon-remove"></i> Batal</a>
								</div>
								</div>
							</form>
						</fieldset>
					
				</div>

			</div>
		</div>

<?php $this->load->view('_blocks/footer'); ?>