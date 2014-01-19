<?php
$uploadDir = dirname(__FILE__) . '/upload/';
$uploadFile = $uploadDir . basename($_FILES['pdf']['name']);
if(move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadFile)) {
	
echo '<div id="result">' . $_FILES['pdf']['name'] . '</div>';

$img_src = $_FILES['pdf']['name'];

$con=mysqli_connect("localhost","root","root","mediagallery");
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO uploads (src)
VALUES ('$img_src')");


mysqli_close($con);


} 

else {
echo '<div id="result">Fehler beim Speichern der Datei.</div>';
}
?>