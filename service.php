<?php include_once 'header.php'; 
function services($con)
{
     $sql_select_services = "select * from ourservices";
	$service_data = mysqli_query($con,$sql_select_services);
	return $service_data;
}

$service_data = services($con);
?>


		<!-- breadcrumb-section - start
		================================================== -->
		<section id="breadcrumb-section" class="breadcrumb-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-12 col-sm-12">

								<!-- breadcrumb-title - start -->
								<div class="breadcrumb-title text-center mb-50">
									<span class="sub-title">what we can do</span>
									<h2 class="big-title">ShaShiSha  <strong>services</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index-1.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item"><a href="#!" class="breadcrumb-link">About</a></li>
										<li class="breadcrumb-item active" aria-current="page">services</li>
									</ul>
								</div>
								<!-- breadcrumb-list - end -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->





		<!-- service-section - start
		================================================== -->
		<section id="service-section" class="service-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- service-wrapper - start -->
				<div class="service-wrapper">

					<!-- service-item - start -->
					<div class="service-item clearfix">
						<div class="service-image float-left">
							<div class="big-image">
								<img src="assets/images/service/1.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/service/1.1.image.png" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-right">
							<div class="service-title mb-30">
								<h2 class="title-text"></h2>
								<span class="service-price">price start from $52.00</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">conference event</a>
							</div>
						</div>
					</div>
					<!-- service-item - end -->

					<!-- service-item - start -->
					<!-- <div class="service-item clearfix">
						<div class="service-image float-right">
							<div class="big-image">
								<img src="assets/images/service/2.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/service/2.2.image.png" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-left">
							<div class="service-title mb-30">
								<h2 class="title-text">Festival <strong>Musical</strong></h2>
								<span class="service-price">price start from $52.00</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">musical event</a>
							</div>
						</div>
					</div> -->
					<!-- service-item - end -->

					<!-- service-item - start -->
					<!-- <div class="service-item clearfix">
						<div class="service-image float-left">
							<div class="big-image">
								<img src="assets/images/service/3.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/service/3.3.image.png" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-right">
							<div class="service-title mb-30">
								<h2 class="title-text">Kid’s <strong>Play Ground & Party</strong></h2>
								<span class="service-price">price start from $52.00</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">playground event</a>
							</div>
						</div>
					</div> -->
					<!-- service-item - end -->

					<!-- service-item - start -->
					<!-- <div class="service-item clearfix">
						<div class="service-image float-right">
							<div class="big-image">
								<img src="assets/images/service/4.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/service/4.4.image.png" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-left">
							<div class="service-title mb-30">
								<h2 class="title-text">Party <strong>Wedding & Birtday</strong></h2>
								<span class="service-price">price start from $52.00</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">party event</a>
							</div>
						</div>
					</div> -->
					<!-- service-item - end -->

				</div>
				<!-- service-wrapper - end -->

			</div>
		</section>
		<!-- service-section - end
		================================================== -->





		<!-- special-offer-section - start
		================================================== -->
		<section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
			<div class="container">
				<div class="row">

					<!-- special-offer-content - start -->
					<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="special-offer-content">
							<h2><strong>30%</strong> Off in June~July for <span>Birthday Events</span></h2>
							<p class="m-0">
								Contact us now and we will make your event unique & unforgettable
							</p>
						</div>
					</div>
					<!-- special-offer-content - end -->

					<!-- event-makeing-btn - start -->
					<div class="col-lg-3 col-md-12 col-sm-12">
						<div class="event-makeing-btn">
							<a href="#!">make an event now</a>
						</div>
					</div>
					<!-- event-makeing-btn - end -->

				</div>
			</div>
		</section>
		<!-- special-offer-section - end
		================================================== -->





		<!-- google map - start
		================================================== -->
		<section id="map-section" class="map-section clearfix">
			<div class="address-wrapper">

				<!-- address-info-topbar - start -->
				<div class="address-info-topbar mb-30 clearfix">
					<div class="address-info-left">
						<h3 class="title-text">ShaShiSha  event management</h3>
						<p class="m-0">
							Apple Store, 112 Prince St New York,
							NY 10012, United States 80361,
							United States
						</p>
					</div>

					<div class="address-info-right">
						<ul>
							<li>
								<button type="button">
									<span class="icon"><i class="fas fa-street-view"></i></span>
									<small>Direction</small>
								</button>
							</li>
							<li>
								<button type="button">
									<span class="icon"><i class="fas fa-rss"></i></span>
									<small>Save</small>
								</button>
							</li>
						</ul>
					</div>
				</div>
				<!-- address-info-topbar - end -->

				<!-- address-info-bottombar - start -->
				<div class="address-info-bottombar clearfix">
					<div class="address-info-left">
						<div class="rating-star">
							<span class="rating-point">4.5</span>
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half"></i></li>
							</ul>
						</div>
						<p class="m-0">105 reviews</p>
					</div>

					<div class="address-info-right">
						<button type="button" class="map-larger-btn">
							view larger map
						</button>
					</div>
				</div>
				<!-- address-info-bottombar - end -->
					
			</div>
			<div id="google-map">
				<div id="googleMaps" class="google-map-container"></div>
			</div>
		</section>
		<!-- google map - end
		================================================== -->
<?php include_once 'footer.php'; ?>