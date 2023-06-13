<?= $this->extend('templateasis/headerasis'); ?>

<?= $this->section('content'); ?>
<div class="p-4 text-white rounded" style="background-color: grey; ">
    <div class="jumbotron">

        <center>
            <h1 class="display-4">PENDAFTARAN ASISTEN PRAKTIKUM</h1>
        </center>
    </div>
</div>
<form action="/asisten/simpan" method="post">
    <?= csrf_field() ?>
    <div class="p-4 text-black rounded"> <!-- mengatur warna tulisan menjadi hitam dengan paragraf/enter/jarak antar elemen form yaitu p-5 -->
        <div class="mb-3 mt-3"> <!-- kelas untuk mengatur margin antar class satu dengan yang lain -->
            Nim
            <br>
            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
            <!-- memasukkan inputan dengan tipe text supaya user mudah untuk memasukkan datanya -->
        </div>
        <div class="mb-3 mt-3">
            Nama
            <br>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required>
        </div>
        <div class="mb-3 mt-3">
            Praktikum
            <br>
            <input type="text" class="form-control" placeholder="Masukkan Mata Kuliah Praktikum" name="praktikum" required>
        </div>
        <div class="mb-3 mt-3">
            IPK<br>
            <input type="text" class="form-control" placeholder="Masukkan IPK" name="ipk" required>
        </div>
    </div>
    <center>
        <input type="submit" name="" value="Simpan" />
    </center>

</form>
<?= $this->endsection(); ?>