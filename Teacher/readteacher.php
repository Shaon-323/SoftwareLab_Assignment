<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM teacher" )
		or die("Can not execute query");


	echo "<table border> \n";
	echo "<th>id</th> 
          <th>name</th>
          <th>dep</th>
          <th>nid</th> 
          <th>birth</th>
          <th>address</th>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $name </td>";
		echo "<td> $dep </td>";
		echo "<td> $nid </td>";
        echo "<td> $birth </td>";
		echo "<td> $address </td>";
	}

	echo "</table> \n";

	echo "<p><a href=index.php>GO to Homepage</a>";
?>