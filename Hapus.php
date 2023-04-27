<?php
require("Fungsi.php");
$id = $_GET["id"];
mysqli_query($connect,"DELETE FROM data_pengguna WHERE id=$id;");
echo"
<script>
alert('Data dihapus')
document.location.href = 'index.php';
</script>
"
?>