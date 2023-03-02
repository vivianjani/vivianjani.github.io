<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $tl = $_POST['Tanggal_lahir'];
    $jk = $_POST['Jenis_kelamin'];
    $agama = $_POST['Agama'];
    $sekolah = $_POST['Sekolah_Asal'];

    // buat query
    $sql = "INSERT INTO tb_siswa (Nama, Alamat, Tanggal_lahir, Jenis_Kelamin, Agama, Sekolah_Asal) VALUE ('$nama', '$alamat', '$tl', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
