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
    <!-- navbar start -->
    <nav class="navbar">
      <!-- <img src="img/menu/2.jpg" alt="nav-logo" class="nav-logo" /> -->
      <a href="#" class="navbar-logo">
        <img src="img/header-bg.jpg" alt="logofti">
      </a>

      <div class ="text-logo">
       <h1> FAKULTAS TEKNIK DAN INFORMATIKA</h1> 
        <h2><span>UNIVERSITAS PGRI MAHADEWA INDONESIA</span> </h2>
      </div>
    
      <div class="navbar-nav">
        <a href="#hom">Home</a>
        <a href="berita.php">Berita</a>
        <a href="profile.php">Profile</a>
        <a href="struktur.php">Struktur Organisasi</a>
        <a href="visi.php">Visi Dan Misi</a>
        <a href="kontak.php">Kontak</a> 
      </div>

      <div class="navbar-extra">
        <!-- <a href="loginweb/index.php"><i data-feather="log-out"></i><br>Login Admin</a> -->
        <!-- <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="home">admin<i data-feather="home"></i></a> -->
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->
    <!-- hero section start -->
    <section class="hero" id="hom">
      <main class="content">
        <h1>profile hmps <span>fti</span></h1>
        <p>Selamat datang di halaman WEB Profile HMPS FTI.</p>
        <!-- <a href="#" class="cta">beli sekarang</a> -->
      </main>
    </section>
    <!-- hero section end -->
<!-- section start berita -->

    <section id="berita" class="berita">
        <h1>Halaman Berita </h1>
        <div class="row">
             <div class="berita_kiri">
             <?php foreach($berita as $row): ?>
            
            <img src="img/<?= $row["gambar_berita"]; ?>" 
                width="50">

                <h2><?= $row["judul_berita"]; ?></h2><br>
               <?= $row["isi_berita"]; ?><br>
                <i> <?= $row["tgl_berita"]; ?><br> </i>

                <?php endforeach; ?>
             </div>

            <div class="berita_kanan">
            <?php foreach($berita as $row): ?>

             <img src="img/<?= $row["gambar_berita"]; ?>" 
                width="50">

               <h2><?= $row["judul_berita"]; ?></h2><br>
                <?= $row["isi_berita"]; ?><br>
               <i> <?= $row["tgl_berita"]; ?><br> </i>

            <?php endforeach; ?>
            </div>
      </div>
    </section>


<!-- sectiont end berita -->
    <!-- ABOUT SECTION START -->
    <section id="profile" class="profile">
      <h2><span>Profile </span>HMPS</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/header2.jpeg" alt="tentang kami" />
        </div>
        <div class="content">
          <h3>Apa Itu HMPS</h3>
          <p>
            HMPS merupakan kepanjangan dari Himpunan Mahasiswa Program Studi yang dimana HMPS adalah Organisasi Mahasiswa Yang ada dalam setiap Program Studi di Universitas PGRI Mahadewa Indonesia. HMPS FTI itu sendiri adalah Organisasi Mahasiswa yang berada dibawah naungan Badan Esekutif Mahasiswa Fakultas Teknik dan Informatika Universitas PGRI Mahadewa Indonesia. Berdirinya HMPS FTI ini bertujuan sebagai wadah aspirasi-aspirasi mahasiswa baik dari akademis maupun non akademis, selain itu hmps ini juga sebagai organisasi pengembangan mahasiswa hal ini juga baik dari akademis maupun non akademis. Yang dimaksudkan pengembangan secara akademis adalah seperti pelatihan-pelatihan untuk menunjang pembelajaran di lingkup perkuliahan, mengembangkan pengetahuan mahasiswa melalui seminar, workshop, dan sebagainya. lalu pengembangan non akademis bisa dilihat dari bidan seni ataupun keolahragaan yang dimana hal ini akan mengembangkan minat dan bakat yang dimiliki mahasiswa fti secara maksimal sesuai minat dan bakat yang dimiliki. 
          </p>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION END -->

    <!-- menu section start -->
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

      <!-- <div class="row">
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="espresso" class="menu-card-img" />
          <h3 class="menu-card-title">NAMA</h3>
          <p class="menu-card-price">JABATAN</p>
        </div> <br>
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
      </br>
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
      </div> -->
    </section>
    <!-- menu section end -->

    <!-- misi & misi section start-->
    <section id="visi" class="visi">
      <h2>VISI DAN MISI</h2>
      <div class="row">
        <div class="visi-img">
          <img src="img/menu/2.jpg" alt="visi" />
         <i> <h3>Ketua HMPS Fakultas Teknik Informatika tahun 2023</h3></i>
        </div>
        

        <div class="content">
          
          
      <?php foreach($visi as $row): ?>
        <h1>VISI</h1>
                <?= $row["visi"]; ?><br>
            <?php endforeach; ?>

            <h1>MISI</h1>
            <?php foreach($visi as $row): ?>
            <?= $row["misi"]; ?><br>
        
        <?php endforeach; ?>
        
         
        </div>
      </div>
    </section>
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
    <!-- contat section end -->

    <!-- footer start -->
    <footer>
      <div class="sosial">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <!-- <div class="links">
        <a href="#hom">Home</a>
        <a href="#profile">Profile</a>
        <a href="#tentang">Tentang</a>
        <a href="#struktur">Struktur Organisasi</a>
      </div> -->

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
