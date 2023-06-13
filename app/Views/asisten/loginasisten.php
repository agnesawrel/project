<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Login</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= (session()->getFlashdata('error')); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('salah')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= (session()->getFlashdata('salah')); ?>
        </div>
    <?php endif; ?>
    <form class="form-signin" action="<?= base_url(); ?>/asisten/checklogin" method="post">
        <?= csrf_field() ?>
        <center>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <input type="text" name="usr" placeholder="Username" class="form-control" required /><br>
            <input type="password" name="pwd" placeholder="Password" class="form-control" required /><br>
            <button class="btn btn-primary" name="btnsubmit" value="Search" type="submit"><i class="bi bi-search"></i>
                Login</button>
            <p class="mt-5 mb-3 text-muted">&copy; Arel Web</p>
        </center>
    </form>
</body>

</html>