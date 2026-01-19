<?php
include("koneksi.php")
$qr="DELETE FROM turnamen Where Nama='$_GET[Nama]'";
$exe=mysqli_query($conn,$qr)
if($exe){
    echo"Berhasil di Hapus <a href='view.php'>Kembali</a>";
}else{
    echo"Gagal di Hapus <a href='view.php'>Kembali</a>";


}
?>