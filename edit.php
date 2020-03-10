<?php 
require('connection.php');

	session_start();
	$unameOld = $_SESSION['username'];

	$name = $_POST['fullname'];
	$website = $_POST['website'];
	$bio = $_POST['bio'];
	$email = $_POST['email'];
	$no_hp = $_POST['nohp'];
	$gender = $_POST['gender'];
	
	mysqli_query($conn, "UPDATE profile SET name = '$name', website = '$website', bio = '$bio', email = '$email', nohp = '$no_hp', gender = '$gender' WHERE username = '$unameOld'");

  header('location: profile.php');

 ?>