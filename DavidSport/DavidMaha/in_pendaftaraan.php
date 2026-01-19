<?php
include("koneksi.php");

    $id=$_POST['txta'];
    $r=$_POST['txtb'];
    $B=$_POST['txtc'];
    $NG=$_POST['txtd'];
    $Status=$_POST['txte'];
    


 $qr =" INSERT INTO Turnamen ( Nama, No_Hp, Nama_Game, Biaya, Status)        
 VALUES('$id','$r','$B','$NG','$Status')";
               
          
    $exe = mysqli_query($conn, $qr);
    if ($exe) {
        echo "DATA BERHASIL DISIMPAN";
    } else {
        echo "DATA GAGAL DISIMPAN";
    }
