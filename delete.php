<?php
$servername = "divionline-sqldbserver.mysql.database.azure.com";
$username = "sqldbadmin@divionline-sqldbserver";
$password = "K@ntann@1234";
$dbname = "divionlinewpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM regions_rate WHERE Regions = 'ISLANDER' ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>