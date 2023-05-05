<?php
session_start();
require 'Fungsi.php';
if(isset($_POST['submit'])) {
    $nama=$_POST['username'];
    $password=$_POST['password'];
    $sql = "INSERT INTO user (ID,Nama,Password) VALUES ('', '$nama','$password')";
    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
}?>