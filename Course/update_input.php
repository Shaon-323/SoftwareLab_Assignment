<?php

	$id = $_GET["id"];
    $dep = $_GET["dep"];
	$title = $_GET["title"];
    $credit = $_GET["credit"];
    $syllabus = $_GET["syllabus"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Department: <input type=text name=dep value='<?php echo $dep; ?>'>

	<p>

	Title: <input type=text name=title value='<?php echo $title; ?>'>

	<p>

    Credit: <input type=number name=credit value='<?php echo $credit; ?>'>

	<p>

    Syllabus: <input type=text name=syllabus value='<?php echo $syllabus; ?>'>

	<p>

	<input type=submit value=Update>

</form>