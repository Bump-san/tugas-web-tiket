<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Tugas kuis Web Traveling</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/slideshow.css">
    <link rel="stylesheet" href="./css/index.css">

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
        <div class="navbar-right">
          <a href="daftar_pembelian.php">daftar pembelian</a>
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

      <div class="row tengah">

      <div class="col-50">
        <h3>Honest Price</h3>
        <h4>No transaction fee. No hidden charges</h4>
      </div>

      <div class="col-50">
        <img src="./gambar/traveloka/1.webp" style="width:200px">
      </div>

      </div>

      <div class="row tengah">
        <div class="col-50">
          <img src="./gambar/traveloka/2.webp" style="width:200px">
        </div>
      <div class="col-50">
        <h3>Various Payment Options</h3>
        <h4>Be more flexible with various payment methods from ATM Transfer, Credit Card, to Internet Banking.</h4>
      </div>
      </div>

      <div class="row tengah">
      <div class="col-50">
        <h3>Special Discounts</h3>
        <h4>Special discounted hotels for flight customers, newsletter subscribers and Traveloka members.</h4>
      </div>
      <div class="col-50">
        <img src="./gambar/traveloka/3.webp" style="width:200px">
      </div>
      </div>

      <div class="row tengah">
      <div class="col-50">
        <img src="./gambar/traveloka/4.webp" style="width:200px">
      </div>
      <div class="col-50">
        <h3>Best Price Guarantee</h3>
          <h4>Competitive price from extensive network budget hotels to 5 star hotels such as Ibis, Amaris, Santika Hotel with best price guarantee.</h4>
          </div>
      </div>

      <div class="row tengah">
      <div class="col-50">
        <h3>Real Guest Reviews</h3>
        <h4>2,000,000+ verified reviews from real hotel guests will help you make the right decision.</h4>
      </div>

      <div class="col-50">
        <img src="./gambar/traveloka/5.webp" style="width:200px">
      </div>

      </div>

      <div class="row tengah">
        <div class="col-50">
          <img src="./gambar/traveloka/6.webp" style="width:200px">
        </div>

      <div class="col-50">
        <h3>StayGuarantee</h3>
        <h4>You're guaranteed a hotel stay, period. In the event of overbooked rooms or problems with your booking, we'll recommend a similar hotel for you at no additional costs. Or your money back.</h4>
      </div>


      </div>

      <div class="row tengah">

      <div class="col-50">
        <img src="./gambar/demitugas.jpg" style="width:200px">
      </div>

      <div class="col-50">
        <!-- <p>Sebenernya karena ada tugas aja sih</p> -->
        <blockquote><p class="quotation">
          DEMI TU...
          GAASSSS!!</p>
          <footer> — JUKI</footer>
        </blockquote>
      </div>

    </div>

    </div>

<script src="./script/slideshow.js" charset="utf-8"></script>

</body>

</html>
