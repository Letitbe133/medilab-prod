<?php
  require_once('contact.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<!--[if lt IE 9]>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> 
	<![endif]-->
    <title>Medilab</title>
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Medilab, Bridging talents" />
	<meta property="og:site_name" content="Medilab">
	<meta property="og:url" content="http://www.medilab.one/" />
	<meta property="og:description" content="We bring populations closer to quality products. We continuously strive to offer the best deal, in compliance with existing standards, by offering guarantees on the origin and quality of medicinal compounds." />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.medilab.one/assets/og-img.png" />
  </head>
  <body>
<!-- Header start -->
   	<header>
      <!-- Fixed collapsible menu module start -->
<?php include("private/views/nav.php") ?>
<?php include("private/views/head-slider.php") ?>
     </header><!-- Header end -->
     <main>
<?php include("private/views/about.php") ?>                   
  <!--SECTION ACTIVITIES-->
<?php include("private/views/network.php") ?>       
<?php include("private/views/products.php") ?> 
<?php include("private/views/partners.php") ?> 
<?php include("private/views/contact-form.php") ?>
    </main><!-- Main end -->
<?php include("private/views/footer.php") ?>
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/heights.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <noscript>Please enable Javascript in your browser for correct rendering !</noscript>
  </body>
</html>
