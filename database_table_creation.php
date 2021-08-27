
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
							$sql = "CREATE TABLE tracking_no (
							id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
							Shipping_Name VARCHAR(100) NOT NULL,
							Tracking_no VARCHAR(100) NOT NULL,
							Product_order VARCHAR(100),
							Quantity VARCHAR(100),
							Shipping_Name VARCHAR(100),
							Shipping_Fee VARCHAR(100),
							Product_Price VARCHAR(100),
							Merchant_Name VARCHAR(100),
							Merchant_Merchant_slug VARCHAR(100),
							Status VARCHAR(100),
							reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
							)";
							if ($conn->query($sql) === TRUE) {
							  echo "Table MyGuests created successfully";
							} else {
							  echo "Error creating table: " . $conn->error;
							}

							$conn->close();

?>