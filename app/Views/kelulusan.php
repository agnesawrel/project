<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelulusan</title>
</head>

<body>
    <form action="./proses" method="get">
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required>
        <br>
        <label for="pesan">Nama : </label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="status">Status Kelulusan :</label>
        <select name="status" id="status" required>
            <option value="MEMUASKAN">Memuaskan</option>
            <option value="DENGAN PUJIAN">Dengan pujian</option>
            <option value="BAIK">Baik</option>
        </select>
        <center>
            <input type="submit" value="Submit">
        </center>
    </form>
</body>

</html>