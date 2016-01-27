<?php

$username = $_POST['username'];
$email = $_POST['email'];


include('connect.php');

$queryadd = "INSERT INTO `emaillist` (`userID`, `username`, `email`) VALUES (NULL, '$username', '$email');";



$updatedb = mysqli_query($con,$queryadd);

mysqli_close($con);

if ($updatedb) {
	echo "<br/>you added Username: " . "and the Email: " . $email . "to the database";
} else {
	echo "info not added";
}


?>