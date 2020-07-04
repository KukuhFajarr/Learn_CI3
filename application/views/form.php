<h3>Tambah Anggota</h3>
<form action="<?= base_url('si/addData') ?>" method="POST">
    <label for="">Nama : </label>
    <input type="text" name="nama"><br><br>
    <label for="">Usia : </label>
    <input type="number" name="usia"><br><br>
    <button type="submit">Tambah</button>
</form>