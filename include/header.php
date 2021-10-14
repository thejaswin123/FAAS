<?php require_once 'resources/config.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title><?php echo $title; ?> - RanksBoost</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ---------------------------- Fonts Css --------------------------------->

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;1,200" rel="stylesheet">

	<!-- ---------------------------- JQUERY JS --------------------	------------->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>

	<script src="js/sweetalert.js"></script>

	<script src="js/alerts.js?v=<?php echo rand(10,1000);?>"></script>

	<!-- ---------------------------- Bootstrap 4 Css --------------------------->

	<link rel="stylesheet" href="css/boostrap.css">

	<!-- ---------------------------- Styles Css -------------------------------->

	<link rel="stylesheet" href="css/styles.css?v=<?php echo rand(10,1000);?>">

	<!-- ---------------------------- Responsive Css ---------------------------->

	<link rel="stylesheet" href="css/responsive.css?v=<?php echo rand(10,1000);?>">
	<style>
	    .icon-bar {
            position: absolute;
        }
        .copied-text-container {
            position: fixed;
            font-size: 10px;
            top: 30px;
            left: 49px;
            width: 65px;
            background: #47525d;
            padding: 4px;
            color: #ffff;
            border-radius: 4px;
            display:none;
        }
        .copied-text-animation {
            animation : copy_text 1s;
        }
        @keyframes copy_text {
          0% {opacity:0.5;}
          50% {opacity:1;}
          100% {opacity: 0; display:none !important;}
        }
	</style>

</head>

<body>

	<header class="header-div">

		<div class="top-nav">

			<div class="container-fluid">

				<div class="row">

					<div class="col-12">
						<!-- <div class="col-12">
							<div class="text-white text-right pt-2">
								<i class="fab fa-discord" style="color: #7289da"></i> ranksboost#0058 | <i class="fab fa-skype" style="color: #55aae8"></i> ranksboost@gmail.com
							</div>
						</div> -->

						<nav class="navbar navbar-expand-lg p-0">

							<a class="navbar-brand" href="index.php">

								<div class="logo">

									<div class="logo-img">

										<img src="images/logo.png" alt="" class="image">

									</div>

								</div>

							</a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

								<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>

							</button>



							<div class="collapse navbar-collapse" id="navbarSupportedContent">

								<?php genrate_menu(); ?>

<!-- 								<ul class="navbar-nav ml-auto">

									<li class="nav-item dropdown">

										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

											Home

										</a>

										<div class="dropdown-menu" aria-labelledby="navbarDropdown">

											<a class="dropdown-item" href="index.php#boosters">Booster</a>

											<a class="dropdown-item" href="index.php#coaches">Coach</a>

											<a class="dropdown-item" href="index.php#orders">Place Order</a>

										</div>

									</li>

									<li class="nav-item active">

										<a class="nav-link" href="member-registration.php">Become Member</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="booster-registration.php">Become Booster</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="#">How it works?</a>

									</li>

									<li class="nav-item dropdown">

										<a class="dropdown-toggle btn btn-primary text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

											Login

										</a>

										<div class="dropdown-menu" aria-labelledby="navbarDropdown">

											<a class="dropdown-item" href="member-login.php">Member</a>

											<a class="dropdown-item" href="booster-login.php">Booster/Coach</a>

										</div>

									</li>

								</ul> -->

								<!-- <ul class="navbar-nav ml-auto">

									<li class="nav-item active">

										<a class="nav-link" href="index.php">Home</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="member-registration.php">Messages</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="booster-registration.php">Wallet</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="offers.php">Offers</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="profile.php">Profile</a>

									</li>

									<li class="nav-item">

										<a class="nav-item btn btn-primary" href="logout.php">Sign Out</a>

									</li>

									<li class="nav-item">

										<a class="nav-item ml-1 btn btn-primary" href="setting.php">Setting</a>

									</li>

								</ul> -->

								<!-- <ul class="navbar-nav ml-auto">

									<li class="nav-item active">

										<a class="nav-link" href="index.php">Home</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="member-registration.php">Messages</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="booster-registration.php">Wallet</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="offers.php">Offers</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="place_order.php">Place Order</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="profile.php">Profile</a>

									</li>

									<li class="nav-item">

										<a class="nav-item btn btn-primary" href="logout.php">Sign Out</a>

									</li>

									<li class="nav-item">

										<a class="nav-item ml-1 btn btn-primary" href="setting.php">Setting</a>

									</li>

								</ul> -->
							</div>

						</nav>

					</div>

				</div>

			</div>

		</div>

	</header>