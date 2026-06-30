<?php
/**
 * api/list.php
 * Mengambil semua ucapan, urut dari yang terbaru.
 * GET /api/list.php
 */

header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/../config.php';

try {
    $pdo = getDB();
    $stmt = $pdo->query(
        "SELECT id, nama, kehadiran, jumlah, pesan, dibuat_pada
         FROM ucapan
         ORDER BY dibuat_pada DESC
         LIMIT 500"
    );
    $rows = $stmt->fetchAll();

    echo json_encode([
        'success' => true,
        'total'   => count($rows),
        'data'    => $rows,
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Gagal mengambil data.']);
}
