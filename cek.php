<?php
require 'Fungsi.php';
session_start();
$user=query("select * from user");
$masuk=false;
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    foreach($user as $cocok){
    if($username == $cocok['Nama'] && $password == $cocok['Password']) {
        $masuk=true;
        $_SESSION["status"] = "true";
        $id = satu_data("SELECT ID FROM user where Nama='$username' && Password='$password'");
        $_SESSION["ID"]=$id["ID"];
        header("location: main.php");
    } }
    if($masuk==false){
    header("Location:index.php?hasil=false");
}
}
?>