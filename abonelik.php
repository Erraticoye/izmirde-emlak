<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "izmirde_emlak";

echo "sayfaya giriş yapıldı";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
// Check connection
if (!$conn) {
    die("Connection failed: ");
}
$sql = "INSERT INTO aboneler (Ad_Soyad, eposta, ilce)
    VALUES ('".$_POST["isim"]."','".$_POST["eposta"]."','".$_POST["ilce"]."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
