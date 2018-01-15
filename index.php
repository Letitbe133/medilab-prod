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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/master.css">
     <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
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

  <!--   </section><!--SECTION ACTIVITIES-->
      <?php include("private/views/network.php") ?> 

      <section id="products" class="section scrollspy">
      	<div class="container">
        <div class="row">
          <div class="col s12 ">
            <h2 class="dark-green">Products</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
         </div><!--TITLE-->
        <div class="row">
	        <div class="col s12 m7 offset-m1">
	          <h3>Our specialties received an MAA in 14 countries. </h3>
	        
	          <p>We are flexible and provide tailormade solutions suited to our clients' needs amongst which :</p>
	          </div>
	          <ul class="card-panel  col s12 m4 center" id="staggered4" >
					<li style="opacity:0; "><h3>Customized labelling and packing</h3><i class="material-icons">&#xE8DC;</i></li>	
					<li style="opacity:0;"><h3>Medical kits</h3><i class="material-icons">&#xE8DC;</i></li>	
					<li class="padding-bottom" style="opacity:0;"><h3>Groupage</h3><i class="material-icons">&#xE8DC;</i></li>	
					          
	          </ul>	
	               
	        </div>
        <!--SUBTITLE-->
        <div class="col s12 card-panel grey lighten-3">
          <div class=" carousel  center" data-indicators="true">
          
    <a class="carousel-item " href="#one!"><img class="responsive-img "  src="assets/img/produits/carousel/amlodimed_10.jpg"></a>
    <a class="carousel-item" href="#two!"><img class= "responsive-img" src="assets/img/produits/carousel/amlodimed_5.jpg"></a>
    <a class="carousel-item" href="#three!"><img class="responsive-img" src="assets/img/produits/carousel/atenomed_100.jpg"></a>
    <a class="carousel-item" href="#four!"><img class="responsive-img" src="assets/img/produits/carousel/atenomed_50.jpg"></a>
    <a class="carousel-item" href="#five!"><img class="responsive-img"  src="assets/img/produits/carousel/ciproflox_500.jpg"></a>
    <a class="carousel-item" href="#five!"><img class="responsive-img" src="assets/img/produits/carousel/ciproflox_750.jpg"></a>
  </div>

        <div class="container col s8 offset-s2">
                <p class="center-align">
                  <!-- Modal Trigger -->
                  <!-- <button id="amm" class="btn waves-effect waves-light" data-target="modal3">More...</button> -->
                  <button class=" btn-large btn waves-effect waves-light" data-target="modal3">Browse our products list</button>
                </p>
              </div>
