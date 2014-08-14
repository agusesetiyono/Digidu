<?php $this->load->view('_blocks/header'); ?>
<section id="home-slider">
	<div class="container">
		<div class="row">
			<div class="main-slider animate-in">
				<div class="slide-text">
					<h1>Mari belajar bersama kami</h1>
					<p><strong>DIGIDU "Digital Education"</strong> merupakan media pembelajaran yang dikonsep dengan tampilan multimedia dalam aplikasi buku digital. Materi yang ada di dalamnya merupakan materi umum yang bisa digunakan semua kalangan.</p>
					<a href="<?php echo base_url('digidu/register'); ?>" class="btn btn-common">GABUNG DENGAN KAMI</a>
					<button class="btn btn-alt" data-toggle="modal" data-target="#login-modal">LOGIN</button>
				</div>
				<img src="<?php base_url(); ?>assets/img/school.png" class="slider-hill" alt="slider image">
				<img src="<?php base_url(); ?>assets/img/char.png" height="264" width="300" class="slider-house" alt="slider image">
				<img src="<?php base_url(); ?>assets/img/sun.png" class="slider-sun" alt="slider image">
				<img src="<?php base_url(); ?>assets/img/birds1.png" class="slider-birds1" alt="slider image">
				<img src="<?php base_url(); ?>assets/img/birds2.png" class="slider-birds2" alt="slider image">
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="container">
		<div class="row">
			<div style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn; padding-top:20px;" class="col-sm-12 text-center wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h2 class="text-center" style="margin-top:40px;">DIGIDU menggunakan 3 cara untuk menguasai keterampilan belajar</h2>
			</div>
			<div style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;" class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="single-service">
					<div style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: scaleIn;" class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="<?php base_url(); ?>assets/img/icon1x.png" alt="">
					</div>
					<h2>Visual</h2>
					<p>Informasi yang disampaikan dengan alat peragaan, tulisan, gambar, diagram, atau menyaksikan video.</p>
				</div>
			</div>
			<div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeIn;" class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="single-service">
					<div style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: scaleIn;" class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="<?php base_url(); ?>assets/img/icon2x.png" alt="">
					</div>
					<h2>Auditorial</h2>
					<p>Informasi didapatkan dengan cara mendengar seperti pemaparan, dengar pendapat, permainan kata-kata.</p>
				</div>
			</div>
			<div style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;" class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms">
				<div class="single-service">
					<div style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: scaleIn;" class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="<?php base_url(); ?>assets/img/icon3x.png" alt="">
					</div>
					<h2>Kinestetik</h2>
					<p>Informasi yang didapatkan dari aktivitas fisik dan keterlibatan langsung.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="features">
	<div class="container">
		<div class="row">
			<div class="single-features">
				<div style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInRight;" class="col-sm-6 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<h2>Belajar secara efektif, produktif dan efisien</h2>
					<p>Dengan menggunakan kombinasi Visual, Auditorial, dan Kinestetikal kamu akan memiliki kemampuan menguasai materi belajar secara efektif dan efisien. Hal ini tentu akan meningkatkan prestasi belajarmu. </p>
				</div>

				<div style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInLeft;" class="col-sm-5 padding-top wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<object width="420" height="315"><param name="movie" value="//www.youtube.com/v/MSK5kUl48Ns?hl=en_US&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/MSK5kUl48Ns?hl=en_US&amp;version=3" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="social-timeline">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center padding-bottom">DIGIDU on Social Network</h2>
			</div>
			<div class="col-md-6" >
				<iframe class="fb" src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FDigidu.Indonesia&width=300&height=395&colorscheme=light&show_faces=false&header=false&stream=true&show_border=false" scrolling="yes" frameborder="0" style="overflow:hidden;" allowTransparency="true"></iframe>
			</div>
			<div class="col-md-6">
				<a class="twitter-timeline"  href="https://twitter.com/DIGIDUindonesia"  data-widget-id="471082890650849281">Tweet oleh @DIGIDUindonesia</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</div>
</section>

