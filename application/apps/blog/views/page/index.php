<?php $this->load->view('_blocks/header_admin'); ?>

<!-- Begin page content -->

	<div class="container">
		<h1><a href="<?php echo site_url('blog/page')?>">Daftar Page</a></h1><hr>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					
					<table class="table table-striped" id="">
						<thead>
							<tr>
								<th style="width:35px;"><i class="icon-tags"></i> No</th>
								<th><i class="icon-font"></i> Nama Menu</th>
								<th><i class="icon-list"></i> Judul</th>
								<th><i class="icon-leaf"></i> Status</th>
								<th><i class="icon-cog"></i> Action</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$i = 1;
							foreach($page as $m) { ?>
							<tr>
								<td><?php echo $i++ ?></td>
								<td><a href="<?=site_url('blog/page/page'.$m['slug'])?>"><?=$m['menu_title']?></a></td>
								<td><?=$m['judul']?></td>
								<td><?=$m['status']?></td>
								<td>
									<a href="<?=site_url('blog/pages/'.$m['slug'])?>" class="btn btn-sm btn-default" rel="tooltip" title="lihat"><span class="glyphicon glyphicon-search"></span></a>
									<a href="<?=site_url('blog/page/edit/'.$m['id_page'])?>" class="btn btn-sm btn-success" rel="tooltip" title="ubah"><span class="glyphicon glyphicon-pencil"></span></a>


									<a href="<?php echo base_url();?>blog/page/del/<?php echo $m['id_page']; ?>" onclick="javascript:return confirm('Apakah Anda Yakin Menghapus data ini ?')" class="btn btn-sm btn-danger" rel="tooltip" title="hapus"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
							<?php }; ?>
						</tbody>
					</table>
					<?php if(isset($limit)){
						if(count($page)<=0){ echo "Data belum ada!<br/>";}

						$next=($limit+30); $back=($limit-30); 
						if($back<0){ $back=0;}
						echo anchor('blog/index/'.$back,'Back');?> | <?php echo anchor('blog/index/'.$next,'Next'); 

					} ?>

				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('_blocks/footer'); ?>