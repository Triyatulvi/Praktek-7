<?php
include("koneksi_pgw.php");


//proses untuk update data
if (isset($_POST['ubah'])) {
    $idpg = $_POST['idpegawai'];
    $namapg = $_POST['namapegawai'];
    $jabatan = $_POST['jabatan'];
    $nopg = $_POST['nopegawai']; 
    $jkpg = $_POST['jkelamin'];
    $alamatpg = $_POST['alamat'];
    $gaji = $_POST['gaji'];


    //query insert
    $sql = "UPDATE datapegawai SET idpg='$idpg', namapg='$namapg', jabatan='$jabatan', nopg='$nopg', jkpg='$jkpg', alamatpg='$alamatpg', gaji='$gaji' WHERE idpg='$idpg'";
    $pegawai = mysqli_query($conn, $sql);


    //cek query
    if( $pegawai ) {
        echo "<script>alert('Data Karyawan Berhasil Di Ubah!'); window.location.href='editpegawai.php'</script>";
    } else {
        echo "<script>alert('Data Karyawan Gagal Di Ubah!!'); window.location.href='editpegawai.php'</script>";
       die("Gagal Menyimpan Data");
    }
} else {
    header('Location: home_pgw.php');
}
?>