<section id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center padding-top">Testimoni</h2>
			</div>
			<div class="col-md-6">
				<div class="testimonial padding-top">
					<div class="media">
						<div class="pull-left">
						<a href="#"><img src="<?php base_url(); ?>assets/img/testimonial/pak_ruhiat.png" height="90" width="90" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Produk ini sangat baik dalam rangka menunjang proses pembelajaran apalagi dikaitkan dengan kurikulum yang baru yaitu kurikulum 2013 yang memungkinkan rasa keingin tahuan peserta didik jauh lebih tinggi.</blockquote>
							<p><a href="#">- Drs. H. Ruhiat, M.Pd</a> (Pengawas Sekolah Kabupaten Tasikmalaya)</p>
						</div>
					</div>

					<div class="media">
						<div class="pull-left">
						<a href="#"><img src="<?php base_url(); ?>assets/img/testimonial/aliqa-_citra_septiani.png" height="90" width="90" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Digidu menurut saya adalah produk edukasi berbasis teknologi yg T-O-P B-G-T. Digidu membantu dalam memahami ilmu dengan adanya ilustrasi yg membantu agar lebih mudah diingat dan membuat belajar itu lebih menyenangkan.</blockquote>
							<p><a href="#">- Aliqa Citra Septiani</a> (Mahasiswi UNY Fakulas Kedokteran)</p>
						</div>
					</div>

					<div class="media">
						<div class="pull-left">
						<a href="#"><img src="<?php base_url(); ?>assets/img/testimonial/fitriyanti.png" height="90" width="90" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Saya sangat mengapresiasi dengan produknya, karena jadi membantu para guru mengajar. Anak-anak sangat menyukai pelajaran yang didalamnya terdapat pelajaran yang berbentuk visual dengan konsep animasi nya. Jadi saya berharap produk DIGIDU semakin berkembang sehingga semakin membantu banyak siswa dalam belajar dan guru dalam menerangkan.</blockquote>
							<p><a href="#">- Fitriyanti</a> (Guru SD)</p>
						</div>
					</div>

				</div> 
			</div>
			<div class="col-md-6">
				<div class="testimonial padding-top">
					<div class="media">
						<div class="pull-left">
						<a href="#"><img src="<?php base_url(); ?>assets/img/testimonial/Kenia_Permata_Sukma.png" height="90" width="90" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Digidu merupakan bentuk kreativitas yg terbentuk dr jiwa muda untk memberi manfaat melalui skill yg dimiliki. Semangat bermanfaat. Sukses dan terus kembangkan!!</blockquote>
							<p><a href="#">Kenia Permata Sukma</a> (Mahasiswa ITB Jur. SITH 2011) </p>
						</div>
					</div>

					<div class="media">
						<div class="pull-left">
						<a href="#"><img src="<?php base_url(); ?>assets/img/testimonial/lisan_kyrana.png" height="90" width="90" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Semoga dengan adanya buku digital membuat lebih banyak orang untuk tertarik mempelajari teknologi dan lebih senang membaca. Turut bangga dengan diluncurkannya produk inovatif dari ITcreative berupa buku digital yang bisa diunduh secara gratis oleh semua netizen.</blockquote>
							<p><a href="#">- Lisan Kyrana</a> (Wartawan, Radar)</p>
						</div>
					</div>

					<div class="media">
						<div class="pull-left">
						<a href="#"><img src="<?php base_url(); ?>assets/img/testimonial/Nadiya_Pratiwi.png" height="90" width="90" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>"Buku digital dari Digidu Indonesia ini semacam mood boaster buat anak-anak saat jenuh dan bosan dengan media belajar yg itu itu aja. Anak-anak seketika jadi antusias belajar dengan visualisasi dan desain materi yg menarik. Semoga Digidu makin kreatif dan bermanfaat untuk negeriâ€. </blockquote>
							<p><a href="#">- Nadiya Pratiwi </a> (Mahasiswi Unpad Jur. FEB)</p>
						</div>
					</div>

				</div> 
			</div>
		</div>
	</div>
</section>

<section id="map-section">
	<div class="container">

		<div id="gmap"></div>
	</div>
</section>     


<!-- Modal Login-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="login-modal">Login ke DIGIDU</h4>
			</div>
			<div class="modal-body">

				<?php echo form_open("digidu/login", array('id' => 'login')); ?>

				<form id="login-modal" name="login" method="post" action="sendemail.php">

					<div class="form-group">
					<label for="">Username </label>
					<input name="username" class="form-control" required="required" placeholder="Username" type="text">
					</div>
					<div class="form-group">
					<label for="">Password</label>
					<input name="password" class="form-control" required="required" placeholder="Password" type="password">
					</div>
					<div class="form-group" style="margin-top: 40px;">
					<button class="btn btn-submit" type="submit">LOGIN</button>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>
<?php $this->load->view('_blocks/footer'); ?>