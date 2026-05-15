<?php
require_once(__DIR__ . '/../config/Database.php');
require_once(__DIR__ . '/../model/models.php');
require_once(__DIR__ . '/../controller/GenreController.php');

$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? 'index';

$genre = new GenreController();

switch ($page){

    case 'dashboard':
        include __DIR__ . '/../Page/admin/loyo.php';
        break;

    case 'genre':
        switch ($action) {
            case 'index':
                $genre->index();
                break;

            case 'create':
                $genre->create();
                break;

            case 'store': // Tambahkan case store agar lebih rapi
                $genre->store();
                break;

            // --- TAMBAHKAN CASE INI ---
            case 'edit':
                $genre->edit(); // Ini yang akan membuat variabel $genre_data ada
                break;

            case 'update':
                $genre->update(); // Ini untuk memproses simpan perubahan
                break;
            // --------------------------
                
            case 'delete':
                $genre->delete();
                break;    

            default:
                echo "Action tidak ditemukan";
        }
        break;

    default:
        echo "Halaman tidak ditemukan";
}