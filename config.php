<?php
/**
 * config.php
 * Konfigurasi koneksi database MySQL.
 *
 * Default di bawah ini sudah disesuaikan untuk XAMPP di localhost:
 * - Host: localhost
 * - User: root
 * - Password: (kosong, default XAMPP)
 *
 * Kalau kamu mengubah password root MySQL di XAMPP, atau nanti pindah
 * ke hosting asli, tinggal ganti nilai di bawah ini saja.
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'undangan_khitan');
define('DB_USER', 'root');
define('DB_PASS', '');              // default XAMPP: kosong

function getDB() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        } catch (PDOException $e) {
            http_response_code(500);
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false,
                'message' => 'Koneksi database gagal. Pastikan Apache & MySQL sudah jalan di XAMPP Control Panel, dan database "undangan_khitan" sudah dibuat lewat phpMyAdmin.',
            ]);
            exit;
        }
    }
    return $pdo;
}
