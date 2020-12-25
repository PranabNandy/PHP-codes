<!DOCTYPE html>
<html>
<head>
		<title>Show</title>
</head>
<link rel="stylesheet" href="./view.css" />
<body>
	<?php
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	$sql = "SELECT * FROM nandyTest";
	
	$result = $mysqli -> query($sql) 

	?>
<form action="delete.php" method="POST">
	<table id="tb">
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Age</th>
			<th>Select to delete</th>
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]";  ?></td>
			
			
				<td><?php echo "$row[1]";  ?></td>
			

				<td><?php echo "$row[2]";  ?></td>
				<td><input type="checkbox" value="<?php echo "$row[0]";  ?>"name="b<?php echo "$i";?>"/></td>
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="4"><input type="submit" value=" --->  Delete <--- " /></td>
  		</tr>

  	</table>
  </form>
  	<?php
  	$result -> free_result();
	$mysqli -> close();
	?>
	
</body>

</html>
