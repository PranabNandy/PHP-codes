<!DOCTYPE html>
<html>
<head>
		<title>PHP Demo</title>
</head>
<body>
	<?php
	echo "<h1>0.Joi Baba Sai Nath</h1>";

	echo "<br>";

	echo date('h:i:s:u, F I');

	echo "<br/>";

	define('pi',3.14);

	echo "Value of pi is : " . pi;

	define('Name',"Pran  ab");

	echo "<h3>name is : </h3>" . Name;

	$rand=5;
	echo "<br>random number is : " . ++$rand;
	++$rand;
	echo "<br>random number is : " . $rand++;

	if($rand>11){
		echo "<br> IF condition " . $rand;
	}
	else if($rand==11){
		echo " <br> ELSE IF condition " . $rand;
	}
	else{
		echo " <br> ELSE condition " . $rand;
	}
	$arr=array('P','RANAB','NANDY');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST["username"];
		$pass = $_POST["pass"];
	echo "<br> Arr at index 2 :  " . $arr[2] . "<br>" . $username . "<br> " . $pass;
	}
	else{
		echo "<br>NO";
	}

	//$username = $_REQUEST["username"]
	//define('username',"Pranab");
	//define('pass',"Pranab");
	/*$username = $_POST['username'];
	$pass = $_POST['pass'];

	echo "<h3>Name is : </h3>" . $username;
	echo "<h3>Password is : </h3>" . $pass;*/


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
		$sql = "INSERT INTO nandyTest(id,pass,age) values ('$username','$pass',22)";
		if($con->query($sql)){
			echo "Successfully Inserted $sql";
		}
		else{
			echo "Error during insertion";
		}




	}

	//mysqli_close($con);
	$con->close();

	?>
</body>

</html>