</div>
              <!-- Modal Structure -->
              <div id="modal3" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <div class="row">
                    <div class="col s12">
                      <div class="card">
                        <div class="card-content">
                         <h3> Our specialties received an MAA in 14 countries.</h3>
                          <div class="">
                            <ul id="productsList" class="collapsible" data-collapsible="accordion">
                            <?php

                              $json_source = file_get_contents('products.json');
                              $gamme = json_decode($json_source);
                              foreach ($gamme->{'mollecule'} as $key) {
                            ?>

                                <li>
                                  <div class="collapsible-header"><?php echo(ucfirst($key->{'name'})); ?></div>
                                  <div class="collapsible-body">
                                    <ul class="<?php echo($key->{'name'}); ?>">
                                    <?php
                                      foreach ($key->{'produits'} as $produit) {
                                    ?>

                                        <li class="btn"><?php echo($produit->{'name'}); ?></li>
                                        <blockquote class="modal-blockquote">
                                          <?php echo("Conditionnement : " . $produit->{'type'});?><br />
                                          <?php echo("Dosage : " . $produit->{'conditionnement'});?><br />
                                          <?php echo("Mollécule : " . $produit->{'description'});?>
                                        </blockquote>

                                    <?php
                                      }
                                    ?>
                                    
                                    </ul>
                      
                                  </div>
                                </li>
                            
                            <?php
                              }

                            ?>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
                </div>
              </div>

            </div>
       
       <div class="row margin-top margin-bottom" id="product-line" style="opacity: 0;">
       	 
	        <div class="col s12 center">
	          <h3>Our product line 2018 </h3>
	        
	          <p>(click on thumbnails to enlarge) </p>
	          </div>
	 
       	
         <div class=" col l10 offset-l1">
	         <div class=" col s12 m3 ">      		
						<img id="products2018-1" class="card-panel materialboxed responsive-img" width=""  src="assets/img/produits/gamme2018/Gamme1.jpg">	
				</div><!--PRODUCT IMG 1-->
				<div class="col s12 m3 "> 
						<img id="products2018-2" class="card-panel materialboxed  responsive-img" width=""  src="assets/img/produits/gamme2018/Gamme2.jpg">
	      	</div><!--PRODUCT IMG 2-->	
	
	 
	      	<div class="col s12 m3 "> 
						<img id="products2018-3" class=" card-panel materialboxed  responsive-img" width="" src="assets/img/produits/gamme2018/Gamme3.jpg">
				</div><!--PRODUCT IMG 3-->
				<div class="col s12 m3 "> 
						<img id="products2018-4" class="card-panel materialboxed  responsive-img" width="" src="assets/img/produits/gamme2018/Gamme4.jpg">      		
	      	</div><!--PRODUCT IMG 3-->
       	 </div>
       	</div>       	<!--PRODUCT LINE-->

        



	       </div><!--PRODUCT FORM-->
        </div><!--PRODUCTS-->
      </section><!--SECTION PRODUCTS-->

      <section id="partners" class="grey lighten-3 section scrollspy padding-top  ">
		<div class="container padding-bottom">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">Partners</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row">
      
        <div class="col s12 m7 offset-m1">
          <h3>High quality through trusted partners</h3>
        </div>
    
        <div class="col s12 m6 offset-m1">
          <p>We strive for building fair and close bounds with manufacturers of pharmaceuticals goods that comply with our quality standards.<br/><br>
            Medilab only collaborates with suppliers that are pre-qualified by us and meet the GMP and GDP norms laid by the <a href="http://www.who.int/en/" target=blank>World Health Organization</a>.<br/><br>
            The process covers screening of documentation, assessment of products along with site and on-site audits.
            </p>
        </div>

        <div class="col s12 m3 offset-m1 center-align">
        <h3>Visit the websites of our partners</h3>
			<div class="card-panel logo col s12  center-align">
              <a href="http://www.ubipharm.com" target="_blank"><img class="responsive-img" src="assets/img/logos/logo-ubipharm.png" alt="logo-ubipharm"  ></a>
            </div>
            <div class="card-panel logo col s12 center-align">
              <a href="http://www.ds-promo.fr" target="_blank"><img class="responsive-img" src="assets/img/logos/Logo-DS.png" alt="" ></a>
            </div>        
        </div>
        </div>

        </div>
      </section><!--SECTION PARTNERS-->
      <section id="contact" class="section container scrollspy">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">Contact us</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row center">
          <form class="col s12 l10 offset-l1" action="#contact" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="name" name="name" type="text" class="validate">
                <label for="name">Your name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input placeholder="My company" id="company" name="company" type="text" class="validate">
                <label for="company">Your company</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate">
                <label for="email">Your email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">subject</i>
                <input placeholder="Subject of your message" id="subject" name="subject" type="text" class="validate">
                <label for="subject">How can we help ?</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea placeholder="Tell us more..."id="message" type="text" name="message" class="materialize-textarea"></textarea>
                <label for="message">Your message</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 offset-l4 center-align">
                <button class="btn waves-effect waves-light pulse" type="submit" name="submit">Send message
                  <i class="material-icons right">send</i>
                </button>
              </div>
              <div class="feedback col s10 offset-s1 center-align">
                <?php echo $feedback; ?>
              </div>
            </div>
          </form>
        </div>
      </section><!--SECTION CONTACT-->
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
