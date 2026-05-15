<?php
class Genre {
    private $conn;
    private $table = "tb_genre";

    public $id;
    public $nama;

    public function __construct($db){
        $this->conn = $db;
    }

    // Mengambil semua data genre
    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Mengambil satu data genre berdasarkan ID (PENTING: Untuk Edit)
    public function readOne() {
        $query = "SELECT id, nama FROM " . $this->table . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        return $stmt;
    }

    // Menambah data genre baru
    public function create() {
        $query = "INSERT INTO " . $this->table . " (nama) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->nama);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // Memperbarui data genre (PENTING: Untuk Edit)
    public function update() {
        $query = "UPDATE " . $this->table . " SET nama = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        // Bind parameter: s = string (nama), i = integer (id)
        $stmt->bind_param("si", $this->nama, $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // Menghapus data genre
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
}