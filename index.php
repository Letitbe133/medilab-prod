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
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Medilab, Bridging talents" />
	<meta property="og:site_name" content="Medilab">
	<meta property="og:url" content="http://www.medilab.one/" />
	<meta property="og:description" content="We bring populations closer to quality products. We continuously strive to offer the best deal, in compliance with existing standards, by offering guarantees on the origin and quality of medicinal compounds." />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.medilab.one/assets/og-img.png" />
	<!--Matomo-->
	<script type="text/javascript">var _paq=_paq||[];_paq.push(['trackPageView']);_paq.push(['enableLinkTracking']);(function(){var u="//analytics.mpaw.xyz/piwik/";_paq.push(['setTrackerUrl',u+'piwik.php']);_paq.push(['setSiteId','8']);var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];g.type='text/javascript';g.async=true;g.defer=true;g.src=u+'piwik.js';s.parentNode.insertBefore(g,s);})();</script>
	<!--End Matomo Code-->
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
    <script type="text/javascript" src="js/heights.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
    <noscript>Please enable Javascript in your browser for correct rendering !</noscript>
  </body>
</html>
