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
	        <div class="col s12 center">
	          <h3>Our specialties received an MAA in 14 countries. </h3>
	          <p>Lorem ipsum dolor sit amet, consecteteur adipiscing elit primis. Tellus, id sociosqu euismod pulvinar dolor odio sodales.
</p>
	        </div>
        </div><!--SUBTITLE-->
          <div class="carousel  center" data-indicators="true">
          
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

              <!-- Modal Structure -->
              <div id="modal3" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <div class="row">
                    <div class="col s12">
                      <div class="card">
                        <div class="card-content">
                          Our specialties received an MAA in 14 countries.
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
       <div class="row margin-bottom" id="product-line" style="opacity: 0;">
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
       	</div><!--PRODUCT LINE-->
       	
        



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
      
        <div class="col s12 m7 offset-l1">
          <h3>High quality through trusted partners</h3>
        </div>
    
        <div class="col s12 m6 offset-l1">
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
    <footer class="page-footer grey darken-2">
    	<div class="container grey-text">
      	<div class="row">
      		<div class="col l4">
        			<h2 class="">Headquarters</h2>
			            <h3 class="">MEDILAB International UAE</h3>
			           <p class="emphase">Office 12, Floor 7, Amenity center, Tower 1, <br/>Al Jazeera Al Hamra Ras Al Khaimah, P.O. Box 2436, United Arab Emirates<br/>
			            Phone : <a href="tel:+44 20 7554 2222">+44 20 7554 2222</a><br/>
			            Fax : +44 20 7554 2201<br/>
			            Mail : <a href="mailto:uae@medilab.one">uaeb@medilab.one</a></p>
			            <p class="">Certificate of incorporation <a href="assets/doc/COI-MEDILAB INTERNATIONAL LTD.pdf" target="_blank"><i class="tiny material-icons">&#xE89E;</i></a></p>
     			</div><!--COL 1-->
      	<div class="col l4">
        <h2 class="">Europe branches</h2>

            <h3 class="">MEDILAB International UK</h3>
           <p class="emphase">41 Chalton Street, London, United Kingdom, NW1 1jD<br/>
            Phone : <a href="tel:+44 20 7554 2222">+44 20 7554 2222</a><br/>
            Fax : +44 20 7554 2201</br>
            Mail : <a href="mailto:uk@medilab.one">uk@medilab.one</a>


            <h3 class="">MEDILAB Belgium SPRL</h3>
            <p class="emphase">Av de Roodebeek 131, 1030 Schaerbeek, Bruxelles Belgium<br/>
            Phone : <a href="tel:+32 49 21 66 161">+32 49 21 66 161</a><br/>
            Mail : <a href="mailto:medilab@medilab.one">medilab@medilab.one</a></p>
          </div><!--COL 2-->
      <div class="col l4">
        <h2 class="">Africa branch</h2>
            <h3 class="">Medilab UK Intl filial</h3>
          	<p class="emphase">Hann Mariste, Villa 11, Dakar Senegal<br/>
            Phone : <a href="tel:+32 49 21 66 161">+32 49 21 66 161</a><br/>
            Mail : <a href="mailto:senegal@medilab.one">senegal@medilab.one</a></p>
            <h3 class="">Training School</h3>
            <i class="emphase">Coming soon</i>
          </div><!--COL 3-->
 			</div>		
 		</div><!--PAGE FOOTER-->
      <div class="footer-copyright center-align">
         <div class="container grey-text">
         &copy&nbspCopyright 2017. All rights reserved
         <span>|</span>
         <a class="modal-trigger grey-text" href="#modal1" >Legal informations</a>
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content left-align">
                <h2>Legal informations</h2>
                	<h3 class="">Certificate of incorporation </h3>
						<p>In accordance with RAK International Corporate Center Business Companies Regulations 2016, our Certificate of Incorporation is viewable below</p>
						<a href="assets/doc/COI-MEDILAB INTERNATIONAL LTD.pdf" target="_blank"><i class="material-icons">&#xE89E;</i></a> <br/><br/>
     			      <h3>Location of Website Host</h3>
                  <p>One.com A/S <br/>Mailing Address: Kalvebod Brygge 24, Koebenhavn V 1560 DK<br/>
Phone: +45.46907100<br/>Email:hostmaster@one.com</p>
                </div>
                <div class="modal-footer ">
                  <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
                </div>
              </div><!--MODAL 1-->
         <span>|</span>

         <a class="modal-trigger grey-text" href="#modal2" >Terms of use</a>
            <div id="modal2" class="modal modal-fixed-footer">
                <div class="modal-content left-align">
                  <h2>Medilab Terms of Service</h2>
						<h3>1. Terms</h3>
						<p>By accessing the website at <a href="http://www.medilab.one">http://www.medilab.one</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
						<h3>2. Use License</h3>
						<ol type="a">
						   <li>Permission is granted to temporarily download one copy of the materials (information or software) on Medilab's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
						   <ol type="i">
						       <li>modify or copy the materials;</li>
						       <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
						       <li>attempt to decompile or reverse engineer any software contained on Medilab's website;</li>
						       <li>remove any copyright or other proprietary notations from the materials; or</li>
						       <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
						   </ol>
						    </li>
						   <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by Medilab at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
						</ol>
						<h3>3. Disclaimer</h3>
						<ol type="a">
						   <li>The materials on Medilab's website are provided on an 'as is' basis. Medilab makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
						   <li>Further, Medilab does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
						</ol>
						<h3>4. Limitations</h3>
						<p>In no event shall Medilab or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Medilab's website, even if Medilab or a Medilab authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
						<h3>5. Accuracy of materials</h3>
						<p>The materials appearing on Medilab website could include technical, typographical, or photographic errors. Medilab does not warrant that any of the materials on its website are accurate, complete or current. Medilab may make changes to the materials contained on its website at any time without notice. However Medilab does not make any commitment to update the materials.</p>
						<h3>6. Links</h3>
						<p>Medilab has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Medilab of the site. Use of any such linked website is at the user's own risk.</p>
						<h3>7. Modifications</h3>
						<p>Medilab may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
						<h3>8. Governing Law</h3>
						<p>These terms and conditions are governed by and construed in accordance with the laws of United Kingdom and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
					</div>
       <div class="modal-footer ">
         <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
       </div><!--Modal Footer-->
     </div><!--MODAL 2-->

      </div>
      </div><!--FOOTER COPYWRITE-->
    </footer><!--FOOTER END-->
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="libs/EasyAutocomplete/jquery.easy-autocomplete.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
