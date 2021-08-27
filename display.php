<?php 
		
	$servername = "divionline-sqldbserver.mysql.database.azure.com";
	$username = "sqldbadmin@divionline-sqldbserver";
	$password = "K@ntann@1234";
	$dbname = "divionlinewpdb";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM merchant_accounts");
	?>
	
	<table class="hey">
		<style type="text/css">
			table.hey td {
			    padding: 20px;
			    border: 1px solid black;
			}
			table.hey th {
			    padding: 20px;
			    border: 1px solid black;
			    background: black;
			    color: white;
			    text-transform: uppercase;
			}
		</style>
		<thead>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>Merchant_Name</th>
			<th>Merchant_slug</th>
			<th>Merchant_Status</th>
			<th>Products</th>
			<th>product_type</th>
			<th>product_type_code</th>
		</thead>
	<?php

		while($row = mysqli_fetch_array($sql) ){
		$id =  $row['id'];
		$username =  $row['username'];
		$password =  $row['password'];
		$Merchant_Name =  $row['Merchant_Name'];
		$Merchant_slug =  $row['Merchant_slug'];
		$Merchant_Status =  $row['Merchant_Status'];
		$products =  $row['products'];
		$product_type =  $row['product_type'];
		$product_type_code =  $row['product_type_code'];
		?>
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $username; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $Merchant_Name; ?></td>
			<td><?php echo $Merchant_slug; ?></td>
			<td><?php echo $Merchant_Status; ?></td>
			<td><?php echo $products; ?></td>
			<td><?php echo $product_type; ?></td>
			<td><?php echo $product_type_code; ?></td>
		</tr>
		<?php 
	}
?>
	<!---------end of  table---------------->
		
	</table>
