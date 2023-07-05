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
    $gambar =  htmlspecialchars($data["gambar_berita"]);
    $kategori =  htmlspecialchars($data["id_kategori"]);


    $sql = "INSERT INTO berita_fti
    VALUES ('', '$judul', '$isi', '$tgl', '$gambar','$kategori')";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
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


    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}






?>
