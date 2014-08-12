<?php $this->load->view('_blocks/header_admin'); ?>
<div class="container">
	<div class="content">

		<h1>Daftar Kategori Materi

		</h1>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<p><?php echo anchor('blog/blog/new_kategori', 'Create Category', array('class' => 'btn btn-default')); ?>
					&nbsp; 

				</p>
				<table class="table table-striped" id="">
					<thead>
						<tr>
							<th style="width:35px;"><i class="icon-tags"></i> No</th>
							<th><i class="icon-list"></i> Nama Kategori</th>
							<th><i class="icon-cog"></i> Action</th>
							
						</tr>
					</thead>
					<tbody>

						<?php 
						$i = 1;
						foreach($category as $kategori) { ?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $kategori->nama_kategori ?> (<?php echo $kategori->jml_kategori ?>)</td>
							<td>
								<a href="<?php echo base_url()?>blog/blog/edit_kategori/<?php echo $kategori->id_kategori ?>" type="button" class="btn btn-default"	>
									Edit
								</a>

								<a href="<?php echo base_url()?>blog/blog/del_kategori/<?php echo $kategori->id_kategori ?>" type="button" class="btn btn-default"	>
									Hapus
								</a>

							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>


			</div>
		</div>
	</div>
</div>
	<?php $this->load->view('_blocks/footer'); ?>