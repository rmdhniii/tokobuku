<?php
    include '../crud/config.php';

    $sql = "INSERT INTO distributor(nama_distributor,alamat,telepon) VALUES ('".$_POST['nama_distributor']."','".$_POST['alamat']."','".$_POST['telepon']."')";
    $connection->query($sql);  
?>