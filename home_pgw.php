<?php
// Memanggil Koneksi pada file koneksidb.php
include 'koneksi_pgw.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM DATA PEGAWAI</title>
    <link rel="stylesheet" href="effect.css">
</head>

<body>
    <h1>
        <center>PROGRAM DATA PEGAWAI</center>
    </h1>
    <p>DATA PEGAWAI :</p>
    <!-- Menampiilkan Data -->
    <table border="1" width="100%">
        <th>No.</th>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>No. HP</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Gaji</th>
        <?php
    $pegawai = mysqli_query($conn, "SELECT * from datapegawai");
    $no=1;
    foreach ($pegawai as $row){
        echo "<tr>
            <th>$no</th>
            <th>".$row['idpg']."</th>
            <th>".$row['namapg']."</th>
            <th>".$row['jabatan']."</th>
            <th>".$row['nopg']."</th>
            <th>".$row['jkpg']."</th>
            <th>".$row['alamatpg']."</th>
            <th>".$row['gaji']."</th>
            </tr>";
        $no++;
    }
    ?>
    </table>
    <p>Total Pegawai : <?php echo mysqli_num_rows($pegawai)?></p>
    <center>
        <a href="editpegawai.php">
            <button class="button button">EDIT DATA</button>
        </a>

        <a href="hapuspgw.php">
            <button class="button button">HAPUS DATA</button>
        </a>
    </center>
</body>

</html>