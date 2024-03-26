<?php include_once 'header.php'; 

function get_speakers($con)
{
	$sql_select_speaker = "select * from speakers";
	$sql_data = mysqli_query($con,$sql_select_speaker);
	return $sql_data;
}

$sql_data = get_speakers($con);
$sql_data1 = get_speakers($con);
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
									<span class="sub-title">ShaShiSha  events</span>
									<h2 class="big-title">ShaShiSha  <strong>Events speakers</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">speakers</li>
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





		<!-- speaker-section - start
		================================================== -->
		<section id="speaker-section" class="speaker-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/speaker/Black-White-Dubai-Wallpaper.jpg);">
				<div class="overlay-white">
					<div class="container">

						<!-- speaker-carousel - start -->
						<div class="speaker-carousel">
							<div class="slider-for">

							<?php while($row = mysqli_fetch_assoc($sql_data1)) { ?>
								<div class="item">
									<div class="row">
										<!-- speaker-image - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-image image-wrapper text-center">
												<img src="assets/images/speaker/<?php echo $row['image']; ?>" alt="Image_not_found">
											</div>
										</div>
										<!-- speaker-image - end -->

										<!-- speaker-content - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-content">

												<!-- section-title - start -->
												<div class="section-title text-left mb-50">
													<span class="line-style"></span>
													<small class="sub-title">Shashisha staffs</small>
													<h2 class="big-title">Professional <strong>Speakers</strong></h2>
												</div>
												<!-- section-title - end -->

												<div class="speaker-info">
													<div class="speaker-title mb-30">
														<span class="speaker-name"><strong><?php echo $row['speaker_name']; ?></strong></span>
														<span class="work-experienc yellow-color"><strong><?php echo $row['experience']; ?></strong> experienced</span>
													</div>
													<p class="black-color mb-30">
														<!-- <?php echo $row['details']; ?> -->
													</p>
													
												</div>

											</div>
										</div>
										<!-- speaker-content - end -->

									</div>
								</div>
							<?php } ?>

							</div>

							<div class="slider-nav">

								<?php while($row = mysqli_fetch_assoc($sql_data)) { ?>
									<div class="item">
										<div class="item-content">
											<span class="speaker-thumbnail">
												<img src="assets/images/speaker/<?php echo $row['image']; ?>" alt="Image_not_found">
											</span>
											<h3 class="speaker-name"><?php echo $row['speaker_name']; ?></h3>
											<!-- <span class="sub-title"><?php echo $row['speaker_name']; ?> Speaker</span> -->
										</div>
									</div>
								<?php } ?>
							

							</div>
						</div>
						<!-- speaker-carousel - end -->

					</div>
				</div>
			</div>
		</section>section - end
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
