<?= $this->extend('templateasis/headerasis'); ?>

<?= $this->section('content'); ?>
<div class="p-4 text-white rounded" style="background-color: grey; ">
    <div class="jumbotron">
        <center>
            <h1 class="display-4">Pendaftaran Asisten Praktikum</h1>
        </center>
    </div>
</div>

<table class="table table-striped">
    <tr>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas Praktikum</th>
        <th>IPK</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($asisten as $key) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $key['nim'] ?></td>
            <td><?= $key['nama'] ?></td>
            <td><?= $key['praktikum'] ?></td>
            <td><?= $key['ipk'] ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
</form>
<?= $this->endsection(); ?>