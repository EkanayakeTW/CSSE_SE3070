<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title> VTMS Managment</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/demo.min.css">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="assets/thk/abc.png" ype="image/x-icon">
		<link rel="icon" href="assets/thk/abc.png" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="assets/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="assets/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="assets/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	</head>
	
	<body class="animated fadeInDown">

            <header id="header">
		<div id="logo-group">
                       <!--<span id="">  </span>-->
                            
			</div>
<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs"><h1 class="txt-color-red login-header-big">VTMS management System</h1></span>
                             </span>

	  </header>

		<div id="main" role="main" >

			<!-- MAIN CONTENT -->
			<div id="content" class="container" >

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-xs bg-color-white">
<!--						<h1 class="txt-color-red login-header-big">Contact Us 0717515115
                                                Or Send Email test@gmail.com</h1>-->
			<div class="hero">

				<div class="pull-left login-desc-box-l">
								
					<!--<div id=""><img src="assets/thk/abc.png" class="pull-right img-push" alt="" style="width:200px"></div>-->
				</div>
			</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
								<h5 class="about-heading">About VTMS Management - Are you up to date?</h5>
								<p></p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">Not just your average!</h5>
								<p></p>
							</div>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
                                                    <form action="<?php echo base_url(); ?>login_validation" id="login-form" class="smart-form client-form" method="POST">
								<header>
									Sign In
								</header>

								<fieldset>
									
									<section>
										<label class="label">Username</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="text" name="username">
                                                                                        <!--<i class="ace-icon fa fa-user"><span class="text-danger"></span> </i>--> 
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> <?php echo form_error('username'); ?></b></label>
									</section>

									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password">
                                                                                        <!--<i class="ace-icon fa fa-lock"><span class="text-danger"></span></i>-->
                                                                                                                        
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> <?php echo form_error('password'); ?></b> </label>
										<div class="note">
											<a href="forgotpassword.html">Forgot password?</a>
										</div>
									</section>

									<section>
										<label class="checkbox">
											<input type="checkbox" name="remember" checked="">
											<i></i>Stay signed in</label>
									</section>
								</fieldset>
								<footer>
                                                                    <div class="clearfix">
                                                                                                             <?php  echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

                                                                                                            <button type="submit" name="insert" class="width-35 pull-right btn btn-sm btn-danger ">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
                                                                                                                         
                                                                                                                        
														</button>
													</div>

									
								</footer>
							</form>

						</div>
						
						<h5 class="text-center"> - Or follows in using -</h5>
															
							<ul class="list-inline text-center">
								<li>
									<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						
					</div>
				</div>
                            
			</div>

		</div>

		<!--================================================== -->	

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script src="assets/js/plugin/pace/pace.min.js"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="assets/js/libs/jquery-2.1.1.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="assets/js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="assets/js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="assets/js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="assets/js/plugin/jquery-validate/jquery.validate.min.js"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src="assets/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="assets/js/app.min.js"></script>

		<script type="text/javascript">
			

			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
		</script>

	</body>
</html>