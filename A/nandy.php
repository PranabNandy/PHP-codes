<!DOCTYPE html>
<html>
<head>
		<title>PHP Demo</title>
</head>
<body>
	<?php

	$user='root';
	$pass='';
	$db='nandy';
	$con=new mysqli('localhost',$user,$pass,$db);

	if(!$con){
		echo "<h1>connection failed</h1>";
	}
	else {

		echo "<h1>Conncected </h1>";
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		$sql = "SELECT * FROM nandyTest where id='$username'";
		$result=$con->query($sql);
		if($result -> fetch_row()){
			if($username=='admin' || $username=='Admin'){
				echo "<h1>Admin Time</h1> ";
				$link_address="update.html";
				echo '<h3><a href="'.$link_address.'">Update</a>  </h3> ';
				$link_address2="insert.html";
				echo '<h3><a href="'.$link_address2.'">Insert</a>  </h3>';
				$link_address3="delete.html";
				echo '<h3> <a href="'.$link_address3.'">Delete</a> </h3>';
				//echo "<br><a href="insert.html">Insert </a> <a href="update.html">UPDATE </a> <a href="delete.html">Delete </a>";
			}
			else{
				//echo "<br> <a href="update2.html">UPDATE2 </a> ";
				$link_address="update2.html";
				echo '<h3><a href="'.$link_address.'">Update2</a></h3>';
			}
		}
		else{
			echo "Incorrect Userid and Password";
			header("Location: form.php?uname=" . $username . "&pw=" . $pass);

		}


		

	}

	//mysqli_close($con);
	$con->close();

	?>
</body>

</html>

