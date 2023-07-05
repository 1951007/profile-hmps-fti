<?php 
require 'functions.php';


// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){


    // cek tambah data

    if (tambah($_POST)> 0) {
        echo"
    <script>
    alert('berita berhasil ditambah:');
    document.location.href = 'index_berita.php';

    </script> ";

} else {
    echo " <script>
    alert ('berita gagal ditambah');
    document.locationhref = 'index_berita.php';
    
    </script>";
}

	
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title>halaman berita</title>
    </head>

<body>
    <div class="input_berita">
        <h1 class="judul"align="center"> MASUKAN BERITA TERBARU </h1>
        
<table width="90%" border="1" align="center">
<form method="post" action="" enctype="multipart/form-data">


<tr>
<td>Judul Berita</td>
<td>:</td>
<td><input type="text" name="judul_berita"  required/></td>
</tr>
<tr height="300px">
<td>Isi Berita</td>
<td>:</td>
<td><input type="text" name="isi_berita" style=" height : 300px;" required/></td>
</tr>

<tr>
<td>Tanggal Berita</td>
<td>:</td>
<td ><input type="date" name="tgl"></td>
</tr>
<tr>
<tr>
<tr>
<td>Gambar Berita</td>
<td>:</td>
<td><input type="file" name="gambar_berita"  required /></td>
</tr>

<tr>
<td>ID_Kategori</td>
<td>:</td>
<td><input type="text" name="id_kategori"  required/></td>
</tr>

<tr>
<td><a href="index_berita.php">KEMBALI</a></td>
<td></td>
<td><button type="submit" name="submit">Tambah Berita</button></td>
</tr>




</div>

</div>


</div>

</form>
</table>

</body>
</html>