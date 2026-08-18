<?php
    $conn = mysqli_connect("localhost", "root", "", database: "db_antricafe");

    if(!$conn){
        echo "Gagal koneksi";
    }
?>