<?php
require 'Fungsi.php';
$Data = query('SELECT * FROM data_pengguna');
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>215314081</title>
   <style>
      body {
         background-color: brown;
         font-family: Arial, sans-serif;
      }
      h1 {
         text-align: center;
         color: black;
         background-color: white;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0,0,0,0.3);
      }
      table {
         border-collapse: collapse;
         width: 80%;
         margin: auto;
         margin-top: 30px;
         margin-bottom: 50px;
      }
      th, td {
         border: 1px solid black;
         padding: 10px;
         text-align: left;
         background-color: white;
      }
      th {
         background-color: white;
      }
      li {
         list-style-type: none;
         margin-bottom: 10px;
         font-size: 18px;
      }
      a {
         background-color: #dc3545;
         color: white;
         padding: 8px 12px;
         border-radius: 5px;
         text-decoration: none;
      }
      a:hover {
         background-color: black;
      }
   </style>
</head>
<body>
   <h1>List Data</h1>
   <div style="text-align: center">
      <a href="Tambah.php">Tambah Data</a>
   </div>
   <table>
      <tr>
         <th>No</th>
         <th>Data</th>
         <th>Aksi</th>
      </tr>
      <?php $no = 1; foreach ($Data as $unto) { ?>
         <tr>
            <td><?= $no++ ?></td>
            <td><?= $unto["DATA"] ?></td>
            <td><a href="Hapus.php?id=<?= $unto["ID"] ?>">Hapus</a></td>
         </tr>
      <?php } ?>
   </table>
</body>
</html>
