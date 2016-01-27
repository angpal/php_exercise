<?php

session_start();

if (!isset($_SESSION['username'])) {
	header('location:scripts/login.php');
}


?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	<div class="page-header">
  <h1>PHP Exercise<small>index.php</small></h1>
</div>
	<div class = "container">
		<div class="row">
			<div class= "col-md-offset-2 col-md-8 ">

				<h2>Add User to Database</h2>

				<form action="scripts/sentInfoToDB.php" method="POST">

					<div class="input-group input-group-lg">
				  		<span class="input-group-addon" id="sizing-addon1">Username</span>
				  		<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
					</div><br>

					<div class="input-group input-group-lg">
				  		<span class="input-group-addon" id="sizing-addon1">Email</span>
				  		<input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
					</div><br>

					<input type="submit" name="submit" class="btn btn-success"></input>
				</form>	


				<h2>Delete User from Database</h2>
				<form action="scripts/removeFromDB.php" method="POST">

					<div class="input-group input-group-lg">
				  		<span class="input-group-addon" id="sizing-addon1">Username</span>
				  		<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
					</div><br>

					<input type="submit" name="delete" value="delete" class="btn btn-danger"></input>
				</form>	
			</div>
		</div>
	</div>

</body>
</html>