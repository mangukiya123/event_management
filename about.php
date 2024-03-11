<?php include_once "header.php";

function comment($con)
    {
    	$sql_select_comment="select * from comment_tables order by id desc limit 0,3";
    	$comment_data = mysqli_query($con,$sql_select_comment);
		return $comment_data;
    } 


function get_speakers($con)
{
	$sql_select_speaker = "select * from speakers";
	$sql_data = mysqli_query($con,$sql_select_speaker);
	return $sql_data;
}

$sql_data = get_speakers($con);
$sql_data1 = get_speakers($con);

$comment_data = comment($con);	

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
									<span class="sub-title">all you need to know</span>
									<h2 class="big-title"><strong>about</strong> Shashisha</h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">about us</li>
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





		<!-- our-management-section - start
		================================================== -->
		<section id="our-management-section" class="our-management-section bg-gray-light sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- section-title - start -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="section-title text-left mb-50 sr-fade1">
							<small class="sub-title">we are Shashisha</small>
							<h2 class="big-title"><strong>No.1</strong> Events Management</h2>
							<a href="#!" class="custom-btn">
								get started!
							</a>
						</div>
					</div>
					<!-- section-title - end -->

					<div class="col-lg-8 col-md-12 col-sm-12">
						<div class="row">

							<!-- management-item - start -->
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="management-item sr-fade2">
									<div class="item-title">
										<h3 class="title-text">
											our mission
										</h3>
									</div>
									<p class="black-color mb-30">
										Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.
									</p>
									<p class="black-color m-0">
										<strong>
											<i>
												Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod.
											</i>	
										</strong>
									</p>
								</div>
							</div>
							<!-- management-item - end -->

							<!-- management-item - start -->
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="management-item sr-fade3">
									<div class="item-title">
										<h3 class="title-text">
											our vission
										</h3>
									</div>
									<p class="black-color mb-30">
										Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.
									</p>
									<p class="black-color m-0">
										<strong>
											<i>
												Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod.
											</i>	
										</strong>
									</p>
								</div>
							</div>
							<!-- management-item - end -->

						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- our-management-section - end
		================================================== -->





		<!-- award-section - start
		================================================== -->
		<section id="award-section" class="award-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- company-age - start -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="company-age sr-fade1" style="background-image: url(assets/images/about/company-age-bg.jpg);">
							<div class="banner-img">
								<img src="assets/images/about/shshisha.jpg" alt="Image_not_found">
							</div>
						</div>
					</div>
					<!-- company-age - end -->

					<div class="col-lg-6 col-md-12 col-sm-12">
						<!-- section-title - start -->
						<div class="section-title text-left mb-80 sr-fade1">
							<small class="sub-title">shashisha awaed</small>
							<h2 class="big-title">Our Winning <strong>Awards</strong></h2>
						</div>
						<!-- section-title - end -->

						<!-- awaed-item-area - start -->
						<div class="awaed-item-area sr-fade2">
							<span class="arrow-up">
								<i class="fas fa-chevron-circle-up"></i>
							</span>
							<span class="arrow-down">
								<i class="fas fa-chevron-circle-down"></i>
							</span>
							<div class="awaed-wrapper">

								<!-- awaed-item - start -->
								<div class="awaed-item">
									<div class="awaed-content">
										<h3 class="awaed-title">
											<span class="awaed-date">aug 2021</span>
											1st Place for Unique Events 2021
										</h3>
										<p class="m-0">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam sed diam nonummy nibh euismod tincidunt.
										</p>
									</div>
								</div>
								<!-- awaed-item - end -->

								<!-- awaed-item - start -->
								<div class="awaed-item">
									<div class="awaed-content">
										<h3 class="awaed-title">
											<span class="awaed-date">may 2022</span>
											2nd Winner Best New Years Events
										</h3>
										<p class="m-0">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam sed diam nonummy nibh euismod tincidunt.
										</p>
									</div>
								</div>
								<!-- awaed-item - end -->

								<!-- awaed-item - start -->
								<div class="awaed-item">
									<div class="awaed-content">
										<h3 class="awaed-title">
											<span class="awaed-date">dec 2023</span>
											1st Place International Events Awards 
										</h3>
										<p class="m-0">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam sed diam nonummy nibh euismod tincidunt.
										</p>
									</div>
								</div>
								<!-- awaed-item - end -->

								<!-- awaed-item - start -->
								<!-- <div class="awaed-item">
									<div class="awaed-content">
										<h3 class="awaed-title">
											<span class="awaed-date">aug 2015</span>
											1st Place for Unique Events 2018
										</h3>
										<p class="m-0">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam sed diam nonummy nibh euismod tincidunt.
										</p>
									</div>
								</div> -->
								<!-- awaed-item - end -->

								<!-- awaed-item - start -->
							<!-- 	<div class="awaed-item">
									<div class="awaed-content">
										<h3 class="awaed-title">
											<span class="awaed-date">may 2014</span>
											1st Winner Best New Years Events
										</h3>
										<p class="m-0">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam sed diam nonummy nibh euismod tincidunt.
										</p>
									</div>
								</div> -->
								<!-- awaed-item - end -->

								<!-- awaed-item - start -->
								<!-- <div class="awaed-item">
									<div class="awaed-content">
										<h3 class="awaed-title">
											<span class="awaed-date">dec 2013</span>
											1st Place International Events Awards 
										</h3>
										<p class="m-0">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam sed diam nonummy nibh euismod tincidunt.
										</p>
									</div>
								</div> -->
								<!-- awaed-item - end --> 

							</div>
						</div>
						<!-- awaed-item-area - end -->
					</div>
					
				</div>
			</div>
		</section>
		<!-- award-section - end
		================================================== -->





		<!-- service-section - start
		================================================== -->
		<section id="service-section" class="service-section sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="row">
					<div class="col-lg-6">
						<div class="section-title mb-50 sr-fade1">
							<span class="line-style"></span>
							<small class="sub-title">why choose us</small>
							<h2 class="big-title">shashisha <strong>Advantages</strong></h2>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="team-btn text-right sr-fade2">
							<a href="#!" class="custom-btn">meet the team</a>
						</div>
					</div>
				</div>

				<div class="service-wrapper sr-fade1">
					<ul>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-handshake"></i>
								</span>
								<strong class="service-title">friendly team</strong>
								<small class="service-sub-title">More than 200 teams</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-cheers"></i>
								</span>
								<strong class="service-title">Unique Scenario</strong>
								<small class="service-sub-title">we thinking out of the box</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-two-balloons"></i>
								</span>
								<strong class="service-title">perfect venues</strong>
								<small class="service-sub-title">perfect venues</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-speech-bubble"></i>
								</span>
								<strong class="service-title">24/7 hours support</strong>
								<small class="service-sub-title">anitime anywhere</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-clown-hat"></i>
								</span>
								<strong class="service-title">Unforgetable Times</strong>
								<small class="service-sub-title">More than 200 teams</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-light-bulb"></i>
								</span>
								<strong class="service-title">Briliant Idea</strong>
								<small class="service-sub-title">We thinking out of the box</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-event-date-and-time-symbol"></i>
								</span>
								<strong class="service-title">Unique Scenario</strong>
								<small class="service-sub-title">perfact venues</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-group"></i>
								</span>
								<strong class="service-title">Best Management</strong>
								<small class="service-sub-title">anytime anywhere</small>
							</a>
						</li>

					</ul>
				</div>

			</div>
		</section>
		<!-- service-section - end
		================================================== -->





		




		





		<!-- speaker-section - start
		================================================== -->
		<section id="speaker-section" class="speaker-section clearfix" style="background-image: url(assets/images/speaker/Black-White-Dubai-Wallpaper.jpg);">
			<div class="overlay-white">
				<div class="container">

					<!-- speaker-carousel - start -->
					<div class="speaker-carousel">
						<div class="slider-for">
