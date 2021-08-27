	<?php
				/* Attempt MySQL server connection. Assuming you are running MySQL
				server with default setting (user 'root' with no password) */
				$link = mysqli_connect("divionline-sqldbserver.mysql.database.azure.com", "sqldbadmin@divionline-sqldbserver", "K@ntann@1234", "divionlinewpdb");
				 
				// Check connection
				if($link === false){
				    die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				 
				// Attempt insert query execution
				$sql = "INSERT INTO merchant_portal_orders (Customer_ID, Customer_Name, Product_order, Quantity, Shipping_Name, Shipping_Fee, Product_Price, Merchant_Name, Merchant_Merchant_slug, Status, Shipping_address, Shipping_address_lat, Shipping_address_lng, Merchant_address, Merchant_address_lat, Merchant_address_lng) VALUES ('4', 'Banjo' , '2 bottle of whiskey', '2', 'LBC', '200', '200', 'Agri-Growers MPC', 'agri-growers-mpc','Waiting_for_approval', '')";
				
				if(mysqli_query($link, $sql)){
				    echo "Records inserted successfully.";
				} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
		
		// Close connection;
		mysqli_close($link);
	?>