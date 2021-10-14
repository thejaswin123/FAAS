<?php require_once '../resources/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/core/jquery.min.js"></script>
	<script src="../assets/js/plugins/sweetalert.js"></script>
	<script src="../assets/js/alerts.js"></script>
	<link href="../assets/css/custom.css" rel="stylesheet">
	<style type="text/css">
		a {
			cursor: pointer;
		}

		body {
			background: #131523;
		}
		#formContent {
			background: #22263a;
		    color: #fff;
		    box-shadow: 0 7px 10px 0 rgba(0,0,0,.5);
		}
	</style>
</head>
<body>
	<?php validate_admin_login_page(); ?>
	<?php admin_login(); ?>
	<div class="wrapper">
		<div id="formContent">
			<div class="container">
				<h3 class="p-3">Admin Login</h3>
				<hr>
				<div class="row">
					<div class="col-12">
						<form class="text-left mb-3" method="POST">
							<div class="form-group">
								<label>Username<span class="text-danger">*</span></label>
								<input type="text" name="username" placeholder="Username" class="form-control w-100" required autocomplete="off">
							</div>
							<div class="form-group">
								<label>Password <span class="text-danger">*</span></label>
								<input type="password" name="password" placeholder="Password" class="form-control w-100" required>
							</div>
							<button class="btn btn-success form-control" name="admin_login"><i class="fa fa-paper-plane pr-2"></i>Login</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript">
	</script>
</body>
</html>