<?= $this->extend('templateasis/headerasis'); ?>

<?= $this->section('content'); ?>
<div class="p-4 text-white rounded" style="background-color: grey; ">
    <div class="jumbotron">
        <center>
            <h1 class="display-4">DELETE DATA ASISTEN</h1>
        </center>
    </div>
</div>
<form action="/asisten/delete" method="post">
    <?= csrf_field() ?>
    <div class="p-4 text-black rounded"> <!-- mengatur warna tulisan menjadi hitam dengan 
            paragraf/enter/jarak antar elemen form yaitu p-5 -->
        <div class="mb-3 mt-3"> <!-- kelas untuk mengatur margin antar class satu dengan yang lain -->
            Nim
            <br>
            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
            <!-- memasukkan inputan dengan tipe text supaya user mudah untuk memasukkan datanya -->
        </div>
    </div>
    <center><input type="submit" name="" value="Delete" />
    </center>
</form>
<?= $this->endsection(); ?>