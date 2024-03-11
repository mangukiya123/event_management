<?php

  include 'db.php';

  if (isset($_POST['login'])) 
  {
  	$user_email = $_POST['user_email'];
  	$user_password= $_POST['user_password'];

  	$sql_login = "select * from user where user_email='$user_email' and user_password='$user_password'";
  	$login_data = mysqli_query($con, $sql_login);
  	$count_data = mysqli_num_rows($login_data);

  	if ($count_data==1) 
  	{
  		$row = mysqli_fetch_assoc($login_data);
  		$_SESSION['user_id'] = $row['user_id'];
  		$_SESSION['user_name'] = $row['user_name'];
  		$_SESSION['user_email'] = $row['user_email'];

  		header('location:index.php');
  	}
  }

?>

<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from jthemes.net/themes/html/harmony-event/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 11:18:14 GMT -->
<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>ShaShiSha Event Managemnt</title>
		<link rel="shortcut icon" href="assets/images/favicon.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<!-- icon css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
		<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

		<!-- color switcher css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/colors/style-switcher.css">
		<link id="color_theme" rel="stylesheet" type="text/css" href="assets/css/colors/default.css">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		

	</head>


	<body class="homepage3 default-header-p">




		
		<!-- backtotop - start -->
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<div id="preloader"></div>
		<!-- preloader - end -->




		<!-- header-section - start
		================================================== -->
		<header id="header-section" class="header-section default-header-section auto-hide-header clearfix">

			<!-- header-top - start -->
			<div class="header-top">
				<div class="container">
					<div class="row">

						<!-- basic-contact - start -->
						<div class="col-lg-6">
							<div class="basic-contact">
								<ul>
									<li>
										<!-- <a href="#!"> -->
											<i class="fas fa-envelope"></i>
											<?php if(isset($_SESSION['user_email']))
											{
												echo $_SESSION['user_email'];
											}
											else
											{
												echo "login users";
											} ?>
										<!-- </a> -->
									</li>
									<li>
										<!-- <a href="#!"> -->
											<i class="fas fa-phone"></i>
											+91 91062 892342
										<!-- </a> -->
									</li>
								</ul>
							</div>
						</div>
						<!-- basic-contact - end -->

						<!-- register-login-group - start -->
						<div class="col-lg-6">
							<div class="register-login-group">
								<ul>
									<li>
										<?php if (isset($_SESSION['user_name'])) { ?>
										    <a href="#" class="register-modal-btn">
											  <i class="fas fa-user"></i>
											  <?php echo $_SESSION['user_name']; ?>
										    </a>	
										<?php } else { ?>
										    <a href="#register-modal" class="register-modal-btn">
											   <i class="fas fa-user"></i>
											   Register
										    </a>
									    <?php } ?>

										<div id="register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
											<div class="overlay-black clearfix">

												<!-- leftside-content - start -->
												<div class="leftside-content">
													<div class="site-logo-wrapper mb-80">
														
															<img src="assets/images/logo.JPEG" alt="logo_not_found" style="border-radius: 50%; height: 40%; width: 40%;">
														
													</div>
													<div class="register-login-link mb-80">
														<ul>
															<li><a href="#login-modal" class="login-modal-btn">Login</a></li>
														</ul>
													</div>
													<div class="copyright-text">
														<p class="m-0">©2019 <a href="#!" class="yellow-color">ShaShiSha .com all right reserved, made with 🧡 by ShaShiSha Event </a> </p>
													</div>
												</div>
												<!-- leftside-content - end -->

												<!-- rightside-content - start -->
												<div class="rightside-content text-center">

													<div class="mb-30">
														<h2 class="form-title title-large white-color"><strong>Register Now	</strong></h2>
													</div>

													<div class="login-form text-center mb-50">
														<form  method="post">
															<div class="form-item">
																<input type="text" name="user_name" placeholder="User Name" required>
															</div>
															<div class="form-item">
																<input type="email" name="user_email" placeholder="Email Address" required>
															</div>
															<div class="form-item">
																<input type="password" name="user_password" placeholder="Password" required>
															</div>
															<div class="form-item">
																<input type="password" name="user_re_password" placeholder="Repeat Password" required>
															</div>
															<button type="submit" class="login-btn" name="submit">login now</button>
														</form>
													</div>
													<span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
													<!-- <div class="bottom-text white-color">
														<p class="m-0">
															* Denotes mandatory field.
														</p>
														<p class="m-0">** At least one telephone number is required.</p>
													</div> -->

												</div>
												<!-- rightside-content - end -->

												<a class="popup-modal-dismiss" href="#!">
													<i class="fas fa-times"></i>
												</a>

											</div>
										</div>
									</li>
									<li>
										<?php if (isset($_SESSION['user_name'])) { ?>
											<a href="logout.php">
											   <i class="fas fa-lock"></i>
											   Logout
										    </a>
										<?php } else { ?>
										    <a href="#login-modal" class="login-modal-btn">
											   <i class="fas fa-lock"></i>
											   Login
										    </a>
									    <?php } ?>
										<div id="login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
											<div class="overlay-black clearfix">

												<!-- leftside-content - start -->
												<div class="leftside-content">
													<div class="site-logo-wrapper mb-80">
														<a class="logo">
															<img src="assets/images/logo.JPEG" alt="logo_not_found" style="border-radius: 50%; height: 40%; width: 40%;">
														</a>
													</div>
													<div class="register-login-link mb-80">
														<ul>
															<li><a href="#register-modal" class="register-modal-btn">Register</a></li>
														</ul>
													</div>
													<div class="copyright-text">
														<p class="m-0">©2019 <a href="#!" class="yellow-color">ShaShiSha .com all right reserved, made with 🧡 by ShaShiSha Event </a></p>
													</div>
												</div>
												<!-- leftside-content - end -->

												<!-- rightside-content - start -->
												<div class="rightside-content text-center">

													<div class="mb-30">
														<h2 class="form-title title-large white-color"><strong>Login Here</strong></h2>
													</div>
                                                    <div class="login-form text-center mb-50">
														<form action="#!" method="post">
															<div class="form-item">
																<input type="email" name="user_email" placeholder="example@gmail.com">
															</div>
															<div class="form-item">
																<input type="password" name="user_password" placeholder="Password">
															</div>
															<button type="submit" class="login-btn" name="login">login now</button>
															<div class="fb-login-btn mb-30">
														<br>
														
														<a href="#!">
															<span class="icon">
																<i class="fab fa-facebook-f"></i>
															</span>
															login with facebook
														</a>
													</div>
														</form>
													</div>
													<span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
													<!-- <div class="bottom-text white-color">
														<p class="m-0">
															* Denotes mandatory field.
														</p>
														<p class="m-0">** At least one telephone number is required.</p>
													</div> -->

												</div>
												<!-- rightside-content - end -->

												<a class="popup-modal-dismiss" href="#!">
													<i class="fas fa-times"></i>
												</a>

											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- register-login-group - end -->
						
					</div>
				</div>
			</div>
			<!-- header-top - end -->
			
			<!-- header-bottom - start -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">

						<!-- site-logo-wrapper - start -->
						<div class="col-lg-3">
							<div class="site-logo-wrapper">
								<img src="assets/images/logo.JPEG" alt="logo_not_found" style="border-radius: 50%; height: 40%; width: 40%;">
							</div>
						</div>
						<!-- site-logo-wrapper - end -->

						<!-- mainmenu-wrapper - start -->
						<div class="col-lg-9">
							<div class="mainmenu-wrapper">
								<div class="row">

									<!-- menu-item-list - start -->
									<div class="col-lg-10">
										<div class="menu-item-list ul-li clearfix">
											<ul>
												<li class="menu-item-has-children active">
													<a href='index.php' class="active">home</a>
												</li>
												<li class="menu-item-has-children">
													<a href="about.php">about</a>
												</li>
												<li class="menu-item-has-children">
													<a href='event.php'>events</a>
												</li>
												<li class="menu-item-has-children">
													<a href='service.php'>service</a>	
												</li>
												<li>
													<a href="gallery.php">gallery</a>
												</li>
												<li>
													<a href="speaker.php">speaker</a>
												</li>
												<li class="menu-item-has-children">
													<a href="contact.php">contact</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

									<!-- menu-item-list - start -->
									<div class="col-lg-2">
										<div class="user-search-btn-group ul-li clearfix">
											<ul>
												<li>
													<a href="#!">
														<i class="fas fa-user"></i>
													</a>
												</li>
												<li>
													<button type="button" class="toggle-overlay search-btn">
														<i class="fas fa-search"></i>
													</button>
													<!-- search-body - start -->
													<div class="search-body">
														<div class="search-form">
															<form action="#">
																<input class="search-input" type="search" placeholder="Search Here">
																<div class="outer-close toggle-overlay">
																	<button type="button" class="search-close">
																		<i class="fas fa-times"></i>
																	</button>
																</div>
															</form>
														</div>
													</div>
													<!-- search-body - end -->
												</li>
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

								</div>
							</div>
						</div>
						<!-- mainmenu-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- header-bottom - end -->

		</header>
		<!-- header-section - end
		================================================== -->
<?php

  include 'db.php';
  
  if(isset($_POST['submit']))
  {
  	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];

  	$insert_query = "insert into user(user_name,user_email,user_password)values('$user_name','$user_email','$user_password')";
    mysqli_query($con,$insert_query);

    header('location:index.php');

  }
?>