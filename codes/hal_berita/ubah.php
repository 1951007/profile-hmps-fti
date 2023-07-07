<?php 
require 'functions.php';

// ambil data dari url

$id = $_GET["id_berita"];





// query data berita berdasarkan id
$berita = query("SELECT * FROM berita_fti WHERE id_berita = $id")[0];





// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    var_dump($_POST);


    // cek ubah data

    if ( ubah($_POST  ) > 0 ) {
        
        
        echo"
    <script>
    alert('berita berhasil diubah:');
    document.location.href = 'index_berita.php';

    </script> ";

} else {
    echo " <script>
    alert ('berita gagal diubah');
    document.location.href = 'index_berita.php';
    
    </script>";
}
	
}

?>





<!DOCTYPE html>
<html>
    <head>
        <title>ubah berita</title>
    </head>

<body>
    <div class="input_berita">
        <h1 class="judul"align="center"> UBAH BERITA  </h1>
        
<table width="90%" border="1" align="center">
<form method="post" action="" enctype="multipart/form-data">

    <input type="hidden" name="id_berita" value="<?= $berita ["id_berita"]; ?>"/>
    <input type="hidden" name="gambar_Lama" value="<?= $berita ["gambar_berita"]; ?>"/>

<tr>
<td>Judul Berita</td>
<td>:</td>
<td><input type="text" name="judul_berita"  id="judul_berita" required value="<?= $berita["judul_berita"] ?>"/></td>
</tr>
<tr height="300px">
<td>Isi Berita</td>
<td>:</td>
<td><input type="text" name="isi_berita" id="isi_berita" style=" height : 300px;" required
                            value="<?= $berita["isi_berita"] ?>"/></td>
</tr>

<tr>
<td>Tanggal Berita</td>
<td>:</td>
<td ><input type="date" name="tgl" id="tgl_berita" value="<?= $berita["tgl_berita"] ?>"/></td>
</tr>
<tr>
<tr>
<tr>
    
<td>Gambar Berita</td>

<td>:</td>

<td>  <img src="img/<?= $berita["gambar_berita"]; ?> "> <input type="file" name="gambar_berita"  id="gambar_berita"  /></td>
</tr>

<tr>
<td>ID_Kategori</td>
<td>:</td>
<td><input type="text" name="id_kategori"  id="id_kategori" required value="<?= $berita["id_kategori"] ?>"/></td>
</tr>

<tr>
<td><a href="index_berita.php">KEMBALI</a></td>
<td></td>
<td><button type="submit" name="submit">Ubah Berita</button></td>
</tr>




</div>

</div>


</div>

</form>
</table>

</body>
</html>