<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'admin.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
}
