<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<form action="process_login.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Nama:</th>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th>Kegemaran:</th>
            <td><input type="checkbox" name="Hobi"> SepakBola
                <input type="checkbox" name="Hobi"> Berenang
                <input type="checkbox" name="Hobi"> Membaca
                <input type="checkbox" name="Hobi"> Menulis <br>
        </tr>
        <tr>
            <th>Jenis Kelamin:</th>
            <td>
                <input type="radio" name="radio" value="option1"> Wania
                <input type="radio" name="radio" value="option2"> Pria
            </td>
        </tr>
        <tr>
            <th>Number:</th>
            <td><input type="number" name="number"></td>
        </tr>
        <tr>
            <th>Tanggal:</th>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <th>Alamat:</th>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <th>File:</th>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>