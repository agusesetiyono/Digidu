<?php $this->load->view('_blocks/header_admin'); ?>
<div id="content" class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo $sub_judul ; ?></h1>
				<a class="btn btn-default" href="<?php echo base_url('blog/manage_user'); ?>">Back</a>
			</div>
			<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

			<?php echo form_open($post_url, array('class' => 'form-horizontal'));?>



			<div class="form-group">
				<label class="col-sm-2 control-label">Nama Lengkap</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="nama" value="<?php echo $nama?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="username" value="<?php echo $username?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="email" value="<?php echo $email ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">No. Handphone</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="hp" value="<?php echo $hp?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label> 
				<div class="col-sm-3">
					<input type="text" class="form-control" name="password">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Confirm Password</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="password_fix">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Roles</label>
				<div class="col-sm-3">
					<select name="role" class="form-control">
						<option value="">Pilih role</option>
						<?php
						foreach($role->result() as $row) { ?>
						<option value="<?php echo $row->id?>" <?php if($row->id == $p_role) { echo "selected = 'selected'";} ?>>
							<?php echo $row->role ?>
						</option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('name' => 'submit', 'value' => 'Create', 'class' => 'btn btn-primary btn-large'));?></div>
			</div>

			<?php echo form_close();?>
		</div>
	</div>
</div>





<?php $this->load->view('_blocks/footer'); ?>

