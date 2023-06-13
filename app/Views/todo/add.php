<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">APLIKASI TO-DOLIST</h1>
        <form method="post" action="<?= base_url('todo/create') ?>" class="mt-3">
            <div class="form-group">
                <label for="kegiatan">Masukkan kegiatan:</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>