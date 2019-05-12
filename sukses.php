<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transaksi sukses</title>
    <link rel="stylesheet" href="./css/sukses.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/responsive.css">
  </head>
  <body>
    <h1>Transaksi sukses</h1>
    <?php
    $nama = $_POST['$nama'];
    $email = $_POST['email'];
    $kotaAsal = $_POST['kotaAsal'];
    $kotaTujuan = $_POST['kotaTujuan'];
    $jumlahPenumpang = $_POST['jumlahPenumpang'];
    $kelas = $_POST['kelas'];

    echo "nama : ".$nama;

    ?>
  </body>
</html>
