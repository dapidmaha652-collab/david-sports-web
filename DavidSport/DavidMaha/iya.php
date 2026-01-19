<?php
include("koneksi.php");
$qry="SELECT * FROM mhs";
$exe=mysqli_query($conn,$qry);
//var_dump($exe);
//exit();
//$exe=mysqli_query($conn,"SELECT & FROM tbl_mhs");
//$r=mysqli_fetch_array($exe);
//var_dump($r);
//exit();
echo"<table border=1>
<h1>Data Mahasiswa</h1>77
[<a href='frm_mhs.php'>Tambah Data</a>]
    <tr>
        <th>No</th><th>NIM</th><th>Nama</th><th>JK</th>
        <th>Agama</th><th>Email</th><th>Status</th><th>Aksi</th>
    </tr>";
$no=1;
while($r=mysqli_fetch_array($exe)){
    if($r['jk_mhs']=='1'){
        $jk="Laki-laki";
    }else{
        $jk="Perempuan";
    }
    if($r['agama_mhs']=='1'){
        $agama="Islam";
    }elseif($r['agama_mhs']=='2'){
        $agama="Kristen";
    }elseif($r['agama_mhs']=='3'){
        $agama="Hindu";
    }elseif($r['agama_mhs']=='4'){
        $agama="Buddha";
    }elseif($r['agama_mhs']=='5'){
        $agama="Konghucu";
    }else {
        $agama="Atheis";
    }
    if($r['status_mhs']=='1'){
        $status="Aktif";
    }else{
        $status="Tidak Aktif";
    }
    echo"<tr>
        <td>$no</td><td>$r[nim_mhs]</td><td>$r[nama_mhs]</td><td>$jk</td>
        <td>$agama</td><td>$r[email_mhs]</td><td>$status</td><td><a href='edit_mhs.php?nim=$r[nim_mhs]'>Edit</a>|Del</td>
        </tr>";
        $no++;
}
echo"
</table>
";
?>