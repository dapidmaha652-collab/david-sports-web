<!DOCTYPE html>
<html>
<head>
    <title>Form Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        table, th, td {
            border: 3px solid black;
            padding: 9px;
            text-align: left;
        }
        th {
            background-color: #808080;
        }
    </style>
</head>
<body>
<h2>Form Tambah Data Dosen</h2>

<form method="post" action="tambah_dosen.php">
    <table>
        <tr>
            <td>NIP:</td>
            <td><input type="text" name="nip"></td>
        </tr>
        <tr>
            <td>NIDN/NIDK/NUPN:</td>
            <td><input type="text" name="nidn_nidk_nupn"></td>
        </tr>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="-Pilih-">-Pilih-</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir:</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir:</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Agama:</td>
            <td>
                <select name="AGAMA">
                    <option value="-Pilih-">-Pilih-</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Islam">Islam</option>
                </select>
        </tr>
        <tr>
            <td>Program Studi:</td>
            <td><input type="text" name="program_studi"></td>
        </tr>
        <tr>
            <td>Telepon:</td>
            <td><input type="text" name="telepon"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Kewarganegaraan:</td>
            <td>      
            <select name="Kewarganegaraan">
            <option value="Pilih">-Pilih-</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Palestina">Palestina</option>
                    <option value="Malaysia">Malaysia</option>
    </select>        
        </tr>
        <tr>
            <td>Jenis Dosen:</td>
            <td>      
            <select name="Jenis Dosen">
            <option value="-Pilih-">-Pilih-</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    
    </select>        
        </tr>
        <tr>
            <td>Hubungan Kerja:</td>
            <td>      
            <select name="Hubungan Kerja">
            <option value="-Pilih-">-Pilih-</option>
                    <option value="Permanen">Permanen</option>
                    <option value="Sementara">Sementara</option>
                    
    </select>        
        </tr>
        <tr>
            <td>Status Dosen:</td>
            <td>      
            <select name="Status Dosen">
            <option value="-Pilih-">-Pilih-</option>
                    <option value="Sudah Menikah">Sudah Menikah</option>
                    <option value="Lajang">Lajang</option>
                    
    </select>        

        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Tambahkan"></td>
        </tr>
    </table>
</form>

</body>
</html>