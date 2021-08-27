
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
							// sql to create table
							$sql = "CREATE TABLE merchant_accounts (
							id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
							username VARCHAR(100) NOT NULL,
							password VARCHAR(100) NOT NULL,
							Merchant_Name VARCHAR(100),
							Merchant_slug VARCHAR(100),
							Merchant_Status VARCHAR(100),
							reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
							)";
							if ($conn->query($sql) === TRUE) {
							  echo "Table MyGuests created successfully";
							} else {
							  echo "Error creating table: " . $conn->error;
							}

							$conn->close();
?>