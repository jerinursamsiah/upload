<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>profile<h2>
        <a href="<?= base_url('profile/tambah_data') ?>"> Tambah Data </a>
    <p>ini adalah file view pada function data </p>
    <p>nama =  <?= $nm ?></p>
    <p>alamat =  <?= $alt ?></p>
    <p>sekolah =  <?= $skl ?></p>
    <p>nohp = <?= $hp ?></p>
</body>
</html>