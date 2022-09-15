<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">
</head>

<body>
	<?php
	include_once("./database/connection.php");
	include_once("./database/functions.php");
	?>
	<h1 class="h1 container" id="login_h1">Museum View Hotel</h1>
	<div class="limiter">
		<div class="container-login100">
			<!-- <div class="h1" style="color:white;margin-left:0%;padding-right: 15%;margin-top: 0%;position: relative;;">
				H
			</div> -->
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Sign in
				</span>
				<form method="POST" class="login100-form validate-form p-b-33 p-t-5" style="padding:15px;">

					<div class="wrap-input100 validate-input" data-validate="Select User Type">
						<select class="input100" type="text" name="usrtype">
							<option value="shouldShowError">---- No selection ---</option>
							<option value="reception">Reception</option>
							<option value="store">Store Keeping</option>
							<option value="admin">Admin</option>
						</select>
						<span class="focus-input100 bi bi-shield-lock-fill" data-placeholder="&#xF341;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100 bi bi-shield-lock-fill" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<div class="input-group">
							<input class="input100" type="password" name="pass" placeholder="Password" id="login_password">
							<i class="bi bi-eye btn" id="showPwd">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
									<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
									<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
								</svg>
							</i>
						</div>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn" name="submitBtn">
							Login
						</button>
					</div>
					<?php
					if (isset($_POST['submitBtn'])) {						
						// session vars saved to sql table | SESSION_ID | USER_NAME | USER_ID | SESSION_CREATION_DATE | SESSION_DESTROY_DATE
						$sql = "INSERT INTO SESSION(SESSION_ID, USER_NAME, USER_ID, SESSION_CREATION_DATE, SESSION_DESTROY_DATE)
													VALUES(:SESSION_ID, :USER_NAME, :USER_ID, :SESSION_CREATION_DATE, :SESSION_DESTROY_DATE);";

						$statement = $conn->prepare($sql);
						$statement->execute([
							':SESSION_ID' => randID("S"),
							':USER_NAME' => $_POST['username'],
							':USER_ID' => "USER001",
							':SESSION_CREATION_DATE' =>  $_SERVER['REQUEST_TIME'] ?? null,
							':SESSION_DESTROY_DATE' => null
						]);
						// sign in into the system					
						verify_sign_in($_POST['usrtype'], $_POST['username'], $_POST['pass']);
					}
					?>
				</form>
			</div>
		</div>
	</div>

	<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="./vendor/animsition/js/animsition.min.js"></script>
	<script src="./vendor/bootstrap/js/popper.js"></script>
	<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="./vendor/select2/select2.min.js"></script>
	<script src="./vendor/daterangepicker/moment.min.js"></script>
	<script src="./vendor/daterangepicker/daterangepicker.js"></script>
	<script src="./vendor/countdowntime/countdowntime.js"></script>
	<script src="./js/main.js"></script>
	<script src="./js/login.js"></script>

</body>

</html>