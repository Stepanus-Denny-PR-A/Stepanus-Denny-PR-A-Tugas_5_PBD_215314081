<?php
session_start();
require 'Fungsi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        p{
            color:red;
        }
        .ganti_warna:hover{
            color:black;
            background-color: red;
            border: solid  5px black;
            
        }
        .Muter {
        transition: 0.5s;
        transform: rotate(0deg);
        }
        .Muter:hover{
            transition: 0.5s;
            transform: rotate(360deg);

        }

        form,h1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        }


    </style>
</head>
<body style="background-color: antiquewhite;">

<h1  style="color:red" class="Muter">Login</h1>
<form method="post" action="cek.php">
    
    <label id="input_nama" style="margin-right: 10px;">Nama</label>
    <input id="input_nama" name="username"  />
    <br><br>
    <label id="input_password" >Password</label>
    <input id="input_password" name="password"/>
    <br><br>
    <button class="ganti_warna" name="submit" >OK</button>
    <button class="ganti_warna" name="Tuser" style="margin-top:5px" ><a href="Tuser.php">Tambah User</a></button>
    <?php
    error_reporting(0);
    $hasil=$_GET['hasil'];
    if($hasil=='false'){
        echo"Password atau username salah";
    }
    ?>

</form>
    

</body>
</html>



