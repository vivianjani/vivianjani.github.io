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
       <center><h2>Formulir Pendaftaran Santri Baru</h2></center>
       <center><h2>Pondok Pesantren DAAR EL QOLAM</h2></center>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="Nama">Nama Lengkap: </label>
            <input type="text" name="Nama" placeholder="nama" />
        </p>
        <p>
            <label for="Alamat">Alamat: </label>
            <textarea name="Alamat"></textarea>
        </p>
        <p>
            <label for="Tanggal_lahir">Tanggal Lahir: </label>
            <><input type="date" name="Tanggal_lahir" placeholder="Tanggal_lahir">
        <p>
            <label for="Jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="Jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="Jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="Agama">Agama: </label>
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