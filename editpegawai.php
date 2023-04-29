<?php
// Memanggil Koneksi pada file koneksi_pgw.php
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
        <center>EDIT DATA PEGAWAI </center>
    </h1>
    <p>DATA PEGAWAI : </p>
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
        <th>Ubah Data</th>
        <?php
            $pegawai = mysqli_query($conn, "SELECT * from datapegawai");
            $no=1;
            foreach ($pegawai as $row) {
                echo "<tr>";
                echo "<th>$no</th>";
                echo "<td align = 'center'>".$row['idpg']."</td>";
                echo "<td align = 'center'>".$row['namapg']."</td>";
                echo "<td align = 'center'>".$row['jabatan']."</td>";
                echo "<td align = 'center'>".$row['nopg']."</td>";
                echo "<td align = 'center'>".$row['jkpg']."</td>";
                echo "<td align = 'center'>".$row['alamatpg']."</td>";
                echo "<td align = 'center'>".$row['gaji']."</td>";
                echo "<td align = 'center'><a href='formubah_pgw.php?id=".$row['idpg']."'>Ubah</a></td>"; 
                echo "</tr>";
                $no++;
            }
            ?>
    </table>
    <p>Total Pegawai : <?php echo mysqli_num_rows($pegawai)?></p>
    <CENTER>
        <a href="home_pgw.php">
            <button class="button button">Halaman Utama</button>
        </a>

        <a href="tambahpegawai.php">
            <button class="button button">Tambah Data</button>
        </a>
    </CENTER>
</body>

</html>