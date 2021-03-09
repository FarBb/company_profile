<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PT. Monsurin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Mochammad Faris" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.jpg' ?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
	<?php
	error_reporting(0);
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

</head>

<body>


	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="container">
				<div class="header-inner">
					<h1><a href="<?php echo base_url() . '' ?>">PT Monsurin<span>.</span></a></h1>
					<nav role="navigation">
						<ul>
							<li><a href="<?= base_url() . '' ?>"> Home</a></li>
							<li><a href="<?= base_url() . 'about' ?>">About</a></li>
							<li><a href="<?= base_url() . 'portfolio' ?>">Portfolio</a></li>
							<li><a href="<?= base_url() . 'artikel' ?>">News</a></li>
							<li><a href="<?= base_url() . 'gallery' ?>">Gallery</a></li>
							<li><a href="<?= base_url() . 'kontak' ?>">Contact</a></li>
							<li class="cta"><a href="<?= base_url() . 'administrator' ?>">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/2.jpeg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2 style="text-shadow: 2px 3px 1px black">
										START TO REALIZE YOUR DREAM HOME HERE WITH US</h2>
									<p><a href="<?= base_url('portfolio') ?>" class="btn btn-primary btn-lg">Get Portfolio</a></p>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/3.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2 style="text-shadow: 2px 3px 1px black">With low interest rates, you can realize your dream home</h2>
									<p><a href="<?= base_url('portfolio') ?>" class="btn btn-primary btn-lg">Get Portfolio</a></p>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/6.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2 style="text-shadow: 2px 3px 1px black">WE ALSO BUILD A HIGH-tech HOME</h2>
									<p><a href="<?= base_url('portfolio') ?>" class="btn btn-primary btn-lg">Get Portfolio</a></p>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/4.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2 style="text-shadow: 2px 3px 1px black">entrust us with the matter of development</h2>
									<p><a href="<?= base_url('portfolio') ?>" class="btn btn-primary btn-lg">Get Portfolio</a></p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="fh5co-why-us" class="animate-box">
			<div class="container">
				<h1 class="text-center"><b> Our Services</b></h1><br>
				<div class="row">
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/1.svg' ?>" class="img-responsive"></span>
						<h3>
							SUKU BUNGA RENDAH</h3>
						<p>Wujudkan rumah impian anda dengan suku bunga rendah bersama kami.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/12.jpg' ?>" class="img-responsive"></span>
						<h3 style="text-transform: uppercase">
							pembayaran</h3>
						<p>Transaksi pembayaran dapat dilakukan secara offline dengan mengunjungin kantor kami.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/11.png' ?>" class="img-responsive"></span>
						<h3 style="text-transform: uppercase">
							investasi</h3>
						<p>
							Bergabunglah dalam membangun perumahan yang ideal dan menjadi bagian dari kami.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/1212.jpg' ?>" class="img-responsive"></span>
						<h3 style="text-transform: uppercase;">
							450v sistem prabayar</h3>
						<p>Dengan menggunakan sistem pembayaran prabayar, maka dapat dengan mudah mengcontrol jumlah listrik yang terpakai.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>

					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/4.png' ?>" class="img-responsive"></span>
						<h3 style="text-transform: uppercase;">internet Gratis</h3>
						<p>
							Kami menyediakan tempat khusus untuk menikmati koneksi internet gratis dengan kecepatan 100mbps</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/7.svg' ?>" class="img-responsive"></span>
						<h3>AIR PDAM</h3>
						<p>Air bersih dan dijamin highness akan anda rasakan setiap saat.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/14.jpg' ?>" class="img-responsive"></span>
						<h3>
							CCTV</h3>
						<p>Kami juga melengkapi setiap sudut perumahan dengan kamera pengintai untuk meningkatkan keamanan di area perumahan.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>

					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/15.png' ?>" class="img-responsive"></span>
						<h3 style="text-transform: uppercase">cleaning service</h3>
						<p>
							Kami menyediakan layanan pembersihan yang akan membersihkan bagian depan rumah dengan layanan terbaik.
						</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/19.png' ?>" class="img-responsive"></span>
						<h3 style="text-transform: uppercase">keamanan</h3>
						<p>
							Petugas penjaga keamanan diperumahan memiliki pengalaman yang profesional.</p>
						<!-- <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p> -->
					</div>
				</div>
			</div>
		</div>
		<!-- selesai service -->

		<div class="fh5co-section-with-image">
			<img src="<?php echo base_url() . 'theme/images/image_1.jpg' ?>" alt="" class="img-responsive">
			<div class="fh5co-box animate-box" style="border-radius: 50px;">
				<h2 style="text-transform: uppercase">
					order now
				</h2>
				<p>Your satisfaction is our priority</p>
				<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Order Now <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>



		<div id="fh5co-blog" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h1><b>NEWS</b></h1>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php
					foreach ($post->result_array() as $j) :
						$post_id = $j['tulisan_id'];
						$post_judul = $j['tulisan_judul'];
						$post_isi = $j['tulisan_isi'];
						$post_author = $j['tulisan_author'];
						$post_image = $j['tulisan_gambar'];
						$post_tglpost = $j['tanggal'];
						$post_slug = $j['tulisan_slug'];
					?>
						<div class="col-md-4">
							<a class="fh5co-entry" href="<?php echo base_url() . 'artikel/' . $post_slug; ?>">
								<figure>
									<img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
								</figure>
								<div class="fh5co-copy">
									<h3><?php echo $post_judul; ?></h3>
									<span class="fh5co-date"><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
									<?php echo limit_words($post_isi, 15) . '...'; ?>
								</div>
							</a>
						</div>
					<?php endforeach; ?>

					<div class="col-md-12 text-center">
						<p><a href="<?php echo base_url() . 'artikel' ?>" class="btn btn-primary btn-outline with-arrow">View More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>


		<?php $this->load->view('v_footer'); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>