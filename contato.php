<?php 
include("define.php");
$menu_home=" active";
$menu_home_icon=" show";
require_once'header.php';


?>
  
  <section id="contact-us">
	    <div class="container">
	    	<div class="row">
				<div class="col-12 p0">
					<div class="page-location">
						<ul>
							<li><a href="#">
								Home<span class="divider">/</span>
							</a></li>
							<li><a class="page-location-active" href="#">
								Contato
								<span class="divider">/</span>
							</a></li>
						</ul>
					</div>
				</div>
	    	</div>
	    	<div class="contact-us-content">
		        <div class="row">
					<div class="col-md-12">
						<div id='map'></div>
						<script>
						  mapboxgl.accessToken = 'pk.eyJ1IjoiYnJhc2NoaWxlbm8iLCJhIjoiY2wwODk0czgxMDE0azNwcXQ0NWEybjY1YyJ9.Uu0xLAgYZSGcqa0wMcl9Fg';
						const map = new mapboxgl.Map({
						container: 'map',
						// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
						style: 'mapbox://styles/mapbox/streets-v12',
						center: [-46.61501467684595, -23.53765149919462], 
						zoom: 13
						});
						 const marker1 = new mapboxgl.Marker()
						.setLngLat([-46.61501467684595, -23.53765149919462])
						.addTo(map);
						// Add the control to the map.
						map.addControl(
						new MapboxGeocoder({
						accessToken: mapboxgl.accessToken,
						mapboxgl: mapboxgl
						})
						);
						</script>

					</div>
		        </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-9 col-xl-9">
						<div class="contact-from">
							<div class="contact-description">
								<h4 class="contact-description-title">Texto Texto</h4>
								<p class="contact-description-content">Your email address will not be published. Required fields are marked *</p>
							</div>
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputEmail1" class="col-form-label">Name</label>
										<input type="text" class="form-control" id="inputEmail1" placeholder="Name">
									</div>
									<div class="form-group col-md-6">
										<label for="inputEmail4" class="col-form-label">Email</label>
										<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
									</div>
									<div class="form-group col-md-12">
										<label for="exampleFormControlTextarea1" class="col-form-label">Tu Mensaje</label>
										<textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
									</div>
								</div>
								<button type="submit" class="btn btn-primary wd-contact-btn">Enviar</button>
							</form>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 col-xl-3">
						<div class="contact-address-area">
							<h4 class="contact-address-title">Address</h4>
							<p class="contact-address-content">Your email address will not be published.
							Required fields are marked *</p>
							<div class="contact-address">
								<div class="media radius-icon-area">
									<div class="radius-icon">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="media-body radius-content">
										13 rua Miller, Sao Paulo, SP
										Sao Paulo, Brasil 
									</div>
								</div>
								<div class="media radius-icon-area">
									<div class="radius-icon">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="media-body radius-content">
										<p><a href="tel:+321123456">+321 123 456</a></p>
										<p><a href="tel:+321123456">+321 123 456</a></p>
									</div>
								</div>
								<div class="media radius-icon-area">
									<div class="radius-icon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="media-body radius-content">
										<p><a href="mailto:#">info@demo.br</a></p>
										<p><a href="mailto:#">demo@demo.br</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</section>
	
  
<?php require 'footer.php';


?>