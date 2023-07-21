<?php 
// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "db_berita");
// $DB_HOST = 'host.docker.internal';
$DB_HOST = getenv('DB_HOST');
$DB_PORT = getenv('DB_PORT');
$DB_NAME = getenv('DB_NAME');
$DB_USER = getenv('DB_USER');
$DB_PASS = getenv('DB_PASSWORD');

try {
    $dbConn = new PDO("mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $fileName = basename($e->getFile(), ".php");
    $lineNumber = $e->getLine();
    die("[$fileName][$lineNumber] Database error: " . $e->getMessage() . '<br />');
}

function query($query) {
    global $dbConn;
    $result = $dbConn->query($query);
    return $result;
}

function tambah($data) {

    global $dbConn;

    $judul = htmlspecialchars($data["judul_berita"]);
    $isi = htmlspecialchars( $data["isi_berita"]);
    $tgl =  htmlspecialchars($data["tgl"]);
    $kategori =  htmlspecialchars($data["id_kategori"]);


    // upload gambar
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }

    $sql = "INSERT INTO berita_fti (judul_berita, isi_berita, tgl_berita, gambar_berita, id_kategori)
            VALUES ('$judul', '$isi', '$tgl', '$gambar','$kategori')
            ";
    $rowCount = $dbConn->exec($sql);
    return $rowCount;
}


function hapus($id) {
    global $dbConn;
    $result = $dbConn->exec("DELETE FROM berita_fti WHERE id_berita = $id");
    return $result->rowCount();
}

// function hapus($id) {
//     global $dbConn;
//     $rowCount = $dbConn->exec("DELETE FROM berita_fti WHERE id_berita = $id");
//     return $rowCount;
// }

function ubah($data) {
    global $dbConn;

    $id = $data["id_berita"];

    $judul = htmlspecialchars($data["judul_berita"]);
    $isi = htmlspecialchars( $data["isi_berita"]);
    $tgl =  htmlspecialchars($data["tgl"]);
    $gambar =  htmlspecialchars($data["gambar_berita"]);
    $kategori =  htmlspecialchars($data["id_kategori"]);

    $sql = "UPDATE berita_fti SET
            judul_berita ='$judul',
            isi_berita='$isi' , 
            tgl='$tgl' , 
            gambar_berita='$gambar' , 
            id_kategori='$kategori' 
            WHERE id_berita = $id;
            ";
    $result = $dbConn->exec($sql);
    return $result->rowCount();
}

function upload(){
    
    $namaFile = $_FILES['gambar_berita']['name'];
    $ukuranfile = $_FILES['gambar_berita']['size'];
    $error = $_FILES['gambar_berita']['error'];
    $tmpName = $_FILES['gambar_berita']['tmp_name'];

    // cek apakah tidak ada ganbar yang diupload
    if( $error === 4 ) {
        echo "<script>
        alert('anda belum memasukan gambar');
        </script>";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg' , 'jpeg' , 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower (end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {

        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";

        return false;

    }


    // cek jika gambar terlalu besar
    if ($ukuranfile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
        </script>";

        return false;

    }


    // gambar siap diupload
    // generate nama gambar baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);
    return $namaFileBaru;
}






?>
