<?php 
    $conn = mysqli_connect("localhost","root","","profile");
    if(! $conn) {
        die('Koneksi gagal: ' . mysqli_error());
       }
?>