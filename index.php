<?php
require_once "app/Mhsw.php";
$mhsw = new Mhsw();
$rows = $mhsw->tampil();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa</title>
<link rel="stylesheet" href="layout/assets/css/style.css">
</head>
<body>
<?php
if(!empty($_GET['delete'])) {
    $id = $_GET['delete'] ?? '';

$mhsw = new Mhsw();
$result = $mhsw->delete($id);

if($result) {
    echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data.'); window.location.href = 'index.php';</script>";
}
}
?>
<table>
<tr>
<th>NO</th>
<th>NIM</th>
<th>NAMA</th>
<th>ALAMAT</th>
<th>AKSI</th>
</tr>

<?php foreach ($rows as $row) { ?>

<tr>
<td><?php echo $row['mhsw_id']; ?></td>
<td><?php echo $row['mhsw_nim']; ?></td>
<td><?php echo $row['mhsw_nama']; ?></td>
<td><?php echo $row['mhsw_alamat']; ?></td>
<td>
    <a href="edit.php?id=<?php echo $row['mhsw_id']; ?>" class="action-buttons edit-button">Edit</a>
    <a href="?delete=<?php echo $row['mhsw_id']; ?>" class="action-buttons delete-button">Delete</a>
</td>
</tr>

<?php } ?>
</table>

<div class="centered">
    <a href="input.php" class="action-buttons input-button">Tambah Data</a>
</div>

</body>
</html>
