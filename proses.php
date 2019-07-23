<?php

if (isset($_POST['submit'])) {
	# code...

	$user=$_POST['username'];
	$pass=$_POST['pass'];
	

}
if ($user=="admin" && $pass=="admin") {
	# code...
	header("location:admin.php ");
}else{
	echo "salah password nya atau usernamenya salah";
}

  ?>