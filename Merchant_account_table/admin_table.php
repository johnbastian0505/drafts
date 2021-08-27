
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
						$sql = "CREATE TABLE admin_account (
						id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						username VARCHAR(100) NOT NULL,
						password VARCHAR(100) NOT NULL,
						reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
						)";
						if ($conn->query($sql) === TRUE) {
						  echo "Table created successfully";
						} else {
						  echo "Error creating table: " . $conn->error;
						}
						$conn->close();

?>