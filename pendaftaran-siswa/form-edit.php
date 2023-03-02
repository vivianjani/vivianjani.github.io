<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Santri Baru | Pondok Pesantren DAAR EL QOLAM</title>
</head>

<body>
    <style>
        body{
            font-family: Georgia;
        }
    </style>
    <header>
       <center><h2>Formulir Pendaftaran Siswa Baru</h2></center>
       <center><h2>PROSES EDIT</h2></center>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="Nama">Nama Lengkap: </label>
            <input type="text" name="Nama" placeholder="nama" value="<?php echo $siswa['Nama']?>" />
        </p>
        <p>
            <label for="Alamat">Alamat: </label>
            <textarea name="Alamat" value="<?php echo $siswa['Alamat']?>"></textarea>
        </p>
        <p>
            <label for="Tanggal_lahir">Tanggal Lahir: </label>
            <p><input type="date" name="Tanggal_lahir" placeholder="Tanggal_lahir" value="<?php echo $siswa['Tanggal_lahir']?>" />

    </p>
        <p>
            <label for="Jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="Jenis_kelamin" value="laki-laki" <?php echo ($jk = "laki-laki") ? "checked" : "" ?>> Laki-laki </label>
            <label><input type="radio" name="Jenis_kelamin" value="perempuan" <?php echo ($jk = "pereempuan") ? "checked" : "" ?>> Perempuan </label>
        </p>
        <p>
            <label for="Agama">Agama: </label>
            <?php $Agama = $siswa['Agama']; ?>
            <select name="Agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="Sekolah_Asal">Sekolah Asal: </label>
            <input type="text" name="Sekolah_Asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>

