<?php
require 'functions.php';

$id = $_GET["id_berita"];

if ( hapus($id) > 0 ) {
    echo" <script>
    
    document.location.href = 'index_berita.php';

    </script> ";

} else {
    echo " <script>
    alert ('berita gagal dihapus');
    document.locationhref = 'index_berita.php';
    
    </script>";
}

?>
