<?php
include("../connect.php");


// sql to delete a record
$sql = "DELETE FROM users WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 