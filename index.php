<?php include_once 'header.php';

      function slider($con)
	{
		$sql_select_slider = "select * from sliders order by id desc limit 0,3";
		$slider_data = mysqli_query($con,$sql_select_slider);
		return $slider_data;
	}

	function category($con)
	{
		$sql_select_catergory = "select * from eventcategies order by id asc limit 0,3";
		$category_data = mysqli_query($con,$sql_select_catergory);
		return $category_data;
	}

    function country($con)
    {
    	$sql_select_country="select * from countries";
    	$country_data = mysqli_query($con,$sql_select_country);
		return $country_data;
    } 

     function capital($con)
    {
    	$sql_select_capital="select * from capitals";
    	$capital_data = mysqli_query($con,$sql_select_capital);
		return $capital_data;
    }  

     function upcommingevent($con)
    {
    	$sql_select_upcommingevent="select * from upcomming_events order by id desc limit 0,1";
    	$upcommingevent_data = mysqli_query($con,$sql_select_upcommingevent);
		return $upcommingevent_data;
    }  

     function comment($con)
    {
    	$sql_select_comment="select * from comment_tables order by id desc limit 0,3";
    	$comment_data = mysqli_query($con,$sql_select_comment);
		return $comment_data;
    }  

      function eventlisting($con)
    {
    	$sql_select_eventlisting="select * from eventinformations ";
    	$event_data = mysqli_query($con,$sql_select_eventlisting);
			return $event_data;
    } 

     function speaker($con)
    {
    	$sql_select_speaker="select * from speakers";
    	$speaker_data = mysqli_query($con,$sql_select_speaker);
		return $speaker_data;
    } 

    function dates($con)
    {
    	$sql_select_date="select * from dates";
    	$date_data = mysqli_query($con,$sql_select_date);
		return $date_data;
    } 

  function hotels($con)
    {
    	$sql_select_hotels="select * from roomsandhotels";
    	$hotels_data = mysqli_query($con,$sql_select_hotels);
		  return $hotels_data;
    } 
  function services($con)
{
     $sql_select_services = "select * from ourservices order by id desc limit 0,4";
	$service_data = mysqli_query($con,$sql_select_services);
	return $service_data;
}

$service_data=services($con);
$slider_data = slider($con);
$upcommingevent_data = upcommingevent($con);
$category_data = category($con);
$category_data1 = category($con);
$comment_data = comment($con);	
$date_data = dates($con);	
 
$hotels_data = hotels($con);	
$hotels_data1 = hotels($con);

$country_data = country($con);
$country_data1 = country($con);	

$capital_data = capital($con);	
$capital_data1 = capital($con);	

$speaker_data = speaker($con);	
$sql_data = speaker($con);

$event_data = eventlisting($con);	
$event_data1 = eventlisting($con);
?>
 
		<!-- slide-section - start
		================================================== -->
	<section id="main-carousel2" class="main-carousel2 clearfix">
<?php while($slider_row = mysqli_fetch_assoc($slider_data)) { ?>
			<div class="item" style="background-image: url(assets/images/slider/<?php echo $slider_row['image'];	 ?>);">
				<div class="overlay-black">
					<div class="container">
						<div class="row">

							<!-- slider-content - start -->
							<div class="col-lg-8">
								<div class="slider-content">
									<div class="countdown-timer mb-30">
										<ul class="countdown-list" data-countdown="2020/08/08"></ul>
									</div>
									<span class="date"><?php echo $slider_row['date']; ?></span>
									<h1 class="title-text">
										 <?php echo $slider_row['title']; ?>
									</h1>
									<!-- <strong class="bold-text"><?php echo $slider_row['subtitle']; ?></strong> -->
									<a href="" class="custom-btn">booking ticket</a>
									<a href="#!" class="details-btn">event details</a>
								</div>
							</div>
							<!-- slider-content - end -->
							
						</div>
					</div>
				</div>
			</div>

			<?php }?>

		</section>
		<!-- slide-section - end


		================================================== -->





		<!-- absolute-eventmake-section - start
		================================================== -->
		<div id="absolute-eventmake-section" class="absolute-eventmake-section sec-ptb-100 bg-gray-light clearfix">
			<div class="eventmaking-wrapper">
