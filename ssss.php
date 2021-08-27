       <form>
		<input type="text" name="shipment_mode" value="1">
		<input type="text" name="Origin" value="SLA">  
		<input type="text" name="TrackingNo" value="35900000000004">
		<input type="datetime" name="TransactionDate" value="">
		<input type="text" name="ShipperAccountNo" value="2015062300003"> 
		<input type="text" name="Shipper" value="">
		<input type="text" name="ShipperStBldg" value="">
		<input type="text" name="ShipperBrgy" value="">
		<input type="text" name="ShipperCityMuncipality" value="">
		<input type="text" name="ShipperProvince" value="">
		<input type="text" name="ShipperContactNumber" value="">
		<input type="text" name="ShipperSendSMS" value="0">
		<input type="text" name="ShipperMobileNumber" value="">


		<input type="text" name="ProductLine" value="">
		<input type="text" name="ServiceMode" value="">
		<input type="text" name="CODAmount" value="">
		<input type="datetime" name="PreferredDate" value="">


		<input type="text" name="Consignee" value="">
		<input type="text" name="ConsigneeStBldg" value="">
		<input type="text" name="ConsigneeBrgy" value="">
		<input type="text" name="ConsigneeCityMuncipality" value="">
		<input type="text" name="ConsigneeProvince" value="">
		<input type="text" name="ConsigneeContactNumber" value="">
		<input type="text" name="ConsigneeSendSMS" value="">
		<input type="text" name="ConsigneeMobileNumber" value="">

		<input type="text" name="Quantity" value="">
		<input type="text" name="PKG" value="">
		<input type="text" name="ACTWTkgs" value="">
		<input type="text" name="LengthCM" value="">
		<input type="text" name="WidthCM" value="">
		<input type="text" name="HeightCM" value="">
		<input type="text" name="DeclaredValue" value="">
		<input type="text" name="AttachmentNameOne" value="">
		<input type="text" name="ReferenceNoOne" value="">
		<input type="text" name="AttachmentNameTwo" value="">
		<input type="text" name="ReferenceNoTwo" value="">
		<input type="text" name="AttachmentNameThree" value="">
		<input type="text" name="ReferenceNoThree" value="">
		<input type="text" name="AttachmentNameFour" value="">
		<input type="text" name="ReferenceNoFour" value="">
		<input type="text" name="DestinationCode" value="">
		<input type="text" name="Client" value="">

		<input type="submit" name="submit">


       </form>



    <?php

    

    if (isset($_POST['submit'])) {
    	$shipment_mode = $_POST['shipment_mode'];
            $Origin = $_POST['Origin'];
            $TrackingNo = $_POST['TrackingNo'];
            $TransactionDate = $_POST['TransactionDate'];
            $ShipperAccountNo = $_POST['ShipperAccountNo'];
            $Shipper = $_POST['Shipper'];
            $ShipperStBldg = $_POST['ShipperStBldg'];
            $ShipperBrgy = $_POST['ShipperBrgy'];
            $ShipperCityMuncipality = $_POST['ShipperCityMuncipality'];
            $ShipperProvince = $_POST['ShipperProvince'];
            $ShipperContactNumber = $_POST['ShipperContactNumber'];
            $ShipperSendSMS = $_POST['ShipperSendSMS'];
            $ShipperMobileNumber = $_POST['ShipperMobileNumber'];

            $ProductLine = $_POST['ProductLine'];
            $ServiceMode = $_POST['ServiceMode'];
            $CODAmount = $_POST['CODAmount'];
            $PreferredDate = $_POST['PreferredDate'];


            $Consignee = $_POST['Consignee'];
            $ConsigneeStBldg = $_POST['ConsigneeStBldg'];
             $ConsigneeBrgy = $_POST['ConsigneeBrgy'];
            $ConsigneeCityMuncipality = $_POST['ConsigneeCityMuncipality'];
            $ConsigneeProvince = $_POST['ConsigneeProvince'];
            $ConsigneeContactNumber = $_POST['ConsigneeContactNumber'];
            $ConsigneeSendSMS = $_POST['ConsigneeSendSMS'];
            $ConsigneeMobileNumber = $_POST['ConsigneeMobileNumber'];


            $Quantity = $_POST['Quantity'];
            $PKG = $_POST['PKG'];
             $ACTWTkgs = $_POST['ACTWTkgs'];
            $LengthCM = $_POST['LengthCM'];
            $WidthCM = $_POST['WidthCM'];
            $HeightCM = $_POST['HeightCM'];
             $DeclaredValue = $_POST['DeclaredValue'];
            $AttachmentNameOne = $_POST['AttachmentNameOne'];
            $ReferenceNoOne = $_POST['ReferenceNoOne'];
            $AttachmentNameTwo = $_POST['AttachmentNameTwo'];
             $ReferenceNoTwo = $_POST['ReferenceNoTwo'];
            $AttachmentNameThree = $_POST['AttachmentNameThree'];
            $ReferenceNoThree = $_POST['ReferenceNoThree'];
            $AttachmentNameFour = $_POST['AttachmentNameFour'];
            $ReferenceNoFour = $_POST['ReferenceNoFour'];
            $DestinationCode = $_POST['DestinationCode'];
            $Client = $_POST['Client'];


            $url = 'https://api.sandbox.deliveree.com/public_api/v1/deliveries/';
            $data = array(
                        'shipment_mode' => $shipment_mode,
                        'Origin' => $Origin,
                        'TrackingNo' => $TrackingNo,
                        'TransactionDate' => $TransactionDate,
                        'ShipperAccountNo' => $ShipperAccountNo,
                        'Shipper' => $Shipper,
                        'ShipperStBldg' => $ShipperStBldg,
                        'ShipperBrgy' => $ShipperBrgy,
                        'ShipperCityMuncipality' => $ShipperCityMuncipality,
                        'ShipperProvince' => $ShipperProvince,
                        'ShipperContactNumber' => $ShipperContactNumber,
                        'ShipperSendSMS' => $ShipperSendSMS,
                        'ShipperMobileNumber' => $ShipperMobileNumber,

                        'ProductLine' => $ProductLine,
                        'ServiceMode' => $ServiceMode,
                        'CODAmount' => $CODAmount,
                        'PreferredDate' => $PreferredDate,

                        'Consignee' => $Consignee,
                        'ConsigneeStBldg' => $ConsigneeStBldg,
                        'ConsigneeBrgy' => $ConsigneeBrgy,
                        'ConsigneeCityMuncipality' => $ConsigneeCityMuncipality,
                        'ConsigneeProvince' => $ConsigneeProvince,
                        'ConsigneeContactNumber' => $ConsigneeContactNumber,
                        'ConsigneeSendSMS' => $ConsigneeSendSMS,
                        'ConsigneeMobileNumber' => $ConsigneeMobileNumber,

                        'Quantity' => $Quantity,
                        'PKG' => $PKG,
                        'ACTWTkgs' => $ACTWTkgs,
                        'LengthCM' => $LengthCM,
                        'WidthCM' => $WidthCM,
                        'HeightCM' => $HeightCM,
                        'DeclaredValue' => $DeclaredValue,
                        'AttachmentNameOne' => $AttachmentNameOne,
                        'ReferenceNoOne' => $ReferenceNoOne,
                        'AttachmentNameTwo' => $AttachmentNameTwo,
                        'ReferenceNoTwo' => $ReferenceNoTwo,
                        'AttachmentNameThree' => $AttachmentNameThree,
                        'ReferenceNoThree' => $ReferenceNoThree,
                        'AttachmentNameFour' => $AttachmentNameFour,
                        'ReferenceNoFour' => $ReferenceNoFour,
                        'DestinationCode' => $DestinationCode,
                        'Client' => $Client,

                       
                        
                     );
            $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
            $options = array(
                'http' => array(
                'method' => 'POST',
                'header' => "Ocp-Apim-Subscription-Key:5266f94907dd4951ad4439161ddfa375\r\n".
                    "Content-Type: text/xml\r\n" ,
                    "w",
                    'content' => json_encode($data)
                )
            );
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        if ($response === FALSE) { echo "Please Double check the fields"; }else{
          $json_array=json_decode($response,true); 
        	 
        	}
}
            
