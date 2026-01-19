<?php
include("koneksi.php");
$qry="SELECT * FROM `turnamen";
$exe=mysqli_query($conn,$qry);
//var_dump($exe);
//exit();
//$exe=mysqli_query($conn,"SELECT & FROM tbl_mhs");
//$r=mysqli_fetch_array($exe);
//var_dump($r);
//exit();
echo"<table border=1>
<h1>Pendaftaraan Turnamen Game</h1>
[<a href='frm_pendaftaraan.php'>Tambah Data</a>]
    <tr>
        <th>No</th><th>Nama</th><th>No_Hp</th><th>Nama Game</th><th>Biaya</th>
        <th>Status</th><th>Aksi</th>
    </tr>";
$no=1;
while($r=mysqli_fetch_array($exe)){
    if($r['Biaya']=='1'){
        $B="RP.100.000";
    }else{
        $B="RP.50.000";
    }
    if($r['Nama_Game']=='1'){
        $NG="Mobile Legend";
    }elseif($r['Nama_Game']=='2'){
        $NG="PUBG";
    }elseif($r['Nama_Game']=='3'){
        $NG="FIFA";
    }elseif($r['Nama_Game']=='4'){
        $NG="Pes Mobile";
    }elseif($r['Nama_Game']=='5'){
        $NG="Free Fire";
    }else {
        $NG="Lainnya";
    }
    if($r['Status']=='1'){
        $Status="Lunas";
    }else{
        $Status="Belum Lunas";
    }
    echo"<tr>
        <td>$no</td><td>$r[Nama]</td><td>$r[No_Hp]</td><td>$NG</td>
        <td>$B</td><td>$Status</td><td><a href='Edit.php?Nama=$r[Nama]'>Edit</a>
        <a href='del_Pendaftaran.php?Nama=$r[Nama]'>Del</a></td>
        </tr>";
        $no++;
} 
echo"
</table>
";
?>