<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'portfolio_db');

// Periksa koneksi database
if ($conn->connect_error) {
    die('Database connection failed.');
}

// Validasi dan sanitasi ID
$id = $_GET['id'] ?? null;
if (!filter_var($id, FILTER_VALIDATE_INT)) {
    die('Invalid ID.');
}

// Siapkan statement untuk menghapus data
$stmt = $conn->prepare("DELETE FROM guestbook WHERE id = ?");
if (!$stmt) {
    die('Error preparing statement.');
}

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Redirect ke halaman utama dengan anchor ke guestbook
    header('Location: index.php#guestbook');
    exit;
} else {
    // Tampilkan pesan error jika terjadi kegagalan
    echo 'Error: Could not delete the message.';
}

// Tutup statement dan koneksi
$stmt->close();
$conn->close();
?>
