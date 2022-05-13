<?php

include "database-connect.php";

$newBillNumber = $_GET(numberInput);
$newBillTitle = $_GET(titleInput);
$newBillText = $_GET(textInput);

echo "<p> adding $newBillNumber , $newBillTitle and $newBillText </p>";

/* $billTextSearch = $_GET["billtext"];
 // Search database for text railways
	echo "<h2> Results for $billTextSearch </h2>";
	$sql = "SELECT billID, billTitle, billText FROM bills_table WHERE billText LIKE '%". $billTextSearch."%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["billID"]." ". $row["billTitle"].": ". $row["billText"]. "<br>";
	}
	} else {
	echo "0 results";
	}

$conn->close();
*/
?>