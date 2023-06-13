<?php
include_once("Koneksi.php");
class Barang extends Database{

    function tampilDataBarang(){
        $tampilDataBarang = "SELECT * FROM barang";
        return $this->db->query($tampilDataBarang)->fetch_all(MYSQLI_ASSOC);
    }

    public function viewById($id){
        $dataBarang = "SELECT * FROM barang WHERE id_barang = '$id'";
        return $this->db->query($dataBarang)->fetch_assoc();
    }

    public function tambahBarang($data_barang)
    {
        $nama_barang = $data_barang["nama_barang"];
        $harga = $data_barang["harga"];
        $photo = $data_barang["photo"];

        $query = "INSERT INTO barang VALUES (NULL, '$nama_barang', '$harga', '$photo')";

        if($this->db->query($query) === TRUE){
            return mysqli_affected_rows($this->db);
        }
    }

    public function hapus_Barang($data_barang)
    {
        $query = "DELETE FROM barang WHERE id_barang='$data_barang'";

        if($this->db->query($query) === TRUE){
            return mysqli_affected_rows($this->db);
        }
    }

    public function edit_Barang($data_barang)
    {
        $id_barang = $data_barang["id_barang"];
        $nama_barang = $data_barang["nama_barang"];
        $harga = $data_barang["harga"];
        $photo = $data_barang["photo"];

        $query = "UPDATE barang SET
            nama_barang = '$nama_barang',
            harga = '$harga',
            photo = '$photo' WHERE id_barang = '$id_barang'";

        if($this->db->query($query) === TRUE){
            return "Berhasil";
        }return "Gagal";
    }
}
?>