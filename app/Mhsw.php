<?php

class Mhsw {
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=dbakademik", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die ("Error " . $e->getMessage());
        }
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_mhsw";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }

    public function tampilById($id)
{
    $sql = "SELECT * FROM tb_mhsw WHERE mhsw_id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function tambah($nim, $nama, $alamat)
    {
        $sql = "INSERT INTO tb_mhsw (mhsw_nim, mhsw_nama, mhsw_alamat) VALUES (:nim, :nama, :alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':alamat', $alamat);
        return $stmt->execute();
    }

    public function edit($id, $nim, $nama, $alamat)
    {
        $sql = "UPDATE tb_mhsw SET mhsw_nim = :nim, mhsw_nama = :nama, mhsw_alamat = :alamat WHERE mhsw_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':alamat', $alamat);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_mhsw WHERE mhsw_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
