<?php
	/*$connect=mysqli_connect("localhost","root","") or die("Unable to connect");*/
	
	$connect=mysqli_init(); //mysqli_ssl_set($connect, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($connect, "cycle_codes.mysql.database.azure.com", "unknownmind@ictc-obar", "#P@ssw0rd", "cycle_codes", "3306");

	mysqli_select_db($connect,"cycle_codes");
	if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>