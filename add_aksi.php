<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sekolah";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $gambar = $_FILES['gambar']['tmp_name'];
    $img_name = $_FILES['gambar']['name'];

    move_uploaded_file($img_tmp, 'gambar/'.$img_name);

    $querySQL = "INSERT INTO kegiatan (isi, tanggal, gambar)
        VALUES('$isi', '$tanggal', '$gambar')";
    $hasil = $conn->query($querySQL);

    header('Location: kegiatan.php');
?>