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


  
    <section id="contact" class="contact">
      <h2><span>kontak</span> kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
        accusamus assumenda quaerat eum quidem explicabo?
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.6602940486546!2d115.22538047427125!3d-8.628573887705322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f803721aa61%3A0x7603154f87d45268!2sUniversitas%20PGRI%20Mahadewa%20Indonesia!5e0!3m2!1sid!2sid!4v1685368967449!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <!-- <input type="text" placeholder="nama" /> -->
            <a href="#" id="menu">xwidiantara@gmail</a>
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="nomor hp" />
          </div>
          <a href="#" id="menu"><i data-feather="menu"></i></a>
          <button class="btn" a href><i data-feather="globe"></i></button>
        </form>
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