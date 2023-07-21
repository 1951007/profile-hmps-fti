<?php 
require '../functions.php';
$berita = query("SELECT * FROM berita_fti ");
$visi = query("SELECT * FROM visi");
$struktur = query("SELECT * FROM struktur_organisasi ");

if (isset($_POST["cari"])  ){
  
  $berita_fti = cari($_POST["keyword"]);

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN berita</title>
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
    <link rel="stylesheet" href="../css/style.css" />
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
    
      

      <div class="navbar-extra">
        <a href="../index.php">log out</a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>


  
  <section id="berita" class="berita">
    <a href="input_berita.php">Tambah Berita Kampus</a>


<form action="" method="post">
  <!-- <input type="text" name="keyword" placeholder="cari..." autocomplete="off">
  <button type="submit" name="cari" plasholder=><i data-feather="search" ></i></button> -->


    <table border="1" cellpadding="10" cellspacing="10">
        <tr>
            <th>ID</th>
            <th>Aksi</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Tanggal Berita</th>
            <th>Gambar Berita</th>
            
        </tr>

<?php $i = 1; ?>
<?php foreach ($berita as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>

            <!-- <a href="ubah.php?id_berita=<?= $row["id_berita"]; ?>" >Ubah</a> | -->
            <a href="hapus.php?id_berita=<?= $row["id_berita"]; ?>" onclick="return confirm('Hapus Berita?');"><i data-feather="trash-2"></i></a>

          </td>
          <td><?= $row["judul_berita"]; ?></td>
          <td><?= $row["isi_berita"]; ?></td>
          <td><?= $row["tgl_berita"]; ?></td>
          <td> <img src="img/<?= $row["gambar_berita"]; ?>" ></td>
        </tr>

        <?php $i++; ?>
        <?php endforeach;?>
    </table>
    </form>  

      
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