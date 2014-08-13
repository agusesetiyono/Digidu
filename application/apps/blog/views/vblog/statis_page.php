<?php $this->load->view('_blocks/header_blog'); ?>

 

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                         	<?php if( $query ): foreach($query as $post): ?>
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/blog/7.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="#"><?php echo mdate('%d %M %Y %H:%i:%s',human_to_unix($post->tanggal));?> <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><?php echo ucwords($post->judul);?></h2>
                                   
                                    <p><?php echo $post->isi;?></p>
                                    
                                    
                                   
                                </div>
                            </div>
                            <?php endforeach; else: ?>
							<p>Belum ada data!</p>
							<?php endif;?>
                        </div>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Posting Terbaru</h3>
							
							<?php
	
		
		$ambil = $this->db->query("
		select * from tbl_blog where status = 'published' order by tanggal DESC limit 5
		");
		
							if ($ambil->num_rows() > 0) {
				foreach ($ambil->result() as $data) {
					?>
				
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="img/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="<?php echo base_url()?>post/<?php echo $data->uri?>"><?php echo $data->judul ?></a></h4>
                                    <p>posted on  <?php echo $data->tanggal ?></p>
                                </div>
                            </div>
                          
                        <?php  }
				$this->db->close();						
			}
			?>
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Kategori</h3>
                            <?php 
							$kategori = $this->db->query("
		select tbl_kategori.id_kategori, count(tbl_blog.id_kategori) as jml_kategori, nama_kategori, slug from tbl_kategori left outer join tbl_blog
on tbl_blog.id_kategori = tbl_kategori.id_kategori where tbl_blog.status='published'
group by tbl_kategori.id_kategori 
order by tbl_kategori.id_kategori ASC
		");
		?>
                            <ul class="nav navbar-stacked">
							<?php 
							if ($kategori->num_rows() > 0) {
				foreach ($kategori->result() as $datas) {
					?>
                                <li><a href="<?php echo base_url()?>blog/learning/kategori/<?php echo $datas->slug ?>"><?php echo $datas->nama_kategori ?><span class="pull-right">(<?php echo $datas->jml_kategori ?>)</span></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tag Cloud</h3>
                            <ul class="nav nav-pills">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Abstract</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Product</a></li>
                            </ul>
                        </div>
						<!--
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="img/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
						!-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('_blocks/footer_blog'); ?>