<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
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
<body style="background-color: aquamarine;">

<h1  style="color:red" class="Muter">New User</h1>
<form method="post" action="newUser.php">
    
    <label id="input_nama" style="margin-right: 10px;">Nama Pengguna Baru</label>
    <input id="input_nama" name="username"  />
    <br><br>
    <label id="input_password" >Password Pengguna Baru</label>
    <input id="input_password" name="password"/>
    <br><br>
    <button class="ganti_warna" name="submit" >OK</button>
</body>
</html>