?>



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

$sql0 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('42', 'METRO-MANILA', 'NCR');";

$sql = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('8', 'BATAAN', 'LUZON');";

$sql1 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('14', 'BULACAN', 'LUZON');";

$sql2 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('54', 'PAMPANGA', 'LUZON');";

$sql3 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('9', 'BATANGAS', 'LUZON');";

$sql4 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('21', 'CAVITE', 'LUZON');";

$sql5 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('35', 'LAGUNA', 'LUZON');";

$sql6 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('22', 'CEBU', 'VISAYAS');";

$sql7 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('31', 'ILOILO', 'VISAYAS');";

$sql9 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('31', 'LEYTE', 'VISAYAS');";

$sql11 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('45', 'NEGROS-OCCIDENTAL', 'VISAYAS');";

$sql12 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('46', 'NEGROS-ORIENTAL', 'VISAYAS');";

$sql13 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('48', 'NORTHERN-SAMAR', 'VISAYAS');";

$sql14 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('72', 'WESTERN SAMAR', 'VISAYAS');";

$sql15 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('25', 'DAVAO-DEL-SUR', 'MINDANAO');";

$sql16 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('36', 'LANAO-DEL-NORTE', 'VISAYAS');";

$sql18 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('39', 'MAGUINDANAO', 'VISAYAS');";

$sql20 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('43', 'MISAMIS-OCCIDENTAL', 'MINDANAO');";

$sql21 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('44', 'MISAMIS-ORIENTAL', 'MINDANAO');";

$sql22 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('64', 'SOUTH-COTABATO', 'MINDANAO');";

$sql23 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('2', 'AGUSAN-DEL-NORTE', 'VISAYAS');";

$sql24 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('74', 'ZAMBOANGA-DEL-NORTE', 'MINDANAO');";

$sql25 = "INSERT INTO provinces_lbc (ProvinceID, ProvinceName, Regions)
VALUES ('75', 'ZAMBOANGA-DEL-SUR', 'MINDANAO');";


if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql0) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql1) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql2) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql3) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql4) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql5) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql6) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql9) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql11) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql12) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql13) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql14) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql15) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql16) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql18) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql20) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql21) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql22) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql23) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql24) === TRUE) {
  echo "New records created successfully";
}
if ($conn->multi_query($sql25) === TRUE) {
  echo "New records created successfully";
}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>