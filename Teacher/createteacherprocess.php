<?php

    $name = $_GET["name"];
    
    $dep = $_GET["dep"];

	$nid = $_GET["nid"];

    $birth = $_GET["birth"];

	$address = $_GET["address"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO teacher VALUES ( '$name','$dep','$nid','$birth','$address' )" )

		or die("Can not execute query");



	echo "Record inserted";

	echo "<p><a href=index.php>GO to Homepage</a>";

?>