<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Asisten</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ASISTEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/asisten" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Asisten
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="/asisten">Tabel Asisten</a>
                            <a class="dropdown-item" href="/asisten/simpan">Simpan data asisten</a>
                            <a class="dropdown-item" href="/asisten/delete">Hapus data asisten</a>
                            <a class="dropdown-item" href="/asisten/update">Perbarui data asisten</a>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="logout">
                    <button class="btn btn-outline-success" type="submit">
                        <a href="/asisten/logout">
                            <!-- <input type="submit" name="" value="Logout" /> -->
                            <!-- <a href="/asisten/logout">logout</a> -->
                            Log out
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <?= $this->renderSection('content'); ?>
        <div>




</body>

</html>