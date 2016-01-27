<?php

$username = $_POST['username'];



include('connect.php');



$querydelete = "DELETE FROM `emaillist` WHERE `username` = '$username'";

$updatedb = mysqli_query($con,$querydelete);

mysqli_close($con);

if ($updatedb) {
	echo "<br/>you deleted Username: " . $username . " and the Email from the database";
} else {
	echo "info not added";
}


?>