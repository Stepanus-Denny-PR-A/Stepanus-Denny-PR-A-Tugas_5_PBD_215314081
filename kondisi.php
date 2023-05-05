<?php
session_start();
require 'Fungsi.php';
$id = $_GET['id'];
$kondisi=$_GET['kondisi'];
$sql="UPDATE data_pengguna
SET Kondisi = $kondisi
WHERE id=$id;";
mysqli_query($connect,$sql);
header("Location: main.php");
?>