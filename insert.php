	<?php

				/* Attempt MySQL server connection. Assuming you are running MySQL
				server with default setting (user 'root' with no password) */
				$link = mysqli_connect("divionline-sqldbserver.mysql.database.azure.com", "sqldbadmin@divionline-sqldbserver", "K@ntann@1234", "divionlinewpdb");
				 
				// Check connection
				if($link === false){
				    die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				 
				// Attempt insert query execution
				$sql = "INSERT INTO admin_account (username, password) VALUES ('divionl', 'divionl2021')";
				if(mysqli_query($link, $sql)){
				    echo "Records inserted successfully.";
				} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				 
		// Close connection;
		mysqli_close($link);


	?>