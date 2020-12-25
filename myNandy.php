<?php
	$user='root';
	$pass='';
	$db='nandyTest';
	$con=new mysqli('localhost',user,pass,db);

	if(!$con){
		echo "<h1>connection failed</h1>";
	}
	else 
		echo "<h1>Conncected </h1>";

	//mysqli_close($con);
	$con->close();

?>