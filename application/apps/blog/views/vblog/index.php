<?php $this->load->view('_blocks/header_admin'); ?>

<!-- Begin page content -->

	<div class="container">
		<h1><a href="<?php echo site_url('blog')?>">Daftar Artikel</a></h1><hr>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="well form-search">
						<div class="row">
							<div class="col-xs-6">
								<input type="text" id="searchblog" class="form-control search-query" placeholder="Cari" onkeydown="if(event.keyCode==13){return searchblog();}"> <a href="javascript:searchblog();"><i class="icon-search"></i></a>	
							</div>
							<div class="col-xs-6">
								<p class="pull-right"><a class="btn btn-sm btn-default" href="<?=site_url('blog/newpost/')?>"><i class="icon-plus"></i> Tambah Data</a></p>
							</div>
						</div>
					</div>
					<table class="table table-striped" id="">
						<thead>
							<tr>
								<th style="width:35px;"><i class="icon-tags"></i> ID</th>
								<th><i class="icon-font"></i> Judul blog</th>
								<th><i class="icon-list"></i> Kategori</th>
								<th><i class="icon-calendar"></i> Tanggal</th>
								<th><i class="icon-leaf"></i> Status</th>
								<th><i class="icon-cog"></i> Action</th>

							</tr>
						</thead>
						<tbody>

							<?php foreach($blog as $m) { ?>
							<tr>
								<td><?=$m['id_post']?></td>
								<td><a href="<?=site_url('post/'.$m['uri'])?>"><?=$m['judul']?></a></td>
								<td><?=$m['nama_kategori']?></td>
								<td><?=$m['tanggal']?></td>
								<td><?=$m['status']?></td>
								<td>
									<a href="<?=site_url('post/'.$m['uri'])?>" class="btn btn-sm btn-default" rel="tooltip" title="lihat"><span class="glyphicon glyphicon-search"></span></a>
									<a href="<?=site_url('blog/edit/'.$m['id_post'])?>" class="btn btn-sm btn-success" rel="tooltip" title="ubah"><span class="glyphicon glyphicon-pencil"></span></a>


									<a href="<?php echo base_url();?>blog/blog/del/<?php echo $m['id_post']; ?>" onclick="javascript:return confirm('Apakah Anda Yakin Menghapus data ini ?')" class="btn btn-sm btn-danger" rel="tooltip" title="hapus"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
							<?php }; ?>
						</tbody>
					</table>
					<?php if(isset($limit)){
						if(count($blog)<=0){ echo "Data belum ada!<br/>";}

						$next=($limit+30); $back=($limit-30); 
						if($back<0){ $back=0;}
						echo anchor('blog/index/'.$back,'Back');?> | <?php echo anchor('blog/index/'.$next,'Next'); 

					} ?>

				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('_blocks/footer'); ?>