<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Anggota P2s</h1>
    <table>
      <tr>
        <th>Nama</th>
        <th>Usia</th>
      </tr>
   <?php foreach ($anggota as $a) { ?>
      <tr>
        <td><?= $a->nama; ?></td>
        <td><?= $a->usia; ?></td>
        <td>
          <a href="<?php base_url() ?>si/delete/<?= $a->id; ?>">hapus</a>
          <a href="<?php base_url() ?>si/getDataId/<?= $a->id; ?>">edit</a>
        </td>
      </tr>
  <?php } ?>
    </table>
    <h3><a href="<?php base_url() ?>si/create">Tambah Anggota</a></h3>
</body>
</html>
