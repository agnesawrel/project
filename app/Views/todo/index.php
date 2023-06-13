<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Database To do List</title>
</head>

<body>

    <div class="container">
        <div class="p-4 text-white rounded" style="background-color: green; ">
            <div class="jumbotron">
                <h1 class="display-4">APLIKASI TO-DO LIST</h1>
            </div>
        </div>
        <form method="post" action="<?= base_url('todolist/addTask') ?>">
            <div class="form-group">
                <label for="kegiatan">Masukkan kegiatan:</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>

        </form>
        <br>
        <h3>Daftar Kegiatan:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kegiatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($todolist as $task) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $task['kegiatan'] ?></td>
                        <td>
                            <a href="<?= base_url('todolist/markAsDone/' . $task['idkegiatan']) ?>" class="btn btn-success">Selesai</a>
                            <a href="<?= base_url('todolist/deleteTask/' . $task['idkegiatan']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>