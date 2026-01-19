<!DOCTYPE html>
<html lang="en">

<head>
    <title>-Form Dosen-</title>
    <style>
        table {
            border-spacing: 0;
            width: 100%;
            height: 100vh;
        }

        table,
        th,
        td {
            border: none;
        }

        td {
            width: 50%;
        }

        th {
            text-align: left;
            width: 50%;
        }

        .th-header {
            text-align: right;
        }

        .span1 {
            font-size: large;
            font-weight: bold;
            color: green;
        }

        .submit {
            color: white;
            background-color: green;
        }

        .form-header {
            background-color: rgb(208, 240, 192);
        }

        label {
            font-weight: bold;
        }

        input {
            border-width: 2px;
            border-color: rgb(208, 240, 192);
            width: 95%;
        }

        select {
            border-width: 2px;
            border-color: rgb(208, 240, 192);
            width: 95%;
        }
    </style>
</head>

<body>
    <form action="aksi.php" method="post">
        <table border="1">
            <tr class="form-header">
                <td>
                    <span class="span1">Dosen</span> - Tambah
                </td>
                <th class="th-header">
                    <button class="submit" type="submit">simpan</button>
                    <button class="reset" type="reset">batal</button>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="nip">NIP</label><br />
                    <input type="text" id="nip" name="NIP">
                </td>
                <th>
                    <label for="program_studi">Program Studi *</label><br />
                    <select id="program_studi" name="PROGRAM_STUDI" required>
                        <option value="">Pilih...</option>
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                        <option value="MANAJEMEN INFORMATIKA">MANAJEMEN INFORMATIKA</option>
                        <option value="KEWIRAUSAHAAN">KEWIRAUSAHAAN</option>
                        <option value="AKUNTANSI">AKUNTANSI</option>
                        <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                    </select>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="nidn" class="required">NIDN/IDUK/NUPN *</label><br />
                    <input type="text" id="nidn" name="NIDN/NIDK/NUPN" required>
                </td>
                </td>
                <th>
                    <label for="telepon" class="required">Telepon*</label><br />
                    <input type="text" id="telepon" name="TELEPON" required>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="nama" class="required">Nama*</label><br />
                    <input type="text" id="nama" name="NAMA" required>
                </td>
                </td>
                <th>
                    <label for="email" class="required">Email*</label><br />
                    <input type="email" id="email" name="EMAIL" required>

                </th>
            </tr>
            <tr>
                <td>
                    <label for="jenis_kelamin" class="required">Jenis Kelamin*</label><br />
                    <select id="jenis_kelamin" name="JENIS_KELAMIN" required>
                        <option value="">Pilih...</option>
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </td>
                </td>
                <th>
                    <label for="kewarganegaraan" class="required">Kewarganegaraan*</label><br />
                    <select id="kewarganegaraan" name="KEWARGANEGARAAN" required>
                        <option value="">Pilih...</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>

                </th>
            </tr>
            <tr>
                <td>
                    <label for="tempat_lahir" class="required">Tempat Lahir*</label><br />
                    <input type="text" id="tempat_lahir" name="TEMPAT_LAHIR" required>
                </td>
                <th>
                    <label for="jenis_dosen" class="required">Jenis Dosen*</label><br />
                    <select id="jenis_dosen" name="JENIS_DOSEN" required>
                        <option value="">Pilih...</option>
                        <option value="DOSEN TIDAK TETAP">DOSEN TIDAK TETAP</option>
                        <option value="DOSEN TETAP">DOSEN TETAP</option>
                        <option value="DOSEN PEGAWAI NEGERI SIPIL">DOSEN PEGAWAI NEGERI SIPIL</option>
                    </select>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="tanggal_lahir" class="required">Tanggal Lahir*</label><br />
                    <input type="date" id="tanggal_lahir" name="TANGGAL_LAHIR" required>

                </td>
                <th>
                    <label for="hubungan_kerja" class="required">Hubungan Kerja*</label><br />
                    <select id="hubungan_kerja" name="HUBUNGAN_KERJA" required>
                        <option value="">Pilih...</option>
                        <option value="DOSEN HONORER">DOSEN HONORER</option>
                        <option value="DOSEN KONTRAK">DOSEN KONTRAK</option>
                    </select>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="agama" class="required">Agama*</label></br />
                    <select id="agama" name="AGAMA" required>
                        <option value="">Pilih...</option>
                        <option value="ISLAM">Islam</option>
                        <option value="KRISTEN">Kristen</option>
                        <option value="KATOLIK">Katolik</option>
                        <option value="HINDU">Hindu</option>
                        <option value="BUDHA">Budha</option>
                    </select>
                </td>
                <th>
                    <label for="status_dosen" class="required">Status Dosen*</label><br />
                    <select id="status_dosen" name="STATUS_DOSEN" required>
                        <option value="">Pilih...</option>
                        <option value="PEGAWAI NEGERI SIPIL">PNS</option>
                        <option value="BUKAN PNS">BUKAN PNS</option>
                        <option value="HONORER">HONORER</option>
                    </select>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>