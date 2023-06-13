<html>

<body>
    <center>
        <h1>STATUS KELULUSAN MAHASISWA</h1>
        <p> Mahasiswa dengan nama
            <?= $nama; ?>
            NIM
            <?= $nim; ?>
            berhasil menyelesaikan studi S1 dengan predikat
            <?= $status ?>

        </p>
    </center>
    <?= $this->renderSection('content'); ?>
</body>

</html>