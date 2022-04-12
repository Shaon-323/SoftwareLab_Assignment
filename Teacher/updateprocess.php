<?php
    
    $id = $_GET["id"];

	$name = $_GET["name"];

	$dep = $_GET["dep"];

	$nid = $_GET["nid"];

	$birth = $_GET["birth"];

	$address = $_GET["address"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE teacher SET name='$name', dep='$dep',nid ='$nid',birth='$birth',address='$address' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> ";



	echo "<p><a href=index.php>GO to Homepage</a>";

?>