<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_berita");



function query($query) {

    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


// ambil data dari tiap elem form
function tambah($data) {

    global $conn;

    $judul = htmlspecialchars($data["judul_berita"]);
    $isi = htmlspecialchars( $data["isi_berita"]);
    $tgl =  htmlspecialchars($data["tgl"]);
    $kategori =  htmlspecialchars($data["id_kategori"]);


    // upload gambar
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }

    $sql = "INSERT INTO berita_fti
    VALUES ('', '$judul', '$isi', '$tgl', '$gambar','$kategori')";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
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














function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM berita_fti WHERE id_berita = $id");
    return mysqli_affected_rows($conn);

}




function ubah($data) {
    global $conn;

    $id = $data["id_berita"];

    $judul = htmlspecialchars($data["judul_berita"]);
    $isi = htmlspecialchars( $data["isi_berita"]);
    $tgl =  htmlspecialchars($data["tgl"]);
    $gambarLama = htmlspecialchars($data["gambar_Lama"]); 
    $gambar =  htmlspecialchars($data["gambar_berita"]);
    $kategori =  htmlspecialchars($data["id_kategori"]);

// cek apakah user pilih gambar baru atau tidak
    if($_FILES ['gambar_berita']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

   





    $sql = "UPDATE berita_fti SET
            judul_berita ='$judul',
            isi_berita='$isi' , 
            tgl='$tgl' , 
            gambar_berita='$gambar' ,
            gambar_Lama='$gambar', 
            id_kategori='$kategori' 
            WHERE id_berita = $id;
            ";


    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}





function cari($keyword) {
    $sql = "SELECT * FROM berita_fti 
    WHERE 
    judul_berita LIKE '%$keyword%' ";
    
    return query($query);

}




function registrasi($data) {
    global $conn;
    $username = strtolower (stripslashes( $data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 =  mysqli_real_escape_string($conn, $data["password2"]);
    
    

    //CEK USERNAMSE UDAH ADA ATAU BELLUM
    


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "
        <script>
        alert('konfirmasi password salah');
        </script>";

        return false;

    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    var_dump($password);
    
    //tambahkan data ke tabel user
    mysqli_querry($conn, "INSERT INTO user VALUES ('','$username' , '$password') ");

    return mysqli_affected_rows($conn);

    


}





?>
