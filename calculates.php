<?php
if(isset($_POST["submit"]))
{
	$latitudefrom = $_POST['latitude_doc'];
	$longitudefrom = $_POST['longitude_doc'];

	$latitudeto = $_POST['coordinates_lat'];
	$longitudeto = $_POST['coordinates_lng'];

	$theta = $longitudefrom - $longitudeto;
	$dist = sin(deg2rad($latitudefrom)) * sin(deg2rad($latitudeto)) + cos(deg2rad($latitudefrom)) * cos(deg2rad($latitudeto)) * cos(deg2rad($theta));
	$dist = acos($dist);
	$dist = rad2deg($dist);
	$miles = $dist * 60 * 1.1515;
	echo "<br>";

	echo "<h4>"."Distance"."</h4>";
	echo "<p>" . $distance = ($miles * 1.609344)." km" . "</p>";
}
?>