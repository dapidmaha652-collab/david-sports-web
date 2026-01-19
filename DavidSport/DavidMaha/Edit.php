<?php
include("koneksi.php");
$id=$_GET['Nama'];
$exe=mysqli_query($conn,"SELECT * FROM turnamen WHERE Nama='$id'");
$conn=mysqli_fetch_array($exe);

 
echo "
<h3>Tambah Data Pendaftaran</h3>
<form action='up_Pendaftaran.php' method='POST'>
<label>Nama</label><br>
<input type='text' name='txta' value='$conn[Nama]'><br>
<label>Nomor HP</label><br>
<input type='text' name='txtb' value='$conn[No_Hp]'><br>
<label>Biaya</label><br>
<input type='radio' name='txte' value='$conn[Biaya]'>RP.100.000
<input type='radio' name='txte' value='$conn[Biaya]'>RP.50.000<br>
<label>Nama Game</label><br>
<select name='txtc'>
<option value='' selected>Pilih</option>
<option value='1'>Mobile Legend</option>
<option value='2'>PUBG</option>
<option value='3'>FIFA</option>
<option value='4'>Pes Mobile</option>
<option value='5'>Free Fire</option>
</select><br>
<label>Status</label><br>
<select name='txte'>
<option value='' selected>Pilih</option>
<option value='1'>Lunas</option>
<option value='2'>Belum Lunas</option>
</select><br>
<input type='submit' value='Save'> |
<input type='reset' value='Batal'> |
</form>

";

?>