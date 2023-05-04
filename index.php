<?php

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
        .Muter:hover{
            transition: 1s;
            transform: rotate(360deg);

        }

        form,h1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        }


    </style>
</head>
<body >

<h1  style="color:red">Login</h1>
<form method="post" action="cek.php">
    
    <label id="input_nama" style="margin-right: 10px;">Nama</label>
    <input id="input_nama" name="username"  />
    <br><br>
    <label id="input_password" >Password</label>
    <input id="input_password" name="password"/>
    <br><br>
    <button class="ganti_warna" name="submit" >OK</button>
    <?php
    error_reporting(0);
    $hasil=$_GET['hasil'];
    if($hasil=='false'){
        echo"Password atau username salah";
        $hasil=null;
    }
    ?>

</form>

</body>
</html>