<ul class="nav eventmake-tabs">
            <?php $arr = array(); $index=0; while($category_row = mysqli_fetch_assoc($category_data)) { $arr[$index] = $index; $index++; ?>
					<li>
						<a class="" data-toggle="tab" href="#<?php echo $index ?>">
							<i class="<?php echo $category_row['icon_code']; ?>"></i>
							<?php echo $category_row['name']; ?>
						</a>
			</li>
<?php } ?>		
					
				</ul>

				<div class="tab-content">

					<div id="<?php echo $arr[0]; ?>" class="tab-pane fade in active show">
						<form action="#">
							<ul>

								<li>
									<input type="text" placeholder="Type event name">
								</li>
								<li>
									<select class="country-select">
										<option selected="" disabled>select Country</option>
										 <?php while($country_row = mysqli_fetch_assoc($country_data)) { ?>
										<option><?php echo $country_row['name']; ?></option>
									<?php } ?>	
									</select>
								</li>
								<li>
									<select class="capital-select">
										<option selected="" disabled>select capital</option>
										<?php while($capital_row = mysqli_fetch_assoc($capital_data)) { ?>
										<option><?php echo $capital_row['name']; ?></option>
										<?php } ?>
									</select>
								</li>
								<li>
									<select class="date-select">
										<option selected="" disabled>select date</option>
										  <?php while($date_row = mysqli_fetch_assoc($date_data)) { ?>
										<option><?php echo $date_row['date']; ?></option>
										<?php } ?>
									</select>
								</li>
								<li>
									<button type="submit" class="custom-btn">search event</button>
								</li>

							</ul>
						</form>
					</div>

					<div id="<?php echo $arr[1]; ?>" class="tab-pane fade">
						<form action="#">
							<ul>

								<li>
									<input type="text" placeholder="Type event name">
								</li>
								<li>
									<select class="country-select">
										<option selected="" disabled>select Country</option>
										 <?php while($country_row = mysqli_fetch_assoc($country_data1)) { ?>
										<option><?php echo $country_row['name']; ?></option>
									<?php } ?>	
									</select>
								</li>
								<li>
									<select class="capital-select">
										<option selected="" disabled>select capital</option>
										<?php while($capital_row = mysqli_fetch_assoc($capital_data1)) { ?>
										<option><?php echo $capital_row['name']; ?></option>
										<?php } ?>
									</select>
								</li>
								<li>
									<select class="date-select">
										<option selected="" disabled>select date</option>
										  <?php while($date_row = mysqli_fetch_assoc($date_data)) { ?>
										<option><?php echo $date_row['date']; ?></option>
										<?php } ?>
									</select>
								</li>
								<li>
									<button type="submit" class="custom-btn">search event</button>
								</li>

							</ul>
						</form>
					</div>

					<div id="<?php echo $arr[2]; ?>" class="tab-pane fade">
						<form action="#">
							<ul>

								<li>
									<input type="text" placeholder="Type event name">
								</li>
								<li>
									<select class="country-select">
										<option selected="" disabled>select Country</option>
										 <?php while($country_row = mysqli_fetch_assoc($country_data)) { ?>
										<option><?php echo $country_row['name']; ?></option>
									<?php } ?>	
									</select>
								</li>
								<li>
									<select class="capital-select">
										<option selected="" disabled>select capital</option>
										<?php while($capital_row = mysqli_fetch_assoc($capital_data)) { ?>
										<option><?php echo $capital_row['name']; ?></option>
										<?php } ?>
									</select>
								</li>
								<li>
									<select class="date-select">
										<option selected="" disabled>select date</option>
										  <?php while($date_row = mysqli_fetch_assoc($date_data)) { ?>
										<option><?php echo $date_row['date']; ?></option>
										<?php } ?>
									</select>
								</li>
								<li>
									<button type="submit" class="custom-btn">search event</button>
								</li>

							</ul>
						</form>
					</div>

					<div class="top-event-location">
						<span class="title-text">TOP SEARCH <strong>EVENT LOCATION:</strong></span>
						<ul>

							<li><strong>Jakarta</strong> Indonesia</li>
							<li><strong>Paris</strong> Franc</li>
							<li><strong>Milan</strong> Italia</li>
							<li><strong>Amsterdam</strong> Netherland</li>
							<li><strong>Barcelona</strong> Spain</li>
							<li><strong>Istanbul</strong> Turkey</li>
							
						</ul>
					</div>

				</div>
				
			</div>
		</div>
		<!-- absolute-eventmake-section - end
		================================================== -->







		<!-- about-section2 - start
		================================================== -->
		<section id="about-section2" class="about-section2 sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">

						<!-- section-pragraph - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-pragraph text-right">
								<p>
									Lorem ipsum dollor site amet the consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
								</p>
							</div>
						</div>
						<!-- section-pragraph - end -->

						<!-- section-title - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<small class="sub-title">we are ShaShiSha </small>
								<h2 class="big-title"><strong>No.1</strong> Events Management</h2>
							</div>
						</div>
						<!-- section-title - end -->

					</div>
				</div>

				<div class="services-list">
					<ul>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-handshake"></i>
								</span>
								<strong class="title-text">friendly team</strong>
								<small class="sub-title">more than 200 teams</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-two-balloons"></i>
								</span>
								<strong class="title-text">perfect venues</strong>
								<small class="sub-title">the best & perfect venues</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-cheers"></i>
								</span>
								<strong class="title-text">Unique Scenario</strong>
								<small class="sub-title">We thinking out of the box</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-clown-hat"></i>
								</span>
								<strong class="title-text">Unforgettable Time</strong>
								<small class="sub-title">We make you perfect event</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-speech-bubble"></i>
								</span>
								<strong class="title-text">24/7 Hours Support</strong>
								<small class="sub-title">anytime anywhere</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-light-bulb"></i>
								</span>
								<strong class="title-text">New & Briliant Idea</strong>
								<small class="sub-title">we have million ideas</small>
							</a>
						</li>

					</ul>
				</div>

			</div>
		</section>
		<!-- about-section2 - end
		================================================== -->






		<!-- upcomming-event-section2 - start
		================================================== -->
		<?php while($upcommingevent_row = mysqli_fetch_assoc($upcommingevent_data)) { $image = explode(',',$upcommingevent_row['image']); ?>
		<section id="upcomming-event-section2" class="upcomming-event-section2 sec-ptb-100 clearfix">

			<div class="container">
				<!-- section-title - start -->
				<div class="section-title mb-50">
					<span class="line-style"></span>
					<small class="sub-title">our latest event</small>
					<h2 class="big-title"><strong>our upcoming</strong> Events</h2>
				</div>
				<!-- section-title - end -->
			</div>

			<div class="comming-event-item">
				<div class="container">
					<div class="row justify-content-start">

						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="event-content">

								<!-- event-title - start -->
								<div class="event-title">
									<small class="tag">
										<i class="fas fa-bookmark"></i>
										Featured Event
									</small>
									<h3 class="title-text"><?php echo $upcommingevent_row['main_title']; ?> <strong><?php echo $upcommingevent_row['sub_title1']; ?></strong></h3>
									<span class="sub-title">Tickets start from <?php echo $upcommingevent_row['sub_title2']; ?></span>
								</div>
								<!-- event-title - end -->

								<p class="black-color mb-30">
									<?php echo $upcommingevent_row['information']; ?>
								</p>

								<div class="event-info-list ul-li-block mb-30">
									<ul>

										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start <?php echo $upcommingevent_row['time']; ?>
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											<?php echo $upcommingevent_row['place']; ?>
										</li>
										
									</ul>
								</div>

								<div class="text-left">
									<a href="#!" class="custom-btn">booking ticket</a>
									<a href="#!" class="details-btn">event details</a>
								</div>
								
							</div>
						</div>

					</div>
				</div>
				<div class="event-image">
					<div class="big-image">
						<div class="badge-item">
							<div class="content">
								<i class="fas fa-star"></i>
								<strong>5.0</strong>
								<small>featured hotel</small>
							</div>
						</div>
						<div class="brand-logo">
							<a href="#!" class="logo">
								<img src="assets/images/logo.JPEG" alt="logo_not_found" style="
								">
							</a>
						</div>
						<img src="assets\images\upcomming-events/<?php echo  $image[0]; ?>" alt="Image_not_found">
					</div>
					<div class="small-image">
						<img src="assets/images/upcomming-events/<?php echo  $image[0]; ?> " style="width: 100%; height: 300px;" alt="Image_not_found">
					</div>
				</div>
			</div>
<?php } ?>
		</section>
		<!-- upcomming-event-section2 - end
		================================================== -->





		<!-- testimonial5-section - start
		================================================== -->
		<section id="testimonial5-section" class="testimonial5-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/testimonial-bg.jpg);">
				<div class="overlay-black sec-ptb-100">
					<div class="container">

						<!-- testimonial5-carousel - start -->
						<div id="testimonial5-carousel" class="testimonial5-carousel owl-carousel owl-theme">
 <?php while($comment_row = mysqli_fetch_assoc($comment_data)) { ?>
							<div class="item text-center">
								<span class="quote-icon">
									<i class="fas fa-quote-right"></i>
								</span>
								<p class="clients-comment">
										<?php echo $comment_row['cmt']; ?>
								</p>
								<div class="client-info">
									<h3 class="client-name"><?php echo $comment_row['name']; ?></h3>
									<span class="client-sub-title"><?php echo $comment_row['proffession']; ?></span>
								</div>
							</div>
<?php }?>
							

						</div>
						<!-- testimonial5-carousel - end -->

					</div>
				</div>
			</div>
		</section>
		<!-- testimonial5-section - end
		================================================== -->





		<!-- event-section - start
		================================================== -->
		<section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">

						<!-- section-title - start -->
						<div class="col-lg-4 col-md-
						12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<small class="sub-title">ShaShiSha  events</small>
								<h2 class="big-title"><strong>event</strong> listing</h2>
							</div>
						</div>
						<!-- section-title - end -->

						<!-- event-tab-menu - start -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="event-tab-menu clearfix">
								<ul class="nav">
									<?php while($row_cat = mysqli_fetch_assoc($category_data1)) { ?>
									<li>
										<a data-toggle="tab" href="#conference-event<?php echo $row_cat['id'];?>">
											<strong><i class="<?php echo $row_cat['icon_code']; ?>"></i> <?php echo $row_cat['name'] ?></strong> event
										</a>
									</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<!-- event-tab-menu - end -->

					</div>
				</div>

				<!-- tab-content - start -->
				<div class="tab-content">

					<!-- conference-event - start -->
					<?php $id=0; while($event_row = mysqli_fetch_assoc($event_data1)) { $date = explode(',',$event_row['event_date']);?>
					
					<div id="conference-event<?php echo $id++; ?>" class="tab-pane fade">
						<div class="row">

							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											 
										<span class="date"><?php echo $date[0]; ?></span>
											<small class="month"><?php echo $date[1]; ?></small>
											
										</div>
										<img src="assets/images/event/<?php echo $event_row['image']; ?>"  style="width: 100%; height: 300px;" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
											<?php echo $event_row['name']; ?>
											</h3>
											<span class="ticket-price yellow-color">Tickets from <?php echo $event_row['event_price']; ?></span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start <?php echo $event_row['event_time']; ?>
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													<?php echo $event_row['event_address']; ?>
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
								
									<!-- event-content - end -->

								</div>
							</div>

						</div>
					</div>



					<?php } ?>
						</div>
					</div>
					<!-- other-event - end -->

				</div>
				<!-- tab-content - end -->

			</div>
		</section>
		<!-- event-section - end
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

							<?php while($row = mysqli_fetch_assoc($speaker_data)) { ?>
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
										<span class="sub-title">Shashisha Speaker</span>
									</div>
								</div>
<?php }?>
								
							</div>
						</div>
						<!-- speaker-carousel - end -->

					</div>
				</div>
			</div>
		</section>
		<!-- speaker-section - end
		================================================== -->

		<!-- conference-section - start
		================================================== -->
		<section id="conference-section" class="conference-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/conference/pexels-photo-262669.jpg);">
				<div class="overlay-black sec-ptb-100">

					<div class="mb-50">
						<div class="container">
							<div class="row">

								<!-- section-title - start -->
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="section-title text-left">
										<span class="line-style"></span>
										<small class="sub-title">Shashisha  venues</small>
										<h2 class="big-title">Conference <strong>Rooms & Hotels</strong></h2>
									</div>
								</div>
								<!-- section-title - end -->

								<!-- conference-location - start -->
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="conference-location ul-li clearfix">
										<ul>

											<!-- country-select - start -->
											<li class="country-select">
												<form action="#!">
													<label for="country">Country :</label>
													<select class="custom-select" id="country">
														<option selected>Netherland</option>
														<option value="1">USA</option>
														<option value="2">england</option>
														<option value="3">germany</option>
													</select>	
												</form>
											</li>
											<!-- country-select - end -->

											<!-- city-select - start -->
											<li class="city-select">
												<form action="#!">
													<label for="city">city :</label>
													<select class="custom-select" id="city">
														<option selected>Amsterdam</option>
														<option value="1">washington</option>
														<option value="2">london</option>
														<option value="3">berlin</option>
													</select>	
												</form>
											</li>
											<!-- city-select - end -->

										</ul>
									</div>
								</div>
								<!-- conference-location - end -->

							</div>
						</div>
					</div>

					<!-- conference-content-wrapper - start -->
					<div class="tab-wrapper">

						<!-- tab-menu - start -->
						<div class="container">
							<div class="row justify-content-lg-start">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="tab-menu">
										<ul class="nav tab-nav mb-50">

<?php $a=0; while($hotel_row = mysqli_fetch_assoc($hotels_data)) {$ratting = explode(',',$hotel_row['ratting']) ?>
											<li class="nav-item">
												<a class="nav-link active" id="nav-one-tab" data-toggle="tab" href="#<?php echo 'a',$a; ?>" aria-expanded="true">
													<span class="image">
														<img src="assets/images/conference/<?php echo $hotel_row["image"]; ?>" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color"><?php echo $ratting[0]; ?> <i class="<?php echo $ratting[1]; ?>"></i> </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											
											<?php $a++; } ?>
										</ul>
										<div class="more-btn">
											<a href="#!">
												<strong class="yellow-color">VIEW ALL</strong> HOTEL & RESORT
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- tab-menu - end -->

						<!-- tab-content - start -->
						<div class="tab-content"><?php $a=0; while($hotel_row = mysqli_fetch_assoc($hotels_data1)) { ?>
							<!-- tab-pane - start -->
									<?php if($a==0) { ?>
										<div class="tab-pane fade active show" id="<?php echo 'a',$a; ?>" role="tabpanel" aria-labelledby="nav-one-tab" aria-expanded="true">
											<div class="image">
												<img src="assets/images/conference/<?php echo $hotel_row["image"]; ?>" alt="Image_not_found">
												<a href="#!" class="custom-btn">
													booking now
												</a>
												<div class="badge-item">
													<div class="content">
														<i class="fas fa-star"></i>
														<strong>5.0</strong>
														<small>featured hotel</small>
													</div>
												</div>
											</div>
										</div>
									<?php } else { ?>
										<div class="tab-pane fade" id="<?php echo 'a',$a; ?>" role="tabpanel" aria-labelledby="nav-one-tab" aria-expanded="true">
											<div class="image">
												<img src="assets/images/conference/<?php echo $hotel_row["image"]; ?>" alt="Image_not_found">
												<a href="#!" class="custom-btn">
													booking now
												</a>
												<div class="badge-item">
													<div class="content">
														<i class="fas fa-star"></i>
														<strong>5.0</strong>
														<small>featured hotel</small>
													</div>
												</div>
											</div>
										</div>
							<?php } $a++; } ?>

							<!-- tab-pane - end -->

			

							

						</div>
						<!-- tab-content - end -->

					</div>
					<!-- conference-content-wrapper - end -->

				</div>
			</div>
		</section>
		<!-- conference-section - end
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





		<!-- event-expertise-section - start
		================================================== -->
		<section id="event-expertise-section" class="event-expertise-section bg-gray-light sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="section-title mb-50">
							<small class="sub-title">our services</small>
							<h2 class="big-title">ShaShiSha  <strong>Expertise</strong></h2>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="link-btn text-right">
							<a href="service.php">ShaShiSha Services</a>
						</div>
					</div>
				</div>
				<!-- section-title - end -->

				<!-- event-expertise-carousel - start -->
				<div id="event-expertise-carousel" class="event-expertise-carousel owl-carousel owl-theme">

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img1.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img2.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img3.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img1.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img2.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img3.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img1.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img2.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img3.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img1.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img2.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">ShaShiSha  party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="assets/images/experties/img3.jpg" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

				</div>
				<!-- event-expertise-carousel - end -->

			</div>
		</section>
		<!-- event-expertise-section - end
		================================================== -->





		<!-- event-gallery-section - start
		================================================== -->
		<section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title text-center mb-80">
					<small class="sub-title">ShaShiSha  gallery</small>
					<h2 class="big-title">Beautiful & <strong>Unforgettable Times</strong></h2>
				</div>
				<!-- section-title - end -->

				<div class="button-group filters-button-group mb-30">
					<button class="button is-checked" data-filter="*">
						<i class="fas fa-star"></i>
						<strong>all</strong> gallery
					</button>
					<button class="button" data-filter=".video-gallery">
						<i class="fas fa-play-circle"></i>
						<strong>video</strong> gallery
					</button>
					<button class="button" data-filter=".photo-gallery">
						<i class="far fa-image"></i>
						<strong>photo</strong> gallery
					</button>
				</div>

				<div class="grid zoom-gallery clearfix mb-80" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
				<div class="grid-item grid-item--height2 photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/1.image.jpg">
						<img src="assets/images/gallery/1.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
					<a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
						<img src="assets/images/gallery/2.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Business Conference in Dubai</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/3.image.jpg">
						<img src="assets/images/gallery/3.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Envato Author Fun Hiking</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>

				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/4.image.jpg">
						<img src="assets/images/gallery/4.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
					<a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
						<img src="assets/images/gallery/5.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>New Year Celebration</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>

				<div class="grid-item grid-item--width2 photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/6.image.jpg">
						<img src="assets/images/gallery/6.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item video-gallery " data-category="video-gallery">
					<a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
						<img src="assets/images/gallery/7.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>New Year Celebration</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/8.image.jpg">
						<img src="assets/images/gallery/8.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Envato Author Fun Hiking</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
			</div>
				<div class="text-center">
					<a href="gallery.php" class="custom-btn">view all gallery</a>
				</div>

			</div>
		</section>
		<!-- event-gallery-section - end
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