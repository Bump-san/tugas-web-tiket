<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Tugas kuis Web Traveling</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/slideshow.css">

    <!-- <style media="screen">
        .container {
            background-color: #ffffff00;
            border: none;
        }

    </style> -->

</head>

<body>

  <?php
    include './script/sql_connection.php';
  ?>

    <div class="navbar">
      <a class="active" href="index.php">Home</a>
      <a href="proses_pemesanan.php">Pesan tiket</a>
      <a href="about.php">About</a>
        <div class="navbar-right">
          <a href="#search">Search</a>
          <a href="#about">About</a>
        </div>
    </div>

<!-- slideshow mulai -->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./gambar\Banner-Blog-Tiket-Pesawat.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="gambar\banner-post-blog-jp.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="gambar\FLIGHTCC-Oct_Feature-Image_BCA.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>



</div>
<br>

<!-- slideshow selesai -->

    <div class="container">

    </div>

<script src="./script/slideshow.js" charset="utf-8"></script>

</body>

</html>
