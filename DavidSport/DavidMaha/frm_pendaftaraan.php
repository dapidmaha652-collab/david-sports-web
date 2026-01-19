<?php
echo "
<h3>Tambah Data Pendaftaraan</h3>
<form action='in_pendaftaraan.php' method='POST'>
<label>Nama</label><br>
<input type='text' name='txta'><br>
<label>Nomor HP</label><br>
<input type='text' name='txtb'><br>
<label>Biaya</label><br>
<input type='radio' name='txtc' values='1'>RP.100.000
<input type='radio' name='txtc' values='0'>RP.50.000<br>
<label>Nama Game</label><br>
<select name='txtd'>
<option value='' selected>Pilih</option>
<option value='1'>Mobile Legend</option>
<option value='2'>PUBG</option>
<option value='3'>FIFA</option>
<option value='4'>Pes Mobile</option>
<option value='5'>FreFire</option>
<option value='99'>Lainnya</option>
</select><br>
<label>Status</label><br>
<select name='txte'>
<option value='' selected>Pilih</option>
<option value='1'>Lunas</option>
<option value='2'>Belum Lunas</option>
</select><br>
<input type='submit' value='Simpan'> |
<input type='reset' value='Batal'> |
</form>

";



?>