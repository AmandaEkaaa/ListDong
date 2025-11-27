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
                if(isset($_POST['submit'])){
                    $genre->store();
                }
                break;
                
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
