<?php
    $cuk = new mysqli("localhost","root","","tokobuku");

    if($cuk -> connect_error) {
        die("Connection Failed".$cuk->connect_error);
    }

?>