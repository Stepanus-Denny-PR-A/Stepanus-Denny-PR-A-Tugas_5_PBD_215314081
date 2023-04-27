<?php
require("Fungsi.php");
if(isset($_POST['submit'])) {
    $data=$_POST['data'];
    $sql = "INSERT INTO data_pengguna (ID,DATA) VALUES ('', '$data')";
    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah data</title>
    <style>
        body {
            background-color: antiquewhite;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type=text] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            width: 300px;
        }

        button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #3e8e41;
        }

        a {
            margin-top: 20px;
            text-align: center;
            color: #555;
            
        }

        a:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="post" action="">
        <label for="name">Data yang ingin ditambahkan: </label>
        <input type="text" name="data" required>
        <button type="submit" name="submit">Tambah</button>
        
    </form>
    <center><button> <a href="index.php">Kembali</a> </button></center>
</body>
</html>
