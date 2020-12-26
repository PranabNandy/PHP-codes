<!DOCTYPE html>
<html>
<head>
		<title>Update</title>
</head>
<link rel="stylesheet" href="./view.css" />
<body>


	<?php
	$size=sizeof($_POST);
	$records=$size/3;
	//echo "<h1> $records </h1><br>";
	for($i=1;$i<=$records;$i++){

		$index1="id$i";
		$index2="pass$i";
		$index3="age$i";
		$id[$i]=$_POST[$index1];
		$pass[$i]=$_POST[$index2];
		$age[$i]=$_POST[$index3];
	}

	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	for($i=1;$i<=$records;$i++){

		$sql = "UPDATE nandyTest set  pass='$pass[$i]' , age=$age[$i] WHERE id='$id[$i]' ";

		if ($mysqli->query($sql) === TRUE) {
  				//echo "<h1>Record updated successfully</h1><br>";
		} else {
  			echo "Error updating record: " . $mysqli->error;
		}
	}


	$mysqli -> close();
	?>



	<?php
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	$sql = "SELECT * FROM nandyTest";
	
	$result = $mysqli -> query($sql) 

	?>
<form action="update.php" method="POST">
	<table id="tb">
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Age</th>
			
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]"; ?> <input type="hidden" value="<?php echo "$row[0]";?>" name="id<?php echo "$i";?>"/>
				</td>
			
			
				<td><input type="text" value="<?php echo "$row[1]";?>"    name="pass<?php echo "$i";?>"   /></td>
			

				<td><input type="text" value="<?php echo "$row[2]";?>"    name="age<?php echo "$i";?>"/></td>
				
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="3"><input type="submit" value=" --->  Update <--- " /></td>
  		</tr>

  	</table>
  </form>
  	<?php
  	$result -> free_result();
	$mysqli -> close();
	?>
</body>

</html>
