<?php

$comcom = $_REQUEST["comcom"]; //takes "first name" from html and saves it in "first" (PHP)
$id = $_REQUEST["id"]; 

//$id = $row['id'];
//$tink = 5;
//

//echo "COMCOM $comcom ID #id";

//	echo "$id" . "<br/>" . "$tink";

	$dbc = @mysqli_connect( "sql.kucdinteractive.com", "kucd_kwalton", "2033306", "kucd_kwalton");

	$sql2 = "insert into subcomments (subcom, id) values ('$comcom', '$id')";
//	$sql2 = $row['id'];
//	$id = $sql2;
//	echo "<p>This is: " . "$id";

//echo $sql2;


$results = @mysqli_query( $dbc, $sql2);


	header('Location: index.php#jump');

?>



