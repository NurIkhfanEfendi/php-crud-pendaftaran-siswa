<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Peserta Didik Baru | SMK Telkom Malang</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Peserta Didik Baru</h3>
        <link rel="stylesheet" href="assets/css2.css">
    </header>
    <form action="proses-pendaftaran.php" method="POST">        
    <section id="input-form">
    <div class="form">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </div>
    <div class="form">
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" placeholder="alamat lengkap" />
        </div>
    <div class="form">
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </div>
    <div class="form">
            <label for="agama">Agama : </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </div>
    <div class="form">
            <label for="sekolah_asal">Sekolah Asal : </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </div>
    <div class="form">
            <input type="submit" value="Daftar" name="daftar" class="bg-blue"/>
        </div>        
    </form>
    </body>
</html>