<?php

include 'connection.php';

$moduleID = $_POST['moduleID'];

$sql = "DELETE FROM materials WHERE moduleID = '$moduleID'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

?>