<?php
    include 'koneksi_pgw.php';
    if (isset($_POST['simpan'])) {
        $idpg = $_POST['idpegawai'];
        $namapg = $_POST['namapegawai'];
        $jabatan = $_POST['jabatan'];
        $nopg = $_POST['nopegawai'];
        $jkpg = $_POST['jkelamin'];
        $alamatpg = $_POST['alamat'];
        $gaji = $_POST['gaji'];


    // Menyimpan ke database
    $pegawai = mysqli_query($conn, "INSERT INTO datapegawai VALUES ('$idpg', '$namapg', '$jabatan' ,  '$nopg', '$jkpg', '$alamatpg', '$gaji')");
    if ($pegawai) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Karyawan Berhasil Ditambahkan!'); window.location.href='home_pgw.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Karyawan Gagal Ditambahkan!!'); window.location.href='tambahpegawai.php'</script>";
      }
    } else {
      // jika coba akses langsung halaman ini akan diredirect ke halaman index
      header('Location: home_pgw.php');
    }
?>