<?php
   if(isset($_POST['submit'])){


  //The XML string that you want to send.
  $xml = '<?xml version="1.0" encoding="utf-8"?>
    <PickupRequestEntity xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
  <ShipmentMode>1</ShipmentMode>
  <Origin>SLA</Origin>
  <TrackingNo>'.$TrackingNo.'</TrackingNo>

  <TransactionDate>06/16/2021 22:06:36</TransactionDate>
  <ShipperAccountNo>'.$ShipperAccountNo.'</ShipperAccountNo>
  <Shipper>'.$Shipper.'</Shipper>
  <ShipperStBldg>'.$Shipper.'</ShipperStBldg>
  <ShipperBrgy>'.$ShipperStBldg.'</ShipperBrgy>
  <ShipperCityMuncipality>'.$ShipperCityMuncipality.'</ShipperCityMuncipality>
  <ShipperProvince>'.$ShipperProvince.'</ShipperProvince>
  <ShipperContactNumber>'.$ShipperContactNumber.'</ShipperContactNumber>
  <ShipperSendSMS>'.$ShipperSendSMS.'</ShipperSendSMS>
  <ShipperMobileNumber>'.$ShipperMobileNumber.'</ShipperMobileNumber>

  <ProductLine>'.$ProductLine.'</ProductLine>
  <ServiceMode>'.$ServiceMode.'</ServiceMode>
  <CODAmount>'.$CODAmount.'</CODAmount>
  <PreferredDate>08/12/2021 13:06:44</PreferredDate>

  <Consignee>'.$Consignee.'</Consignee>
  <ConsigneeStBldg>'.$ConsigneeStBldg.'</ConsigneeStBldg>
  <ConsigneeBrgy>'.$ConsigneeBrgy.'</ConsigneeBrgy>
  <ConsigneeCityMuncipality>'.$ConsigneeCityMuncipality.'</ConsigneeCityMuncipality>
  <ConsigneeProvince>'.$ConsigneeProvince.'</ConsigneeProvince>
  <ConsigneeContactNumber>'.$ConsigneeContactNumber.'</ConsigneeContactNumber>
  <ConsigneeSendSMS>'.$ConsigneeSendSMS.'</ConsigneeSendSMS>
  <ConsigneeMobileNumber>'.$ConsigneeMobileNumber.'</ConsigneeMobileNumber>

  <Quantity>'.$Quantity.'</Quantity>
  <PKG>'.$PKG.'</PKG>
  <ACTWTkgs>'.$ACTWTkgs.'</ACTWTkgs>
  <LengthCM>'.$LengthCM.'</LengthCM>
  <WidthCM>'.$WidthCM.'</WidthCM>
  <HeightCM>'.$HeightCM.'</HeightCM>
  <DeclaredValue>'.$DeclaredValue.'</DeclaredValue>

  <AttachmentNameOne>'.$AttachmentNameOne.'</AttachmentNameOne>
  <ReferenceNoOne>'.$ReferenceNoOne.'</ReferenceNoOne>

  <AttachmentNameTwo>'.$AttachmentNameTwo.'</AttachmentNameTwo>
  <ReferenceNoTwo>'.$ReferenceNoTwo.'</ReferenceNoTwo>

  <AttachmentNameThree>'.$AttachmentNameThree.'</AttachmentNameThree>
  <ReferenceNoThree>'.$ReferenceNoThree.'</ReferenceNoThree>

  <AttachmentNameFour>'.$AttachmentNameFour.'</AttachmentNameFour>
  <ReferenceNoFour>'.$ReferenceNoFour.'</ReferenceNoFour>

  <DestinationCode>'.$DestinationCode.'</DestinationCode>
  <Client>'.$Client.'</Client>
</PickupRequestEntity>';

//The URL that you want to send your XML to.
$url = 'https://lbcapigateway.lbcapps.com/lbcpickuprequest/v1/api/DirectInjection/InsertPickupRequest';

//Initiate cURL
$curl = curl_init($url);

//Set the Content-Type to text/xml.
$headers = array(
    'Content-type: application/xml',
    'Content-type: application/xml',
    'Ocp-Apim-Subscription-Key:5266f94907dd4951ad4439161ddfa375',
);

curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);

//Set CURLOPT_POST to true to send a POST request.
curl_setopt($curl, CURLOPT_POST, true);

//Attach the XML string to the body of our request.
curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);

//Tell cURL that we want the response to be returned as
//a string instead of being dumped to the output.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//Execute the POST request and send our XML.
$result = curl_exec($curl);

//Do some basic error checking.
if(curl_errno($curl)){
    throw new Exception(curl_error($curl));
}
//Close the cURL handle.
curl_close($curl);

//Print out the response output.
echo $result;
}
    	
            
?>