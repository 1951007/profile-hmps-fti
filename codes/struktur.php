<?php 
require 'functions.php';
$berita = query("SELECT * FROM berita_fti");
$visi = query("SELECT * FROM visi");
$struktur = query("SELECT * FROM struktur_organisasi");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>berita</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>

  <nav class="navbar">
      <a href="#" class="navbar-logo">
        <img src="img/header-bg.jpg" alt="logofti">
      </a>

      <div class ="text-logo">
       <h1> FAKULTAS TEKNIK DAN INFORMATIKA</h1> 
        <h2><span>UNIVERSITAS PGRI MAHADEWA INDONESIA</span> </h2>
      </div>
    
      

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="berita.php">Berita</a>
        <a href="profile.php">Profile</a>
        <a href="struktur.php">Struktur Organisasi</a>
        
        <a href="visi.php">Visi Dan Misi</a>
        <a href="kontak.php">Kontak</a>
        
        
      </div>

      <div class="navbar-extra">
        <!-- <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="home"><i data-feather="home"></i></a> -->
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>


  
    <section id="men" class="menu">
      <h2><span>Struktur</span> Organisasi</h2>
      <p>
        Struktur Organisasi HMPS FTI TAHUN 2023
      </p>
      <div class="row">
        <div class="struktur">
        <?php foreach($struktur as $row): ?>
            
            <img src="img/<?= $row["gambar_struktur"]; ?>" >

                <?php endforeach; ?>

        </div>
      </div>
   
    </section>


    <footer>
      <div class="sosial">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="credit">
        <p>| &copy; HMPS FTI UPMI 2023.</p>
      </div>
    </footer>
    <!-- footer end -->

    
    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- my javascript -->
    <script src="js/script.js"></script>
  </body>
  </html>