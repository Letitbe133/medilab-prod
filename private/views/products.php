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
			    <a class="carousel-item " href="#one!"><img class="responsive-img "  src="assets/img/produits/carousel/amlodimed_10.jpg" alt="amlodimed-10"></a>
			    <a class="carousel-item" href="#two!"><img class= "responsive-img" src="assets/img/produits/carousel/amlodimed_5.jpg" alt="amlodimed-5"></a>
			    <a class="carousel-item" href="#three!"><img class="responsive-img" src="assets/img/produits/carousel/atenomed_100.jpg" alt="atenomed-100"></a>
			    <a class="carousel-item" href="#four!"><img class="responsive-img" src="assets/img/produits/carousel/atenomed_50.jpg" alt="atenomed-50"></a>
			    <a class="carousel-item" href="#five!"><img class="responsive-img"  src="assets/img/produits/carousel/ciproflox_500.jpg" alt="ciproflox-500"></a>
			    <a class="carousel-item" href="#six!"><img class="responsive-img" src="assets/img/produits/carousel/ciproflox_750.jpg" alt="ciproflox-750"></a>
			</div>
			<div class="container col s8 offset-s2">
				 <p class="center-align">
				<!-- Modal Trigger -->                  
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
						<img id="products2018-1" class="card-panel materialboxed responsive-img" src="assets/img/produits/gamme2018/Gamme1.jpg" alt="gamme2018-1">	
				</div><!--PRODUCT IMG 1-->
				<div class="col s12 m3 "> 
						<img id="products2018-2" class="card-panel materialboxed  responsive-img"  src="assets/img/produits/gamme2018/Gamme2.jpg" alt="gamme2018-2">
	      	</div><!--PRODUCT IMG 2-->	
	      	<div class="col s12 m3 "> 
						<img id="products2018-3" class=" card-panel materialboxed  responsive-img"  src="assets/img/produits/gamme2018/Gamme3.jpg" alt="gamme2018-3">
				</div><!--PRODUCT IMG 3-->
				<div class="col s12 m3 "> 
						<img id="products2018-4" class="card-panel materialboxed  responsive-img"  src="assets/img/produits/gamme2018/Gamme4.jpg" alt="gamme2018-4">      		
	      	</div><!--PRODUCT IMG 3-->
       	 </div>
       	</div><!--PRODUCT LINE-->
      </section><!--SECTION PRODUCTS-->