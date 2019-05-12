<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>daftar pembelian</title>
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/style_history.css">
  </head>
  <body>
    <?php
      include './script/sql_connection.php';
    ?>

      <div class="navbar">
        <a href="index.php">Home</a>
        <a href="proses_pemesanan.php">Pesan tiket</a>
          <div class="navbar-right">
            <a  class="active" href="daftar_pembelian.php">daftar pembelian</a>
          </div>
      </div>


      <?php
      include './script/sql_connection.php';
      $q = "select * from history_pembelian";
      $sql1= mysqli_query($conn, $q);
      $n = mysqli_num_rows($sql1);

      echo '<div class="container">';
      echo "<table>"; // start a table tag in the HTML

      echo "<tr><th> id </th><th> nama </th><th> email </th><th> tanggal_berangkat </th><th> kota asal </th><th> kota tujuan </th><th> jumlah penumpang </th><th> kelas </th><th> harga pertiket </th><th> total biaya </th></tr>";  //$row['index'] the index here is a field name
      while($row = mysqli_fetch_array($sql1)){   //Creates a loop to loop through results
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nama'] . "</td><td>" . $row['email'] . "</td><td>" . $row['tanggal_berangkat'] . "</td><td>" . $row['kota_asal'] . "</td><td>" . $row['kota_tujuan'] . "</td><td>" . $row['jumlah_penumpang'] . "</td><td>" . $row['kelas'] . "</td><td> Rp. " . $row['harga_tiket'] . "</td><td> Rp. " . $row['total_biaya'] . "</td></tr>";
      }

      echo "</table>";
      echo '</div>';

      mysqli_close($conn);


       ?>

  </body>
</html>
