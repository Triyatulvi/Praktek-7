<?php
include("koneksi_pgw.php");


//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: editpegawai.php');
}


$id = $_GET['id'];


//ambil data berdasarkan id
$query = mysqli_query($conn, "SELECT * FROM datapegawai WHERE idpg = '$id'");
$pegawai = mysqli_fetch_assoc($query);


//cek datanya
if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
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
    <form class="form" method="post" action="ubahact.php">
        <h1 class="form">
            <CENTER>Ubah Data Pegawai </CENTER>
        </h1>
        <br>
        <label>Masukan ID Pegawai :</label>
        <input class="kotakform" type="text" name readonly="idpegawai" placeholder="0XX"
            value="<?php echo $pegawai ['idpg']  ?>">
        <br>
        <br>
        <label>Nama Pegawai :</label>
        <input class="kotakform" type="text" name="namapegawai" placeholder="Masukan Nama Pegawai"
            value="<?php echo $pegawai['namapg'] ?>">
        <br>
        <br>
        <label>Jabatan :</label>
        <input class="kotakform" type="text" name="jabatan" placeholder="Masukkan Jabatan Pegawai"
            value="<?php echo $pegawai['jabatan'] ?>">
        <br>
        <br>
        <label>No HP :</label>
        <input class="kotakform" type="text" name="nopegawai" placeholder="+62xxxxxxxxxx"
            value="<?php echo $pegawai['nopg'] ?>">
        <br>
        <br>
        <label>Jenis Kelamin :</label>
        <select name="jkelamin" class="kotakform">
            <option><?php echo $pegawai['jkpg']?></option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        <br>
        <br>
        <label>Alamat :</label>
        <input class="kotakform" type="text" name="alamat" placeholder="Masukkan Alamat Pegawai"
            value="<?php echo $pegawai['alamatpg'] ?>">
        <br>
        <br>
        <label>Gaji :</label>
        <input class="kotakform" type="text" name="gaji" placeholder="Masukkan Gaji Pegawai"
            value="<?php echo $pegawai['gaji'] ?>">
        <br>
        <br>
        <button class="button" type="buttonsim" name="ubah">UBAH DATA</button>
        <br>
        <br>
    </form>
</body>

</html>