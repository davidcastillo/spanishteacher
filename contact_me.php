<!-- HEADER -->
<?php include 'header/header.php'; ?>

<body class="layout-full-width no-content-padding header-modern sticky-header sticky-white subheader-both-center">

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">

        <!-- Header Wrapper -->
        <div id="Header_wrapper" class="bg-parallax" data-stellar-background-ratio="0.5">

            <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Contact us</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">

                <!-- .sections_group -->
                <div class="sections_group">

                    <div class="entry-content">
                        <div class="section" style="padding-top:50px; padding-bottom:20px; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column ">
                                        <div class="column_attr align_center">
                                            <h2 class="themecolor" style="margin: 0 10% 30px;">Maecenas in diam sit amet nunc sagittis <strong>condi mentum</strong>
												<br>
												eget non tortor nullam orci dui</h2>
                                            <div class="hr_dots hrmargin_b_10">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column ">
                                        <div class="column_attr ">
                                            <h3>Our adress</h3>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/home_school_contact_photo.jpg" alt="" />
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <h4>BeSchool</h4>
                                                <h6 class="hrmargin_b_7">Mit samet et omnia vanitas</h5>
													<p>
														Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt aucto
													</p>
													<p class="hrmargin_b_7">
														<a href="#">Send us e-mail</a>
													</p>
													<p>
														<a href="#" class="arrow_link">Call us: 233 455 775</a>
													</p>
												</div>

												<hr class="no_line hrmargin_b_1" />

												<h3>Send us a message</h3>
												<p class="big">
													Vitae adipiscing turpis. Aenean ligula nibh, molestie Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis.
												</p>
												<div id="contactWrapper" >
											<form id="contactform">
												<div class="column one-second">
													<input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
												</div>
												<div class="column one-second">
													<input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
												</div>
												<div class="column one">
													<input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
												</div>
												<div class="column one">
													<textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
												</div>
												<div class="column one">
													<input type="button" value="Send A Message" id="submit" onClick="return check_values();">
												</div>
											</form>
										</div>

											</div>
										</div>
										<!-- One Second (1/2) Column -->
					<div class="column one-second column_map ">

											<!-- Google map area -->
						<div class="google-map-wrapper no_border">
												<div class="google-map" id="google-map-area-555319009437d" style="width:100%; height:720px;">
													&nbsp;
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section the_content no_content">
								<div class="section_wrapper">
									<div class="the_content_wrapper"></div>
								</div>
							</div>
						</div>

					</div>

					<!-- .four-columns - sidebar -->

				</div>
			</div>

        <!-- #Footer -->
        <?php include 'footer.php'; ?>
        <!-- Footer-->

		</div><!-- #Wrapper -->

		<!-- JS -->
		<script src="../../js/jquery-2.1.4.min.js"></script>

		<script src="../../js/mfn.menu.js"></script>
		<script src="../../js/jquery.plugins.js"></script>
		<script src="../../js/jquery.jplayer.min.js"></script>
		<script src="../../js/animations/animations.js"></script>
		<script src="../../js/scripts.js"></script>

		<script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>
		<script src="../../js/email.js"></script>

		<script>
			function google_maps_555319009437d() {
				var latlng = new google.maps.LatLng(-33.8710, 151.2039);
				var myOptions = {
					zoom : 13,
					center : latlng,
					mapTypeId : google.maps.MapTypeId.ROADMAP,
					styles : [{
						"featureType" : "administrative",
						"elementType" : "labels.text.fill",
						"stylers" : [{
							"color" : "#444444"
						}]
					}, {
						"featureType" : "landscape",
						"elementType" : "all",
						"stylers" : [{
							"color" : "#f2f2f2"
						}]
					}, {
						"featureType" : "poi",
						"elementType" : "all",
						"stylers" : [{
							"visibility" : "off"
						}]
					}, {
						"featureType" : "road",
						"elementType" : "all",
						"stylers" : [{
							"saturation" : -100
						}, {
							"lightness" : 45
						}]
					}, {
						"featureType" : "road.highway",
						"elementType" : "all",
						"stylers" : [{
							"visibility" : "simplified"
						}]
					}, {
						"featureType" : "road.highway",
						"elementType" : "geometry.fill",
						"stylers" : [{
							"color" : "#fff"
						}]
					}, {
						"featureType" : "road.arterial",
						"elementType" : "labels.icon",
						"stylers" : [{
							"visibility" : "off"
						}]
					}, {
						"featureType" : "transit",
						"elementType" : "all",
						"stylers" : [{
							"visibility" : "off"
						}]
					}, {
						"featureType" : "water",
						"elementType" : "all",
						"stylers" : [{
							"color" : "#dde6e8"
						}, {
							"visibility" : "on"
						}]
					}],
					zoomControl : true,
					mapTypeControl : false,
					streetViewControl : false,
					scrollwheel : false
				};
				var map = new google.maps.Map(document.getElementById("google-map-area-555319009437d"), myOptions);
				var marker = new google.maps.Marker({
					position : latlng,
					icon : "images/home_school_pin.png",
					map : map
				});
			}


			jQuery(document).ready(function($) {
				google_maps_555319009437d();
			});
		</script>
        
		<script>
			jQuery(window).load(function() {
				var retina = window.devicePixelRatio > 1 ? true : false;
				if (retina) {
					var retinaEl = jQuery("#logo img.logo-main");
					var retinaLogoW = retinaEl.width();
					var retinaLogoH = retinaEl.height();
					retinaEl.attr("src", "images/retina-school.png").width(retinaLogoW).height(retinaLogoH);
					var stickyEl = jQuery("#logo img.logo-sticky");
					var stickyLogoW = stickyEl.width();
					var stickyLogoH = stickyEl.height();
					stickyEl.attr("src", "images/retina-school.png").width(stickyLogoW).height(stickyLogoH);
				}
			});
			//]]>
		</script>

	</body>

</html>