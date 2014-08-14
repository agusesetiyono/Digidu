<?php $this->load->view('_blocks/header_blog'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php echo $title; ?></h1>
                            <p>Blog with right sidebar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">

                        	<?php if( $posts ): foreach($posts as $post): ?>	
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="img/blog/7.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="#"><?php echo mdate('%d %M %Y %H:%i:%s',human_to_unix($post->tanggal));?> <br><small>Feb</small></a></span>
                                   </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="<?php echo base_url().'post/'.$post->uri;?>"><?php echo ucwords($post->judul);?></a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p><?php echo auto_typography(word_limiter($post->isi, 50)); ?></p>
                                    <a href="<?php echo base_url().'blog/learning/post/'.$post->uri;?>" class="read-more">View More</a>

                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
              							<?php else: ?>
              							<h4><img src="<?php echo base_url().'assets/img/page.png'?>"><i> Belum ada data!</i></h4><br>
              							<?php endif;?>

              							<?php if(isset($limit))
              								{
              									$next=($limit+5); $back=($limit-5); 
              									if($back<0){ $back=0;}
              								} 
              							?>

                        </div>
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                          <li><a href="#">left</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="active"><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">6</a></li>
                          <li><a href="#">7</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#">9</a></li>
                          <li><a href="#">right</a></li>
                        </ul>
                    </div>
                 </div>
				        <?php $this->load->view('_blocks/sidebar_blog'); ?>

            </div>
        </div>
    </section>

<?php $this->load->view('_blocks/footer_blog'); ?>