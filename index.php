<?php 
require 'functions.php';
$berita = query("SELECT * FROM berita");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hmps fti</title>
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
    <!-- section berita start -->
    <?php


    ?>
    <!-- section berita end -->
    <!-- navbar start -->
    <nav class="navbar">
      <!-- <img src="img/menu/2.jpg" alt="nav-logo" class="nav-logo" /> -->
      <a href="#" class="navbar-logo">FAKULTAS TEKNIK<span>INFORMATIKA</span>. </a>

      <div class="navbar-nav">
        <a href="#hom">Home</a>
        <a href="#">Berita</a>
        <a href="#men">Struktur Organisasi</a>
        <a href="#profile">Profile HMPS</a>
        <a href="#mis">Visi & Misi</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="home"><i data-feather="home"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->
    <!-- hero section start -->
    <section class="hero" id="hom">
      <main class="content">
        <h1>profile hmps <span>fti</span></h1>
        <p>
         Selamat datang di halaman WEB Profile HMPS FTI.
        </p>
        <!-- <a href="#" class="cta">beli sekarang</a> -->
      </main>
    </section>
    <!-- hero section end -->

    <!-- ABOUT SECTION START -->
    <section id="profile" class="profile">
      <h2><span>Profile </span>HMPS</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/header-bg.jpg" alt="tentang kami" />
        </div>
        <div class="content">
          <h3>Lorem ipsum dolor sit amet.</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et
            repellendus tenetur aliquam, maiores veritatis iste.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
            corporis repellat eius tempora similique minima, quo dolorum aliquam
            perferendis tenetur?
          </p>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION END -->


     <!-- misi SECTION START -->
    <section id="mis" class="mis">
      <h2><span>VISI</span> MISI</h2>
      <div class="row">
        <div class="row">
          <h3>VISI</h3>
          <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque quisquam, libero aut nam et molestias.</P>
        </div>
      </div>
    </section>

    <!-- misi SECTION END -->

    <!-- menu section start -->
    <section id="men" class="menu">
      <h2><span>Struktur</span> Organisasi</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
        accusamus assumenda quaerat eum quidem explicabo?
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div>
      </div>
    </section>
    <!-- menu section end -->

    <!-- misi & misi section start-->
    <!-- <section id="visi" class="visi">
      <h2>VISI DAN MISI</h2>
      <div class="row">
        <div class="visi-img">
          <img src="img/menu/2.jpg" alt="visi" />
        </div>
        <div class="content">
          <h1>VISI</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
            quaerat aliquid odio, voluptatem necessitatibus in asperiores facere
            nesciunt consequatur aut.
          </p>
          <h1>MISI</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem
            exercitationem, dolore aut nihil cum vitae adipisci temporibus
            asperiores molestiae, ipsam earum voluptatum dignissimos delectus
            praesentium reprehenderit sit. Tempora, perspiciatis. Neque.
          </p>
        </div>
      </div>
    </section> -->
    <!-- misi & misi section end-->

    <!-- contat section start -->

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
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="nomor hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>
    <!-- contat section end -->

    <!-- footer start -->
    <footer>
      <div class="sosial">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#hom">Home</a>
        <a href="#profile">Profile</a>
        <a href="#tentang">Tentang</a>
        <a href="#struktur">Struktur Organisasi</a>
      </div>

      <div class="credit">
        <p>| &copy; 2023.</p>
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