<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $tl = $_POST['Tanggal_lahir'];
    $jk = $_POST['Jenis_kelamin'];
    $agama = $_POST['Agama'];
    $sekolah = $_POST['Sekolah_Asal'];

    // buat query update
    $sql = "UPDATE tb_siswa SET Nama='$nama', Alamat='$alamat', Tanggal_lahir='tl', Jenis_kelamin='$jk', Agama='$agama', Sekolah_Asal='$sekolah' WHERE ID=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>