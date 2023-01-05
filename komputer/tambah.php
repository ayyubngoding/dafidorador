<?php

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil Disimpan');
        document.location.href='komputer.php';    
        </script>";
    }
}
