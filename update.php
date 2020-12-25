<!DOCTYPE html>
<html>
<head>
		<title>Update</title>
</head>
<body>
	<?php
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	$sql = "UPDATE nandyTest set pass='Pranab' WHERE age=22 ";
	if ($mysqli->query($sql) === TRUE) {
  			echo "Record updated successfully";
	} else {
  		echo "Error updating record: " . $mysqli->error;
	}
	//if ($result = $mysqli -> query($sql)) {
		
		
  		/*while ($row = $result -> fetch_row()) {
    		//printf ("%s (%s)\n", $row[0], $row[1]);
    		echo "<h3>$row[0] ------- $row[1] -------  $row[2] </h3>";
  		}*/
  		
  		
  //	$result -> free_result();
	//}
	

	$mysqli -> close();
	?>
	
</body>

</html>
