<?php 
$connect=mysqli_connect("localhost","root","","phpdasar");
function query ($data){
    global $connect;
    $kumpulan_data=[];
    $data=mysqli_query($connect,$data);
    while ($datanya=mysqli_fetch_assoc($data)){
    $kumpulan_data[]=$datanya;
    };
    return $kumpulan_data;
};
 ?>