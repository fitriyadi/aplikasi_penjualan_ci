<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Perpustakaan UAD</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Testimonials-Css -->
	<link href="css/mislider.css" rel="stylesheet" type="text/css" />
	<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<header>
		<!-- top header -->
		<?php include('header.php'); ?>
		<!-- //top header -->
	</header>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile">
		<ul class="slider">
			<li class="active">
				<div class="banner-w3ls-1">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-2">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-3">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-4">
				</div>
			</li>
			<li class="prev">
				<div class="banner-w3ls-5">
				</div>
			</li>
		</ul>
		<ul class="pager">
			<li data-index="0" class="active"></li>
			<li data-index="1"></li>
			<li data-index="2"></li>
			<li data-index="3"></li>
			<li data-index="4"></li>
		</ul>
		<div class="banner-text-posi-w3ls">
			<div class="banner-text-whtree">
				<h3 class="text-capitalize text-white p-4">Buku adalah
					<b>Jendela Dunia</b>
				</h3>
				<p class="px-4 py-3 text-dark">Perpustakaan adalah tempat untuk memenuhi dahaga ilmu pengetahuan.</p>
				<a href="index.php?hal=berita" class="button-agiles text-capitalize text-white mt-sm-5 mt-4">Selengkapnya</a>
			</div>
		</div>

		<!-- navigation -->
		<?php include('menu.php'); ?>	
		<!-- //navigation -->
	</div>
	<!-- //banner -->

	<!-- news -->
	<div class="news-section py-5">
		<div class="news-section py-3">
	<div class="container py-xl-1 py-lg-1">
		<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Berita 
			<span class="font-weight-bold">Terbaru</span>
		</h3>
		<div class="row news-grids-w3l pt-md-4">
			
		<?php
        $query="SELECT * from tb_berita limit 3";
        $result=$mysqli->query($query);
        $num_result=$result->num_rows;
        $no=0;
        if ($num_result > 0 ) { 
            while ($data=mysqli_fetch_assoc($result)) {
            extract($data);
        ?>
        
        <div class="col-md-4 news-grid mb-4">
				<a href="?hal=berita_detail&id=<?php echo $id_berita ?>">
					<img  src="../assets/berita/<?php echo $gambar; ?>" class="img-fluid" alt="" style="width:100%;height:300px;"/>
				</a>
				<div class="news-text">
					<div class="news-events-agile event-colo1 py-2 px-3">
						<h5 class="float-left">
							<a href="?hal=berita_detail&id=<?php echo $id_berita ?>" class="text-white" style="float:right;"><?php echo tgl_indo_berita($tanggal); ?></a>
						</h5>
						<div class="clearfix"></div>
					</div>
					<div class="detail-bottom">
						<h6 class="my-3">
							<a href="?hal=berita_detail&id=<?php echo $id_berita ?>" class="text-dark">
								<?php echo $judul ?>
							</a>
						</h6>
						<p><?php echo substr(strip_tags($isi),0,100)."..."; ?>
							<a href="?hal=berita_detail&id=<?php echo $id_berita ?>" class="btn btn-primary btn-sm" >Selengkapnya</a>
						</p>

					</div>
				</div>
			</div>
        <?php }} ?>
		</div>
	</div>
</div>
	</div>
	<!-- //news -->

	<!-- footer -->
	<footer>
	<?php include('footer.php'); ?>	
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- banner slider -->
	<script src="js/slider.js"></script>
	<!-- //banner slider -->

	<!-- testimonial-plugin -->
	<script src="js/mislider.js"></script>
	<script>
		jQuery(function ($) {
			var slider = $('.mis-stage').miSlider({
				//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
				stageHeight: 320,
				//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
				slidesOnStage: false,
				//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
				slidePosition: 'center',
				//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
				slideStart: 'mid',
				//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
				slideScaling: 150,
				//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
				offsetV: -5,
				//  Center slide contents vertically - Boolean. Default: false
				centerV: true,
				//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
				navButtonsOpacity: 1,
			});
		});
	</script>
	<!-- //testimonial-plugin -->

	<!-- numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //numscroller-js-file -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/edulearn.js"></script>
	<!-- //Js files -->
</body>
</html>