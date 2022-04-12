<?php

	$dep = $_GET["dep"];
	$title = $_GET["title"];
    $credit = $_GET["credit"];
    $syllabus = $_GET["syllabus"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course VALUES ( '', '$dep', '$title','$credit','$syllabus' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Department = $dep <br> Title = $title <br> Credit = $credit <br> Syllabus = $syllabus";


	echo "<p><a href=read.php>READ all records</a>";

?>