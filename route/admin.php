<?php
if (session_status() === PHP_SESSION_NONE) {
   
}

require_once(__DIR__ . '/../config/Database.php');

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'dashboard':
        include(__DIR__ . '/../Page/admin/admin-page/dhasboard.php');
        break;

    case 'genre':
        include(__DIR__ . '/../Page/admin/admin-page/input_genre.php');
        break;
    case 'user':
        include(__DIR__ . '/../Page/admin/admin-page/input_user.php');
        break;

    default:
        echo "<h3 style='padding:20px'>Halaman tidak ditemukan</h3>";
        break;
}
?>
