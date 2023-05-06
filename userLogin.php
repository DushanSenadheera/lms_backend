<?php

include 'connection.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM student where userEmail = '$email' && userPassword = '$pass';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "succesful";
} else {
  echo "failed";
}

mysqli_close($conn);

?>