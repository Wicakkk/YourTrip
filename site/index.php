
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PORTAL WISATA</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">HALAMAN UTAMA</a></li>
								<li><a href="index-1.html">DESTINASI</a></li>
								<li><a href="index-2.html">BELI TIKET</a></li>
								<li><a href="index-3.html">INFO</a></li>
								<li><a href="index-4.html">TENTANG KAMI</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/dufan.png">
					<div class="caption fadeIn">
						<h2>DUFAN</h2>
						<div class="price">
							MULAI DARI
							<span>Rp 210.000 </span>
						</div>
						<a href="#">LIHAT LEBIH LANJUT</a>
					</div>
				</div>
				<div data-src="images/seaworld.png">
					<div class="caption fadeIn">
						<h2>Sea World</h2>
						<div class="price">
							MULAI DARI
							<span>Rp 85.000</span>
						</div>
						<a href="#">LIHAT LEBIH LANJUT</a>
					</div>
				</div>
				<div data-src="images/tamanmini.png">
					<div class="caption fadeIn">
						<h2>Taman Mini</h2>
						<div class="price">
							MULAI DARI
							<span>Rp 50.000</span>
						</div>
						<a href="#">LIHAT LEBIH LANJUT</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/jakartaaquarium1.jpg" alt="">
						<div class="label">
							<div class="title">Jakarta Aquarium</div>
							<div class="price">MULAI DARI<span>Rp 115.000</span></div>
							<a href="#">LIHAT LEBIH LANJUT</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/museummoja1.jpg" alt="">
						<div class="label">
							<div class="title">MUSEUM MOJA</div>
							<div class="price">MULAI DARI<span>Rp 150.000</span></div>
							<a href="#">LIHAT LEBIH LANJUT</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/cat.png" alt="">
						<div class="label">
							<div class="title">The Cat Cabin</div>
							<div class="price">MULAI DARI<span>Rp 72.000</span></div>
							<a href="#">LIHAT LEBIH LANJUT</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Forum Pemesanan	</h3>
					<form id="bookingForm" action="kirim.php" method="POST">
						<div class="fl1">
							<div class="tmInput">
								<input name="Nama" placeHolder="Nama:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Usia" placeHolder="Usia" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Email" placeHolder="Email" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							<div class="tmInput mr0">
								<input name="Destinasti" placeHolder="Destinasi	" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort</p>
							<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
							<span>Cheap</span>
							<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Standart</span>
							<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Lux</span>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>0</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="Pesan" placeHolder="Message" data-constraints='@NotEmpty @Required'></textarea>
						</div>
								<!-- ... Form fields ... -->
								<input type="hidden" name="action" value="create">
								<input type="submit" value="Submit" id="bookingForm">
							
						</div>
					</form>
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="images/tamanmini." alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>Mari meresapi keajaiban dan keunikannya di setiap sudut destinasi yang telah kami pilih dengan cermat.</p>
						Di sini, kami membuka pintu menuju pengalaman liburan tak terlupakan.
					</div>
					<div class="clear cl1"></div>
					<p>Temukan destinasi impian Anda, rencanakan perjalanan Anda, dan rasakan kegembiraan setiap momen..</p>
					<p>Kami hadir untuk menjadi mitra perjalanan Anda dalam mewujudkan kisah petualangan yang unik. Mari mulai menjelajahi dunia bersama-sama!</p>
					kami berkomitmen untuk memberikan pengalaman liburan tanpa batas. 
					<blockquote class="bq1">
					</blockquote>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/jquery.placeholder.min.js"></script>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

