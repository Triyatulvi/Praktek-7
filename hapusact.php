<?php
include("koneksi_pgw.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    //query hapus
    $sql = "DELETE FROM datapegawai WHERE idpg = '$id'";
    $pegawai = mysqli_query($conn,$sql);


    //cek query
    if( $pegawai ){
        echo "<script>alert('Data Karyawan Berhasil Dihapus!'); window.location.href='hapuspgw.php'</script>";
    } else {
        echo "<script>alert('Data Karyawan Gagal Dihapus!!'); window.location.href='hapuspgw.php'</script>";
        die("gagal menghapus...");
    }
    }else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman home_pgw
    header('Location: hapuspgw.php');
    }
?>