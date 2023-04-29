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
        <center> MENU HAPUS DATA KEPEGAWAIAN </center>
    </h1>
    <p>Daftar Data Pegawai : </p>
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
        <th>Hapus Data</th>
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
                echo "<td align = 'center'><a href='hapusact.php?id=".$row['idpg']."'>Hapus</a></td>"; 
                echo "</tr>";
                $no++;
            }
            ?>
    </table>
    <p>Total Pegawai : <?php echo mysqli_num_rows($pegawai)?></p>
    <a href="home_pgw.php"><button class="buttonadd" type="">HALAMAN UTAMA</button></a>
</body>

</html>