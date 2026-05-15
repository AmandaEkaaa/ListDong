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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->genre->nama = $_POST['nama'];
            if ($this->genre->create()) {
                echo "<script>alert('Genre berhasil ditambahkan! ✨'); window.location.href = '?page=genre&action=index';</script>";
            } else {
                echo "<script>alert('Gagal menambah genre 😢'); window.location.href = '?page=genre&action=index';</script>";
            }
            exit;
        }
    }

   public function edit() {
    if (isset($_GET['id'])) {
        $this->genre->id = $_GET['id'];
        
        // Ambil statement dari model
        $stmt = $this->genre->readOne(); 
        
        // WAJIB: Ambil result agar bisa di-fetch
        $result = $stmt->get_result(); 
        
        // Simpan ke variabel yang dipanggil di View
        $genre_data = $result->fetch_assoc(); 

        if ($genre_data) {
            include __DIR__ . '/../Page/admin/admin-page/edit_genre.php';
        } else {
            echo "<script>alert('Data tidak ditemukan!'); window.location.href = '?page=genre';</script>";
        }
    }
}
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->genre->id = $_POST['id'];
            $this->genre->nama = $_POST['nama'];

            if ($this->genre->update()) {
                echo "<script>alert('Genre berhasil diupdate! 📝'); window.location.href = '?page=genre&action=index';</script>";
            } else {
                echo "<script>alert('Gagal update genre 😢'); window.location.href = '?page=genre&action=index';</script>";
            }
            exit;
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->genre->id = $_GET['id'];
            if ($this->genre->delete()) {
                echo "<script>alert('Genre berhasil dihapus! 🗑️'); window.location.href = '?page=genre&action=index';</script>";
            } else {
                echo "<script>alert('Gagal menghapus genre 😢'); window.location.href = '?page=genre&action=index';</script>";
            }
            exit;
        }
    }
}