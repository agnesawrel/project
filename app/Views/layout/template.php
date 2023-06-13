<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="mt-4 p-5 bg-dark text-white rounded">
            <center>
                <h1>Aplikasi To-Do List</h1>
            </center>
        </div>
        <?= $this->renderSection('content'); ?>

    </div>
</body>

</html>