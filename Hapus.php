<?php
session_start();
require("Fungsi.php");
$id = $_GET["id"];
mysqli_query($connect,"DELETE FROM data_pengguna WHERE id=$id;");
header("location: main.php" );
?>