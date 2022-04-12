<?php 
  
  $id = $_GET['id'];
  $dep = $_GET['dep'];

  require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM teacher WHERE id = $id AND dep = $dep" )
		or die("Can not execute query");

	$row = mysqli_fetch_array($results);
	?>
		<form action="updateprocess.php" method="GET">
			<label>ID:</label>
			<input type="number" name="id" value= "<?php echo $row['id']; ?>"><br>
			<label>Name:</label>
			<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
			<label>Department:</label>
			<input type="text" name="dep" value="<?php echo $row['dep']; ?>"><br>
			<label>NID:</label>
			<input type="number" name="nid" value="<?php echo $row['nid']; ?>"><br>
			<label>Birth:</label>
			<input type="date" name="birth" value="<?php echo $row['birth']; ?>"><br>
			<label>Address:</label>
			<input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
			<input type="submit" name="Submit">
		</form>
	<?php

?>