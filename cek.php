<?php
require 'Fungsi.php';
$user=query("select * from user");
$masuk=false;
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    foreach($user as $cocok){
    if($username == $cocok['Nama'] && $password == $cocok['Password']) {
        header("location: main.php");
        $masuk=true;
    } }
    if($masuk==false){
    header("Location:index.php?hasil=false");
}
}
?>