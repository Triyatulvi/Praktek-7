<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

//create connection
$conn = mysqli_connect ($servername, $username, $password,$dbname);

//check connection 
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}

//create table
$sql = "CREATE Table datapegawai (
    idpg VARCHAR (10) PRIMARY KEY,
    namapg varchar(50) NOT NULL,
    jabatan varchar(50) NOT NULL,
    nopg char(20) NOT NULL,
    jkpg varchar(10) NOT NULL,
    alamatpg varchar(50) NOT NULL,
    gaji varchar(50) NOT NULL
    )";
    
if (mysqli_query($conn, $sql)){
echo "New record created succesfully";
}else{
echo "Error creating record: " .mysqli_error($conn);
}
mysqli_close($conn);
?>