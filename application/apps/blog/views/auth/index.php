<?php $this->load->view('_blocks/header_admin'); ?>
<div id="content" class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo $sub_judul ; ?></h1>

			</div>
			<?php echo anchor('blog/manage_user/create', 'create user', array('class' => 'btn btn-default')); ?>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nama Pengguna</th>
						<th>Username</th>
						<th>Email</th>
						<th>Status</th>
						<th>Aksi</th>

					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($pengguna as $user) {?>
					<tr>
						<td><?php echo $user->nama;?></td>
						<td><?php echo $user->username;?></td>
						<td><?php echo $user->email;?></td>
						<td><?php 

							if ($user->status == 'N')
							{
								echo "Aktif";
							}
							else
							{
								echo "Blokir";
							}

							?></td>
							<td><?php echo anchor("blog/manage_user/edit_user/".$user->id_user, 'Edit', array('class' => 'btn btn-primary')) ;?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<?php $this->load->view('_blocks/footer'); ?>

