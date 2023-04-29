<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname ="my_db";

//Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);

//Check connection
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
$sql = "CREATE Table Buku_Tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI TEXT)";
    
if (mysqli_query($conn, $sql))
    {echo "Tabel Buku Tamu Berhasil Dibuat";
    }else{
        echo "Tidak Berhasil Membuat Tabel" .mysqli_error($conn);
    }
        
    
mysqli_close($conn);
?>