<!-- <!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/ÔPADALIA/reservation.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 13:38:06 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>ÔPADALIA - Restaurant HTML Template</title>
    <meta name="author" content="themesflat.com" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/icon.png">
</head>

<body class="header-fixed2">

    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div id="wrapper">
        <div id="page" class="clearfix">
            <?php include('includes/header.php'); ?>

           <!-- page-title -->
			<section class="page-title page-title-inner">	
				<div class="overlay-pagetitle"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="page-title-heading">
							<h2 class="heading">Reservation</h2>
						</div>
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Accueil</a></li>
								<li>Reservation</li>
							</ul>
						</div>
					</div>
				</div>
			</section>	
			<!-- page-title -->

			<!-- about-us -->
			<section class="tf-section wrap-reservation">
				<div class="container-fluid cleafix">
					<div class="row">
						
                        <div class="col-box col-30">
                            <div class="image-reservation padding-top134">
                                <img src="assets/img/slider/1.jpg" alt="images">
                            </div>
                        </div>
                        <div class="col-box col-40">
                            <div class="wrap-form-reservation wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1300ms" >
                                <div class="form-reservation">
                                    <div class="overlay"></div>
                                    <form action="sendmail.php" method="post"  class="comment-form" >
                                        <fieldset class="name">
                                            <input type="text" id="name" placeholder="Votre nom complet" class="tb-my-input" name="name" tabindex="1" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="">
                                            <input type="number" id="persons" placeholder="Nombre de personnes" class="tb-my-input" name="persons" tabindex="2" value="" aria-required="true" required="">                       
                                               
                                        </fieldset>
                                        
                                        <fieldset class="">
                                            <input type="date" id="date-booking" placeholder="Date" class="tb-my-input" name="date-booking" tabindex="2" value="" aria-required="true" required="">                       

                                            
                                        </fieldset>                                   
                                        <fieldset class="select">
                                            <select name="time-booking" id="time-booking" required>                       
                                                <option value="">Heure</option>
                                                <option value="Persons 01">11h-14h</option>
                                                <option value="Persons 01">18h-21h</option>
                                            </select>
                                        </fieldset>
                                       
                                        
                                        <fieldset class="email-wrap">
                                            <input type="email" id="email" placeholder="Votre E-mail" class="tb-my-input" name="email" tabindex="1" value="" aria-required="true" required="">
                                        </fieldset>
                                        
                                        <fieldset class="phone-wrap">
                                            <input type="number" id="phone" placeholder="Votre téléphone" class="tb-my-input" name="phone" tabindex="2" value="" aria-required="true" required="">
                                        </fieldset>
										<fieldset>
											<textarea name="msg" id="" cols="5" rows="2"></textarea>
										</fieldset>
                                        <div class="btn-submit">
                                            <button  class=" tf-button color-text color-style1" type="submit" placeholder="Plus de detail">
                                                Réserver maintenant
                                            </button>
										</div>	
                                    </form>
                                </div>                                
                            </div>
                        </div>
						
                        <div class="col-box col-30">
                            <div class="image-reservation style2">
                                <img src="assets/img/slider/2.jpg" alt="images">
                            </div>
                        </div>					
						<div class="popup-thanks">
							<div class="popup-thanks-overlay"></div>
							<div class="popup-thanks-inner">
								<div class="content-popup">
									<i class="fas fa-heart"></i>	
									<p class="title">
										Merci pour la réservation
									</p>
								</div>				
							</div>							
						</div>	
					</div>
				</div>
							
			</section>

            <section class="tf-section wrap-brand-about style3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="swiper-container carousel-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item img-brand">
                                            <a href="home2.html">
                                                <img class="img2" src="assets/img/brand/imgbrand1.png" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item img-brand">
                                            <a href="home2.html">
                                                <img class="img2" src="assets/img/brand/imgbrand2.png" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item img-brand">
                                            <a href="home2.html">
                                                <img class="img2" src="assets/img/brand/imgbrand3.png" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item img-brand">
                                            <a href="home2.html">
                                                <img class="img2" src="assets/img/brand/imgbrand4.png" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item img-brand">
                                            <a href="home2.html">
                                                <img class="img2" src="assets/img/brand/imgbrand5.png" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item img-brand">
                                            <a href="home2.html">
                                                <img class="img2" src="assets/img/brand/imgbrand6.png" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include('includes/footer.php'); ?>