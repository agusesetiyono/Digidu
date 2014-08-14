<?php $this->load->view('_blocks/header_admin'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="page-header">
				<h1>Selamat Datang, <?php echo $this->session->userdata('nama'); ?> </h1>
				
			</div>
			<div class="alert alert-success">
				<p>Ini adalah halaman admin DIGIDU. <br>
				Gunakan menu diatas untuk bernavigasi ke <strong>Blog, Forum, Page,</strong> dan <strong>User Management</strong>.
				</p>
			</div>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
		</div>
	</div>
</div>


<?php $this->load->view('_blocks/footer'); ?>