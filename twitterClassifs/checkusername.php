<?php
//echo "true";

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

@ $mysqli = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

$newName = $_GET['newUsername'];

$q = "SELECT name FROM users";

$names = [];
if ($mysqli->multi_query($q)){
	do {
		if ($result = $mysqli->use_result()) {
			while ($row = $result->fetch_row()) {
				array_push($names, $row);
            		}
			$result->close();
		}
	} while($mysqli->next_result());
}

$mysqli->close();
for ($i=0; $i< count($names); $i++){
	$names[$i] = $names[$i][0];
}

if(in_array($_GET['newUsername'], $names))
{
	echo "true";
}

else {
	echo "false";
}
?>