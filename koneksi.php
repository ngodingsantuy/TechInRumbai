<?php

$server = "localhost";
$user = "root";
$password = "";
$name_database = "artikel";

$db = mysqli_connect("$server", "$user", "$password", "$name_database");

if (!$db ) {
	die("gagal terhubung dengan database: " . mysqli_connect_error());	
}

?>