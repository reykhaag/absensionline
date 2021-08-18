<html>
<body>

<?php

$dbname = 'absensionline';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$NIM = $_REQUEST["NIM"];
$USERID = $_REQUEST["USERID"];
$longitude = $_REQUEST["longitude"]; 
$latitude = $_REQUEST["latitude"]; 



$query = "INSERT INTO absensi_online (NIM,USERID,longitude,latitude) VALUES ('$NIM', '$USERID','$longitude','$latitude')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>