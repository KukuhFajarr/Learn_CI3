<?php foreach ($anggota as $key) {  ?>
    <h3>Edit Anggota</h3>
    <form action="<?= base_url('si/updateData') ?>" method="POST">
        <input type="hidden" value="<?= $key['id'] ?>" name="id">
        <label for="">Nama: </label>
        <input type="text" name="nama" value="<?= $key['nama'] ?>"><br><br>
        <label for="">Usia: </label>
        <input type="number" name="usia" value="<?= $key['usia'] ?>"><br><br>
        <button type="submit">Edit</button>
    </form>

<?php } ?>