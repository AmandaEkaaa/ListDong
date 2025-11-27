<?php
class GenreController {
    private $db;
    private $genre;

    public function __construct(){
        $database = new Database();
        $this->db = $database->getConnection();
        $this->genre = new Genre($this->db);
    }

    public function index() {
        $stmt = $this->genre->read();
        $result = $stmt->get_result();
        $genres = $result->fetch_all(MYSQLI_ASSOC);

        include __DIR__ . '/../Page/admin/admin-page/view_genre.php';
    }
public function create() {
    include __DIR__ . '/../Page/admin/admin-page/input_genre.php';
}


    public function store() {
        $this->genre->nama = $_POST['nama'];
        $this->genre->create();
    
        exit;
    }

    
   public function delete() {
    $this->genre->id = $_GET['id'];
    $this->genre->delete();
    
    echo "<script>window.location.href = '?page=genre&action=index';</script>";
    exit;
}

    
}







