<?php 
		
	$servername = "divionline-sqldbserver.mysql.database.azure.com";
	$username = "sqldbadmin@divionline-sqldbserver";
	$password = "K@ntann@1234";
	$dbname = "divionlinewpdb";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM rates_customer");

	?>
	<table>
		<tr>
			<td>Customer_ID</td>
			<td>SHIPPING_NAME</td>
			<td>RATES</td>
	<?php
		while($row = mysqli_fetch_array($sql) ){
		$username =  $row['Customer_ID'];
		
		$password =  $row['RATES'];
		$Name =  $row['SHIPPING_NAME'];
			
		?>
			<tr>
			<td><?php echo $username; ?></td>
			<td><?php echo $Name; ?></td>
			<td><?php echo $password; ?></td>
			</tr>
		<?php 
	}

?>
	<!---------end of  table---------------->
		</tr>
	</table>
