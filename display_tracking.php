<?php 
		
	$servername = "divionline-sqldbserver.mysql.database.azure.com";
	$username = "sqldbadmin@divionline-sqldbserver";
	$password = "K@ntann@1234";
	$dbname = "divionlinewpdb";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM tracking_no");
	
		while($row = mysqli_fetch_array($sql) ){
		$Customer_ID =  $row['Tracking_no'];

		echo $Customer_ID;
				
	}
?>
	<!---------end of  table---------------->
		</tr>
	</table>
