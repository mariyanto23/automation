<?php
require_once "app/Mhsw.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="layout/assets/css/style.css">
</head>
<body>
    <table>
        <tr><th colspan="2"><h1>Tambah Data Mahasiswa</h1></th><br>
    <?php
        if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $mhsw = new Mhsw();
    $result = $mhsw->tambah($nim, $nama, $alamat);

    if($result) {
        echo "<script>alert('Data berhasil ditambahkan.')</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data.')</script>";
    }
}
?>
</tr>
    <form action="" method="post">
        <tr><td>NIM :</td></tr>
        <tr><td><input type="text" name="nim"></td></tr>
        <tr><td>Nama :</td></tr>
        <tr><td><input type="text" name="nama"></td></tr>
        <tr><td>Alamat :</td></tr>
        <tr><td><input type="text" name="alamat"></td></tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="Simpan" class="action-buttons edit-button"><a href="index.php" class="action-buttons delete-button">Kembali</a></td></tr>
    </form>
    </table>
</body>
</html>
