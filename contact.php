
         <?php include('includes/header.php'); ?>

            <section class="page-title page-title-inner">
                <div class="overlay-pagetitle"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="page-title-heading">
                            <h2 class="heading">Contactez-nous</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="home3.php">Accueil</a></li>
                                <li>Contactez-nous</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section contact-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-box col-45">
                            <div class="infor-contact border-style2">
                                <h4 class="heading">Contactez-nous</h4>
                                <div class="text">
                                    Contactez-nous pour avoir plus d'informations sur un éléments...
                                </div>
                                <div class="widget widget-info flex">
                                    <div class="icon icon-afress">
                                        <i class="icon-ÔPADALIAmap"></i>
                                    </div>
                                    <div class="infor-text">
                                        <h6 class="title">Adresse </h6>
                                        <p>81 avenue du Maréchal Foch 78700 Conflans-Sainte-Honorine</p>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-info flex">
                                    <div class="icon icon-mail">
                                        <i class="icon-ÔPADALIAemail"></i>
                                    </div>
                                    <div class="infor-text">
                                        <h6 class="title">Email </h6>
                                        <p><a href="mailto:contact@ÔPADALIA.fr" class="__cf_email__" data-cfemail="d1a2a4a1a1bea3a591b6bcb0b8bdffb2bebc">contact@ÔPADALIA.fr</a></p>
                                        <p>contact@ÔPADALIA.fr</p>
                                    </div>
                                </div>
                                <div class="widget widget-info style2 flex">
                                    <div class="icon icon-call">
                                        <i class="icon-kababicall"></i>
                                    </div>
                                    <div class="infor-text">
                                        <h6 class="title">Téléphone</h6>
                                        <p><a href="tel:+33 6 20 83 74 68"> +33 6 20 83 74 68</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-box col-55">
                            <div class="form-contact color-bg-style4">
                                <h4 class="heading">Laisser un message</h4>
                                <div class="text">Nous sommes prêt à vous aider</div>
                                <form action="sendmail.php" method="post"  class="comment-form comment-form-style2 style2" >
                                    <fieldset class="name">
                                        <input type="text"  placeholder="Nom complet"  name="name"  required="">
                                    </fieldset>
                                    <fieldset class="email">
                                        <input type="email"  placeholder="Adresse email "  name="email" required="">
                                    </fieldset>
                                    <fieldset class="message">
                                        <textarea  name="message" rows="5" placeholder="Ecrire un Message"   required=""></textarea>
                                    </fieldset>
                                    <div class="btn-submit flat-button flat-button-style2">
                                        <button  name="submit" class="tf-button color-style color-style1" type="submit">
                                            Envoyer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tf-section map">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flat-map">
                               <iframe class="map-content wow fadeInUp animated" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2617.4802400309677!2d2.0998809118685333!3d49.00144787123243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e68a98afac2d21%3A0xa148de47fa4b1973!2s81%20Av.%20du%20Mar%C3%A9chal%20Foch%2C%2078700%20Conflans-Sainte-Honorine%2C%20France!5e0!3m2!1sfr!2sbj!4v1681139909629!5m2!1sfr!2sbj" width="1720" height="655" style="border: 0px; visibility: visible; animation-name: fadeInUp;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           

            <?php include('includes/footer.php'); ?>