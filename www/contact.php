<?php

if (isset($_POST["email"]) && isset($_POST["name"])&& isset($_POST["message"])){

	$email=$_POST["email"];

	$name=$_POST["name"];

	$message=$_POST["message"];

	$header = "From : $email\n";

   

		$success = mail("elotrad@yahoo.fr", "Questions ".$name, $message, $header);

		if ($success) {

			$val = ["success", "Votre email a bien été envoyé."];

		} else {

			$val= ["danger", "Echec de l'envoi."];

		}

    

	

}else{

	$val = [];

}

?>



<!DOCTYPE html>

<html lang="en" class="no-js">

  <head>

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <title>Partenaires Particuliers Reims</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="Leven - Resume / CV / vCard Template" />

    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio" />

    <meta name="author" content="lmpixels" />

    <link rel="shortcut icon" href="favicon.ico">



    <link rel="stylesheet" href="css/normalize.css" type="text/css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

    <link rel="stylesheet" href="css/main.css" type="text/css">



    <script src="js/modernizr.custom.js"></script>

  </head>



  <body class="page">

<?php 

if ($val != []){

	echo '<div class="alert alert-'.$val[0].'" role="alert">

	'.$val[1].'

	</div>';

}

?>

    <div class="lm-animated-bg"></div>

    

    <!-- Loading animation -->

    <div class="preloader">

      <div class="preloader-animation">

        <div class="preloader-spinner">

        </div>

      </div>

    </div>

    <!-- /Loading animation -->



    <!-- Scroll To Top Button -->

    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>

    <!-- /Scroll To Top Button -->



    <div class="page-scroll">

      <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">



        <!-- Header -->

        <header id="site_header" class="header">

          <div class="header-content clearfix">

                

            <!-- Text Logo -->

            <div class="text-logo">

              <a href="index.html">

                <img src="./img/logo.png" alt="Logo" width="92" height="auto">
                <img src="./img/logo_qualiopi.png" width="200" height="auto">

               

              </a>

            </div>

            <!-- /Text Logo -->



            <!-- Navigation -->

            <!--<div class="site-nav mobile-menu-hide">

              <ul class="leven-classic-menu site-main-menu">-->

			  

              <nav>
                <ul>
                  <li><a href="contact.php">Contact</a></li>

                  <li><a href="about_me.html">En savoir plus</a></li>
                  
                  <li><a href="index.html">Accueil</a></li>
                </ul>
              </nav>

           <!-- <li class="menu-item menu-item-has-children">

                  <a href="index.html">About Me</a>

                  <ul class="sub-menu">

                    <li class="menu-item">

                      <a href="index.html">About Me 1</a>

                    </li>

                    <li class="menu-item">

                      <a href="index-2.html">About Me 2</a>

                    </li>

                  </ul>

                </li>



                <li class="menu-item">

                  <a href="resume.html">Resume</a>

                </li>



                <li class="menu-item menu-item-has-children">

                  <a href="portfolio.html">Portfolio</a>

                  <ul class="sub-menu">

                    <li class="menu-item">

                      <a href="portfolio-2-columns.html">Portfolio 2 Columns</a>

                    </li>

                    <li class="menu-item">

                      <a href="portfolio.html">Portfolio 3 Columns</a>

                    </li>

                    <li class="menu-item">

                      <a href="portfolio-4-columns.html">Portfolio 4 Columns</a>

                    </li>

                    <li class="menu-item">

                      <a href="portfolio-5-columns.html">Portfolio 5 Columns</a>

                    </li>

                  </ul>

                </li>

                

                <li class="menu-item menu-item-has-children">

                  <a href="blog.html">Blog</a>

                  <ul class="sub-menu">

                    <li class="menu-item">

                      <a href="blog.html">Blog 2 Columns</a>

                    </li>

                    <li class="menu-item">

                      <a href="blog-3-columns.html">Blog 3 Columns</a>

                    </li>

                  </ul>

                </li>-->

				

				<!--<li class="menu-item">

					<a href="about_me.html">About me</a>

				</li>



                <li class="menu-item current-menu-item">

                  <a href="contact.php">Contact</a>

                </li>

              </ul>

            </div>-->

			

            <a class="menu-toggle mobile-visible">

                <i class="fa fa-bars"></i>

            </a>

          </div>

        </header>

        <!-- /Header -->

		

		

        <div id="main" class="site-main">

          <div id="main-content" class="single-page-content">

            <div id="primary" class="content-area">



              <div class="page-title">

                <h1>Contact</h1>

                <div class="bonhomme_3">

                  <img src="./img/3.png" width="150" height="auto">

                </div>

                <div class="bonhomme_2">

                  <img src="./img/2.png" width="110" height="auto">

                </div>

              </div>



              <div id="content" class="page-content site-content single-post" role="main">



                <div class="row">

                  <div class=" col-xs-12 col-sm-4 ">

                        

                    <div id="info_list_1" class="info-list-w-icon">



                      <div class="info-block-w-icon">

                        <div class="ci-icon">

                          <i class="linecons linecons-phone"></i>

                        </div>

                        <div class="ci-text">

                          <h4>06 87 26 13 53</h4>

                          <p>N'hésitez pas à laisser un message ou un sms.</p>

                        </div>

                      </div>



                      <div class="info-block-w-icon">

                        <div class="ci-icon">

                          <i class="linecons linecons-location"></i>

                        </div>

                        <div class="ci-text">

                          <h4>Reims - Paris</h4>

                          <p>Chez vous ou dans nos locaux <br>(zone Farman - 51100)</p>

                        </div>

                      </div>

                      

                      <div class="info-block-w-icon">

                        <div class="ci-icon">

                          <i class="linecons linecons-mail"></i>

                        </div>

                        <div class="ci-text">

							<div class="mail">	

								<a href="mailto:elodie@partenaires-particuliers.fr">elodie@partenaires-particuliers.fr</a>

              </div>	

							<p>Hâte de vous lire. Ecrivez-moi.</p>						      

                        </div>

                      </div>

												  

                    </div>

						

                  </div>





                  <div class=" col-xs-12 col-sm-8 ">



                    <div class="block-title">

                      <h2>Des questions ?</h2>

					  

						<form id="contactForm" action="contact.php" method="post">

							<label for="name"> Nom: </label>

							<input type="text" id="name" name="name" placeholder="Votre nom" required/></br>

							<label for="email"> Email: </label>

							<input type="email" id="email" name="email" placeholder="Votre email" required/></br>

							<label for="message"> Message: </label></br></br>

							<textarea id="message" name="message" rows="10" required></textarea>

							<br /><br />

							<input type="submit" value="Envoyer le message" />

						</form>

					  

                    </div>

				  </div>	

														  

				</div>  

					<div class="float-right">

                  <img src="./img/logo.png" width="100" height="auto">
                  <img src="./img/logo_3.png" width="210" height="auto">
                  <img src="./img/logo_qualiopi.png" width="200" height="auto">

					</div>

                      



                </div>



              </div>

            </div>

          

        </div>



        <footer class="site-footer clearfix">

          

              

          <div class="footer-copyrights">

            <p>© 2021 Partenaires Particuliers.</p>

          </div>

        </footer>

        

      </div>

    </div>



    <script src="js/jquery-2.1.3.min.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="js/bootstrap.min.js"></script>

    <script src='js/jquery.shuffle.min.js'></script>

    <script src='js/masonry.pkgd.min.js'></script>

    <script src='js/owl.carousel.min.js'></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>

    <script src="js/jquery.googlemap.js"></script>

    <script src="js/validator.js"></script>

    <script src="js/main.js"></script>

	

  </body>

  

</html>

