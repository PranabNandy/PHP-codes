<!DOCTYPE html>
<html>
<head>
		<title>Delete</title>
</head>
<body>
	<?php
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}
	$size=sizeof($_POST);
	$i=0;
	$j=1;
	while($i<$size){
		$index="b".$j;
		if(isset($_POST[$index])){
			$arr[$i]=$_POST[$index];
			$i++;
		}
		$j++;

	}
	$sql = "DELETE FROM nandyTest WHERE id='DHEERAJ' ";
	for($i=0;$i<$size;$i++){
		$sql = "DELETE FROM nandyTest WHERE id='$arr[$i]' ";
		if ($mysqli->query($sql) === TRUE) {
  			echo "Record deleted successfully<br>";
		} else {
  			echo "Error deleting record: " . $mysqli->error;
		}
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
