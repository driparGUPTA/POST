<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">
		.container {

			background: linear-gradient(111.6deg, rgb(174, 68, 223) 27.3%, rgb(246, 135, 135) 112.7%);
			width: 67%;
		}



		#reset {
			margin-top: 40px;
			margin-left: 120px;


		}

		.login {

			box-shadow: 4px 4px 4px;
			padding: 4px 0px 15px 3px;
			width: 84%;
			margin-top: 43px;
			background-color: #9932CC;

		}


		button {
			width: 45%;
		}


		h2 {
			color: white;
		}

		label {
			color: white;
		}

		p {
			color: white;
		}

		.yu {
			color: white;
			border: #9932CC;
		}

		.computer {
			margin-top: 3px;
			padding: 50px;
		}

		.div3 {
			color: #00ff00;
			font-size: 20px;
		}

		.div4 {
			color: #ffff33;
			font-size: 20px;
		}


		.Bold {
			color: #000000;
			font-size: 20px;
		}
	</style>
</head>
<?php
if (isset($_POST['btn'])) {
	$un = $_POST['u'];
	$pwd = $_POST['p'];
	if ($un == "abc@gmail.com" && $pwd == "1234") {
		$msg = "<div  class='div4' > User Login </div>";
	} else {
		$msg = "<b class='Bold' >Enter correct User Id or Password </b>";
	}
} else {
	$msg = "<div  class='div3' >Enter User Id and Password</div>";
}
?>

<body>
	<br>
	<div class="container">
		<div class="row" style="padding:20px;">
			<div class="col-12">
				<img src="logo.png" class=" float-start rounded" width="210px">
				<p class="float-end">PHP</p>
			</div>

			<div class="row">
				<div class="col-6 computer">
					<img src="computer.jpg" width="330px" height="410px" class="rounded" style=" box-shadow: 4px 4px 4px;">
				</div>

				<div class="col-6">
					<div class="card login">
						<div class="card-body">
							<h2 class="card-title">Login Program Using </h3>
								<h3 class="card-title" style="color:#FFFF00;">If Else</h3> <br>
								<?php
								if (isset($msg) && !empty($msg)) {
									echo $msg;
								}
								?>
								<form method="post">
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="u" class="form-control">
									</div><br>
									<div class="form-group" id="pass">
										<label>Password</label>
										<input type="password" name="p" class="form-control">
									</div>

									<div id="reset">
										<button type="reset" class="btn btn-light">Reset</button>&nbsp; &nbsp;
										<button type="submit" name="btn" class="btn btn-warning">Login</button>
									</div>

								</form>
						</div>

					</div>


				</div>
			</div>

		</div>

</body>

</html>