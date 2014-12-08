<?php

$first = $_REQUEST["first"]; //takes "first name" from html and saves it in "first" (PHP)
$last = $_REQUEST["last"];
$message = $_REQUEST["message"];

header('Location: index.php#jump');


echo "$first" . " " . "$last" . " " . "$message";

	$dbc = @mysqli_connect( "sql.kucdinteractive.com", "kucd_kwalton", "2033306", "kucd_kwalton");

	$sql = "insert into wedding (first, last, message) values (\"$first\", \"$last\", \"$message\")";

//echo $sql;


$results = @mysqli_query( $dbc, $sql);



?>



