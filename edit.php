<?php
require_once "app/Mhsw.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $mhsw = new Mhsw();
    $result = $mhsw->edit($id, $nim, $nama, $alamat);

    if($result) {
        echo "<script>alert('Data berhasil diubah.')</script>";
    } else {
        echo "<script>alert('Gagal mengubah data.')</script>";
    }
}

$id = $_GET['id'] ?? '';
$mhsw = new Mhsw();
$data = $mhsw->tampilById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="layout/assets/css/style.css">
</head>
<body>
<table>
        <tr><th colspan="2"><h1>Edit Data Mahasiswa</h1></th></tr>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $data['mhsw_id']; ?>">
        <tr><td>NIM :</td></tr>
        <tr><td><input type="text" name="nim" value="<?php echo $data['mhsw_nim']; ?>"></td></tr>
        <tr><td>Nama:</td></tr> 
        <tr><td><input type="text" name="nama" value="<?php echo $data['mhsw_nama']; ?>"></td></tr>
        <tr><td>Alamat :</td></tr>
        <tr><td><input type="text" name="alamat" value="<?php echo $data['mhsw_alamat']; ?>"></td></tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="Simpan" class="action-buttons edit-button"><a href="index.php" class="action-buttons delete-button">Kembali</a></td></tr>
    </form>
</body>
</html>
