<?php 
		
	$servername = "divionline-sqldbserver.mysql.database.azure.com";
	$username = "sqldbadmin@divionline-sqldbserver";
	$password = "K@ntann@1234";
	$dbname = "divionlinewpdb";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM merchant_accounts");

echo "<table>";
		echo "<tr>";
			echo "<th>Username</th>";
			echo "<th>Password</th>";
			echo "<th>Merchant Name</th>";
			echo "<th>Merchant Slug</th>";
			echo "<th>Merchant Status</th>";
		echo "</tr>";
	while($row = mysqli_fetch_array($sql) ){
	$username =  $row['username'];
	$password =  $row['password'];
	$Merchant_Name =  $row['Merchant_Name'];
	$Merchant_slug =  $row['Merchant_slug'];
	$Merchant_Status =  $row['Merchant_Status'];
		echo "<tr>";
			echo "<td>". $username ."</td>";
			echo "<td> ". $password ."</td>";
			echo "<td> ". $Merchant_Name ."</td>";
			echo "<td> ". $Merchant_slug ."</td>";
			echo "<td> ". $Merchant_Status ."</td>";
		echo "</tr>";
}

	
	echo "</table>";
	
?>