<div class="container">
	<div class="content">
		<div class="page-header">
		<h3>Simpan dan Bagikan materi!</h3>
		</div>
		<div class="row">
			<div class="span12">
				<?php if (isset($info)) : ?>
					<div class="alert alert-success fade in">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<p><?php echo $info; ?></p>
						<p><a href='<?php echo base_url('materi')?>'>&larr; Ke daftar materi</a></p>
					</div>
				<?php endif; ?>
				<?php if($this->session->flashdata('message')) { ?>
					<div class="alert alert-success fade in">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<p><?php echo $this->session->flashdata('message') ; ?></p>
					</div>
				<?php  }; ?>
				<?php if(isset($info)==NULL) { ?>
				<form class="form-horizontal" action="" method="post" accept-charset="utf-8">
					<div class="form-actions">
						<div class="control-group">
							<label class="control-label" for="">Kirimkan ke <i>Facebook Group</i>?</label>
							<div class="controls">
								<button class="btn btn-primary" type="submit" name="submit"><i class="icon-share-alt icon-white"></i> Kirim!</button>
								<p class="help-block"><i>Posting materi akan dikirimkan ke group <a href="https://www.facebook.com/groups/319988264765724/" target="_blank">Belajar Fisika</a> di Facebook</i></p>
							</div>
						</div>
					</div>
				</form>
				<?php  }; ?>
			</div>
		</div>