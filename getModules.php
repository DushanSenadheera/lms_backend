<?php

include 'connection.php';

$sql = "SELECT * FROM module";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $modName = $row["module"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>