<?php
require 'Fungsi.php';
if(isset($_POST['submit'])) {
    $data=$_POST['data'];
    $sql = "INSERT INTO data_pengguna (ID,DATA,Kondisi) VALUES ('', '$data','0')";
    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    header("Location: main.php");
}?>