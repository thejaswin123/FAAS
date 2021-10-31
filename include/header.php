<?php require_once 'resources/config.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title><?php echo $title; ?> </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;1,200" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>

	<script src="js/sweetalert.js"></script>

	<script src="js/alerts.js?v=<?php echo rand(10,1000);?>"></script>


	<link rel="stylesheet" href="css/boostrap.css">

	<link rel="stylesheet" href="css/styles.css?v=<?php echo rand(10,1000);?>">


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

						<nav class="navbar navbar-expand-lg p-0">

							<a class="navbar-brand" href="index.php">

								<div class="logo">

									<div class="logo-img">

										<img src="../images/log.png" alt="" class="image">

									</div>

								</div>

							</a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

								<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>

							</button>



							<div class="collapse navbar-collapse" id="navbarSupportedContent">

								<?php genrate_menu(); ?>


							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>