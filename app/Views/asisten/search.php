<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Searching Asisten</title>
</head>

<body>
    <div class="container">
        <div class="p-4 text-white rounded" style="background-color: grey; ">
            <div class="jumbotron">
                <center>
                    <h1 class="display-4">PENCARIAN DATA ASISTEN</h1>
                </center>
            </div>
        </div>
        <form action="/asisten/search" method="post">
            <?= csrf_field() ?>
            <div class="p-4 text-black rounded"> <!-- mengatur warna tulisan menjadi hitam dengan paragraf/enter/jarak antar elemen form yaitu p-5 -->
                <div class="mb-3 mt-3"> <!-- kelas untuk mengatur margin antar class satu dengan yang lain -->
                    Search:
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="KEY" required>
                    <!-- memasukkan inputan dengan tipe text supaya user mudah untuk memasukkan datanya -->
                </div>
            </div>
            <center>
                <input type="submit" name="submit" value="search" />
            </center>
        </form>

        <?php
        if (!empty($hasil)) {
            echo "<h1>Hasil Pencarian</h1>";
            echo "Nama:" . $hasil['nama'];
            echo "<br>Praktikum:" . $hasil['praktikum'];
            echo "<br>IPK:" . $hasil['ipk'];
        }
        ?>
</body>

</html>