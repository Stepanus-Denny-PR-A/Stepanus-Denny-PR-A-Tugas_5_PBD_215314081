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
      div {
         border: 10px solid black;
         padding: 10px;
         background-color: lightblue;
         text-align: center;
      }
   </style>
</head>
<body>
   <h1>List Data</h1>
   <div  >
      <form  method="post" action="Tambah.php">
         <label for="name">Data yang ingin ditambahkan: </label>
         <input type="text" name="data" required>
         <button type="submit" name="submit"  >Tambah</button>
      </form>
   </div>
   <table>
      <tr>
         <th>No</th>
         <th>Data</th>
         <th>Tool</th>
      </tr>
      <?php $no = 1; foreach ($Data as $Kumpulan_Data) { ?>
         <tr>
            <td><?= $no++ ?></td>
            <td><?= $Kumpulan_Data["DATA"] ?></td>
            <td><a href="Hapus.php?id=<?= $Kumpulan_Data["ID"] ?>">Hapus</a>||<a class="edit-link" data-id="<?= $Kumpulan_Data["ID"] ?>">Edit</a></td>
         </tr>
      <?php } ?>
      <script>
         let editLinks = document.querySelectorAll(".edit-link");
         editLinks.forEach(link => {
            link.addEventListener("click", function() {
               let person = prompt("Please enter your name:", "Harry Potter");
               let id = this.dataset.id;
               window.location.href = `Edit.php?name=${person}&id=${id}`;
            });
         });
         // Atau
         // let editLinks = document.querySelectorAll(".edit-link");
         // editLinks.forEach(function(link) {
         //    link.addEventListener("click", function() {
         //       let person = prompt("Please enter your name:", "Harry Potter");
         //       let id = this.dataset.id;
         //       window.location.href = 'Edit.php?name=' + person + '&id=' + id;
         //    });
         // });

      </script>
   </table>
</body>
</html>
