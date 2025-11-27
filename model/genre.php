<?php
class Genre {
    private $conn;
    private $table = "tb_genre";

    public $id;
    public $nama;

    public function __construct($db){
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (nama) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->nama);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

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

