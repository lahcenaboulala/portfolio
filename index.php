
<?php 

$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "post"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "lahcen.tri@gmail.com";
    $headers = "From: . $email ." . "\r\n";

    // if (isset($name) && isset($email) && isset($subject) && isset($message))
    // {

    mail($to,$subject,$message,$headers);
      
}

if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['subject']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"PrimFX.com"<support@primfx.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
        <html>
            <body>
                <div align="center">
                    <img src="http://www.primfx.com/mailing/banniere.png"/>
                    <br />
                    <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
                    <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
                    <br />
                    '.nl2br($_POST['message']).'
                    <br />
                    <img src="http://www.primfx.com/mailing/separation.png"/>
                </div>
            </body>
        </html>
        ';

        mail("lahcen.tri@gmail.com",$_POST['subject'], $message, $header);
        $msg="Votre message a bien été envoyé !";
    }
    else
    {
        $msg="Tous les champs doivent être complétés !";
    }

?>

<?php
session_start();

if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}


if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";
}else{
 include "lang_en.php";
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>lahcen Personal</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!-- work -->
	
	<!-- end work -->
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	 
	
	

	<!-- Start Preloader Area -->
	<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>
	<!-- End Preloader Area -->


	<!-- Start Header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class=""><a class="active" href="index.html"><?= _HOME ?></a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.php"><?=_CONTACT ?></a></li>
						<li>
						<script>
                  function changeLang(){
                  document.getElementById('form_lang').submit();
                    }
        </script>
					<form method='get' action='' id='form_lang' >
   <select name='lang' onchange='changeLang();' >
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
   <option value='fr' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected"; } ?> >frensh</option>
  </select>
           </form>
           </li>

					</ul>
		
					
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	


	<!-- start banner Area -->
	<section class="home-banner-area">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s"><? _ME ?></div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">lahcen aboulala</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
						<span class="developer"><?= _JOB ?></span>
					</div>
					<a href="contact.html" class="primary-btn" data-text="contact-me">
						<span>C</span>
						<span>O</span>
						<span>N</span>
						<span>T</span>
						<span>A</span>
						<span>C</span>
						<span>T</span>
						<span>-</span>
						<span>M</span>
						<span>E</span>
					</a>
				</div>
				<div class="banner-img col-lg-6 col-md-6 align-self-end">
					<img class="img-fluid" src="img/my pic.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


	<!-- Start brands Area -->
	
	<!-- End brands Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-between">
     
   
				<div class="col-lg-12 col-md-12 about-right" >

					<div class="section-title">
						<h2><?=_about?></h2>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p>
						<?= _description?>
						</p>
					</div>
					
					<a href="https://lahcenaboulala.github.io/cv/" class="primary-btn" data-text="cv">
						<span>c</span>
						<span>v</span>
						
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->


	<!-- Start Work Area Area -->
	
	
<section class="work-area section-gap-top section-gap-bottom-90" id="work">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Latest Works</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see
							some for as low as $.17 each.</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="filters">
						<ul>
							<li class="active" data-filter=".all"></li>
							
						</ul>
					</div>
				</div>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/randonne.png" alt="">
							</div>
							
							<div class="middle">
								<h4>animation</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/slack.png" alt="">
							</div>
							<div class="middle">
								<h4>slack</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/screenshot.png" alt="">
							</div>
							<div class="middle">
								<h4>challenge master</h4>
								<div class="cat">Css</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/youcode.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/youcode.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/youcode.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->
<!-- End Work Area Area -->


	<!-- Start Job History Area Area -->
	<section class="job-area section-gap-top section-gap-bottom-90">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>EDUCATION</h2>
						<p>.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>apprenant </h4>
								<p>Youcode</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="oct '15 to Present">
									<span>2</span><span>0</span><span>1</span><span>8</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
							apprenant dans youcode ecole de programmation à youssoufia
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>TS</h4>
								<p>réseau informatique</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="SEP '15 to juin">
									<span>S</span><span>E</span><span>P</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>J</span><span>U</span><span>I</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
							titulaire d'un diplome technicien spécialisé en réseau informatique à ntic
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>bac science </h4>
								<p>physique</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="sep '15 to juin">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
							titulaire d'un baccalauréat à lycéé kachkat à youssoufia
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>cisco</h4>
								<p>certificat ccna et ccnp</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="oct '15 to avril">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
							j'ai des certificat ccna et ccnp à youssoufia skills 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Job Historyt Area Area -->


	<!-- Start Service Area -->
	<section class="service-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Service Offers</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see
							some for as low as $.17 each.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s">
						<span class="lnr lnr-screen"></span>
						<h4>
							<span>Web</span> Design
						</h4>
						<p>adobe XD , adobe photoshop </p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" id="databas" data-wow-duration="1s" data-wow-delay="0.4s">
						<span class="lnr lnr-database"></span>
						<h4><span>Web</span> Development
						</h4>
						<p>database
						 mysql.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<span class="lnr lnr-chart-bars"></span>
						<h4><span>Web</span> Development
						</h4>
						<p>html , css , js , php ,python.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service Area -->


	

	<!-- Start Contact Area -->
	<section class="contact-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-title">
						<h2>Contact Me</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see
							some for as low as $.17 each.</p>
					</div>
				</div>
			</div>

			<div class="row mt-80">
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4>+212638724264</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4>lahcen.tri@gmail.com</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4>lahcenaboulala.ma</h4>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="contact.php" class="primary-btn mt-50" data-text="contact-me">
						<span>C</span>
						<span>O</span>
						<span>N</span>
						<span>T</span>
						<span>A</span>
						<span>C</span>
						<span>T</span>
						<span>-</span>
						<span>M</span>
						<span>E</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->



	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer-top flex-column">
						<div class="footer-logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer-social">
							<a href="https://www.facebook.com/lahcen.aboulalaa"><i class="fab fa-facebook"></i></a>
							<a href="https://twitter.com/lahcen_tri"><i class="fab fa-twitter"></i></a>
							<a href="http://www.viadeo.com/p/0022ctbj9o1h78a"><i class="fab fa-viadeo"></i></a>
							<a href="https://www.linkedin.com/in/lahcen-aboulala-0a91a884/"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/mn-accordion.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>