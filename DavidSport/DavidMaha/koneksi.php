<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="pendaftaran";

$conn= new mysqli($servername,$username,$password,$dbname);
//test konesksi
if($conn->connect_error){
die("koneksi gagal :".$conn->connect_error);
}else{
    //echo "Sukses";
}

?>