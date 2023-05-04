<?php
require 'Fungsi.php';
$id = $_GET['id'];
$nama=$_GET['name'];
$sql="UPDATE data_pengguna
SET DATA = '$nama'
WHERE id=$id;";
mysqli_query($connect,$sql);
header("Location: main.php");
?>

