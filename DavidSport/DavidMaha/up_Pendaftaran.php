<?php
include("koneksi.php");
$id=$_POST['txta'];
$No_Hp=$_POST['txtb'];
$B=$_POST['txtc'];
$NG=$_POST['txtd'];
$Status=$_POST['txte'];
$key=$_POST['id'];

$qr="UPDATE Turnamen SET  Nama='$id',
                        No_Hp='$No_Hp',
                        Nama_Game='$NG',
                        Biaya='$B',
                        Status='$Status',
                        Where Nama='$key'";   


$exe=mysqli_query($conn,$qr);

if($exe){
    echo"Berhasil di hapus <a href='view.php'>Kembali</a>";
}else{
    echo"<b>Gagal</b> Update Data";
}
