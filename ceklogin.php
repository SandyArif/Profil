<?php
	session_start();
	include "db_connect.php";
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="SELECT * FROM login where username ='$username' and password ='$password'";
	$query = mysqli_query($db_link,$sql);
	if (mysqli_num_rows($query)!=0) 
	{
		 echo "<br>Login Sukses";
		 	$data = mysqli_fetch_array($query);
		 	$_SESSION['username'] = $data['username'];
		 	$_SESSION['password'] = $data['password'];
		 	$_SESSION['LOGIN'] = "LOGIN";
		 	header("location:index.html");
		 	
	}
	else
	{
		echo "<br>Login Gagal";
		echo "<a href=login.php>kembali</a>";
	}

	?>