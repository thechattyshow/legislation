<?php

$sql = "SELECT billID, billTitle, billText FROM bills_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["billID"]." ". $row["billTitle"].": ". $row["billText"]. "<br>";
  }
} else {
  echo "0 results";
}
?> 