<?php

include 'connection.php';

$modName = $_POST['modName'];

$sql = "INSERT INTO module (modName)
VALUES ('$modName');";

if (mysqli_multi_query($conn, $sql)) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>