<?php while($row = mysqli_fetch_assoc($sql_data1)) { ?>
							<div class="item">
								<div class="row">

									<!-- speaker-image - start -->
									<div class="col-lg-6">
										<div class="speaker-image image-wrapper text-center">
											<img src="assets/images/speaker/<?php echo $row['image']; ?>" alt="Image_not_found">
										
										</div>
									</div>
									<!-- speaker-image - end -->

									<!-- speaker-content - start -->
									<div class="col-lg-6">
										<div class="speaker-content">

											<!-- section-title - start -->
											<div class="section-title text-left mb-50">
												<span class="line-style"></span>
												<small class="sub-title">harmoni staffs</small>
												<h2 class="big-title">Professional <strong>Speakers</strong></h2>
											</div>
											<!-- section-title - end -->

											<div class="speaker-info">
												<div class="speaker-title mb-30">
													<span class="speaker-name"><strong><?php echo $row['speaker_name']; ?></strong></span>
													<span class="work-experienc yellow-color"><strong><?php echo $row['experience']; ?></strong> experienced</span>
												</div>
												<p class="black-color mb-30">
														<?php echo $row['details']; ?>
												</p>
												<div class="speaker-social-network ul-li">
													<h3 class="title title-medium mb-15">
														<strong>Social</strong> Network
													</h3>
													<ul>
														<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
														<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
														<li><a href="#!"><i class="fab fa-twitch"></i></a></li>
														<li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
														<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
													</ul>
												</div>
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
									<span class="sub-title"><?php echo $row['speaker_name']; ?> Speaker</span>
								</div>
							</div>
<?php } ?>
							
							
						</div>
					</div>
					<!-- speaker-carousel - end -->

				</div>
			</div>
		</section>
		<!-- speaker-section - end
		================================================== -->





		<!-- special-offer-section - start
		================================================== -->
		<section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
			<div class="container">
				<div class="row">

					<!-- special-offer-content - start -->
					<div class="col-lg-9">
						<div class="special-offer-content">
							<h2>Looking for something <span>special for your moment?</span></h2>
							<p class="m-0">
								Contact us now and we will make your event unique & unforgettable
							</p>
						</div>
					</div>
					<!-- special-offer-content - end -->

					<!-- event-makeing-btn - start -->
					<div class="col-lg-3">
						<div class="event-makeing-btn">
							<a href="#!">join with us now</a>
						</div>
					</div>
					<!-- event-makeing-btn - end -->

				</div>
			</div>
		</section>
		<!-- special-offer-section - end
		================================================== -->





		




		<?php include_once 'footer.php'; ?>