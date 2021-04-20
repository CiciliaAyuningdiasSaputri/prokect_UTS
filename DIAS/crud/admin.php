<?php 
include 'conek.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias Blog</title>

    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- swiper slider css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css" integrity="sha512-m3pAvNriL711NMlhkZHK6K4Tu2/RjtrzyjxZU8mlAbxxoDoURy27KajN1LGTLeEEPvaN12mKAgSCrYEwF9y0jA==" crossorigin="anonymous" />

    <!-- custom style.css file -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <!-- Header -->
       <header id="header" class="shadow bg-light">
           <nav class="container navbar">
               <a href="/index.html" class="nav-brand text-dark">
                    Dias 
                </a>

                <!-- toggle button -->
                <button class="toggle-button">
                    <span><i class="fas fa-bars"></i></span>
                </button>

                <!-- collapse on toggle button click -->
                <div class="collapse">
                    <ul class="navbar-nav">
                        <a href="tampilan.html" class="nav-link">Halaman Utama</a>
                        <a href="#" class="nav-link">Halaman Admin</a>
                        <a href="tampilan.html" class="nav-link">Tentang Saya</a>
                        <a href="tampilan.html" class="nav-link">Kontak</a>
                    </ul>
                </div>

                  <!-- collapse on toggle button click -->
                  <div class="collapse">
                      <ul class="navbar-nav">
                            <div class="search-box">
                                <a href="#" class="nav-link"><i class="fas fa-search"></i></a>
                            </div>
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-dribbble"></i></a>
                      </ul>
                  </div>
           </nav>
       </header>
    <!-- .Header -->

    <!-- Main Site -->
       <main id="site-main">

            <!-- Blog Post Section -->
                <section id="posts">
                    <div class="container">
                        <div class="grid">
                        <h1>CRUD Make up</h1>
  
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="text" name="nama_produk" placeholder="Nama Produk">
    <input type="number" name="harga" placeholder="Harga">
    <input type="number" name="qty" placeholder="Qty">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>

  <!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>Nama Produk</th>
      <th>Harga</th>
      <th>Qty</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    include 'conek.php';
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM produk");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_produk'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><?= $dt['qty'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
      <td><a href="hapus.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
                   </div>
               </div>

               <!-- copyrights  -->
               <div class="copyrights">
                   <p class="text-center text-secondary display-2">
                        © 2021 <a href="#" class="text-primary">ciciliaayuning13</a> - Personal Blog Theme. All rights reserved.
                   </p>
               </div>
           </div>
       </footer>
    <!-- .footer -->


    <!-- masonry libray for horizontal grid -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>

    <!-- swiper slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js" integrity="sha512-1LlEYE0qExJ/GUfAJ0k2K2fB5sIvMv/q6ueo3syohvQ3ElWDQVSMUOf39cxaDWHtNu7M6lF6ZC1H6A1m3SvheA==" crossorigin="anonymous"></script>

    <!-- custom javascript main.js file -->
    <script src="main.js"></script>
</body>
</html>