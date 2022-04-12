<?php

    $id = $_GET["id"];
    $dep = $_GET["dep"];
    $title = $_GET["title"];
    $credit = $_GET["credit"];
    $syllabus = $_GET["syllabus"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE course SET dep='$dep', title='$title', credit='$credit', syllabus='$syllabus' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Dept = $dep <br> Title = $title <br> Credit = $credit <br> Syllabus = $syllabus";



	echo "<p><a href=read.php>READ all records</a>";

?>