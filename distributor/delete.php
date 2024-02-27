<?php
    include 'koneksi.php';
    $sql = 'DELETE from distributor nama_distributor = '.$_GET['nama'];
    $koneksi->query($sql);
    header ('location:index.php');
?>