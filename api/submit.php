<?php
/**
 * api/submit.php
 * Menyimpan ucapan & konfirmasi kehadiran baru.
 * POST /api/submit.php
 * Body (JSON): { "nama": "...", "kehadiran": "Hadir|Tidak Hadir|Masih Ragu", "jumlah": 1, "pesan": "..." }
 */

header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Metode tidak diizinkan.']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!is_array($input)) {
    $input = $_POST;
}

$nama      = trim($input['nama'] ?? '');
$kehadiran = trim($input['kehadiran'] ?? '');
$jumlah    = (int)($input['jumlah'] ?? 1);
$pesan     = trim($input['pesan'] ?? '');

$errors = [];
if ($nama === '' || mb_strlen($nama) > 100) {
    $errors[] = 'Nama tidak valid.';
}
if (!in_array($kehadiran, ['Hadir', 'Tidak Hadir', 'Masih Ragu'], true)) {
    $errors[] = 'Konfirmasi kehadiran tidak valid.';
}
if ($jumlah < 1 || $jumlah > 20) {
    $jumlah = 1;
}
if ($pesan === '' || mb_strlen($pesan) > 500) {
    $errors[] = 'Pesan ucapan tidak valid.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

try {
    $pdo = getDB();
    $stmt = $pdo->prepare(
        "INSERT INTO ucapan (nama, kehadiran, jumlah, pesan, ip_pengirim)
         VALUES (:nama, :kehadiran, :jumlah, :pesan, :ip)"
    );
    $stmt->execute([
        ':nama'      => $nama,
        ':kehadiran' => $kehadiran,
        ':jumlah'    => $jumlah,
        ':pesan'     => $pesan,
        ':ip'        => $_SERVER['REMOTE_ADDR'] ?? null,
    ]);

    echo json_encode([
        'success' => true,
        'message' => 'Ucapan berhasil dikirim.',
        'id'      => $pdo->lastInsertId(),
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Gagal menyimpan ucapan.']);
}
