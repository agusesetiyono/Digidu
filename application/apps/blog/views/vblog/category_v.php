<?php $this->load->view('_blocks/header'); ?>


<div class="container">
	<div class="content">
		<div class="page-header">
			<h1><?php echo $title; ?></h1>
				<p><?php echo anchor('blog/manage_user/create', 'Create Category', array('class' => 'btn btn-default')); ?>
 &nbsp; 
 
 </p>
		</div>
	
		<div class="row">
			<div class="span6">
			<?php foreach($category as $row):?>
			<h2><a href="<?php echo base_url().'learning/category/'.$row->slug;?>"><?php echo $row->nama_kategori;?></a> (<?php echo $row->jml_kategori ?>)</h2>
			<?php endforeach;?>
			
			<?php if( isset($query) && $query ): ?>
			<ul>
			<?php foreach($query as $post):?>
			<h2><a href="<?php echo base_url().'learning/post/'.$post->id_post;?>"><?php echo $post->judul;?></a></h2>
			<?php echo auto_typography(word_limiter($post->isi, 50)); ?>
			<a href="<?php echo base_url().'learning/post/'.$post->id_post;?>" class="readmore">Pelajari!</a>
			<?php endforeach; ?>
			</ul>
				
			<?php else: ?>
			<h3>Belum ada data!</h3>
			<?php endif;?>
			</div>
			<div class="span4">
			<p><? $this->load->view('includes/sidebar'); ?></p>
			</div>
		</div>
	</div>


<?php $this->load->view('_blocks/footer'); ?>