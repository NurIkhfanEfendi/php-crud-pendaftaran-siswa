<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Peserta Didik Baru | SMK Telkom Malang</title>
    <link rel="stylesheet" href="assets/css.css">
</head>
<body>
    <header>
        <section id="box-judul">
                <div class="img-header2">
                        <div class="photo2" style="background-image: 
                        url(assets/img/ts.png);"></div>
                    </div>
                <div class="img-header">
                        <div class="photo" style="background-image: 
                        url(assets/img/ypt.png);"></div>
                    </div>
<div class="teks">
        <h3>Pendaftaran Peserta Didik Baru</h3>
        <h1>SMK Telkom Malang</h1>
</div>
    </section>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php" class="button bg-blue">DAFTAR BARU</a></li>
            <li><a href="list-siswa.php" class="button bg-blue">PENDAFTAR</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>