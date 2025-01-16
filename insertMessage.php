<?php
$conn = new mysqli('localhost', 'root', '', 'portfolio_db');

// Periksa koneksi database
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Ambil dan validasi input
$name = trim($_POST['name']);
$message = trim($_POST['message']);

if (empty($name) || empty($message)) {
    die('Name and message cannot be empty.');
}

// Bersihkan data input
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Siapkan statement untuk menyimpan data
$stmt = $conn->prepare("INSERT INTO guestbook (name, message) VALUES (?, ?)");
if (!$stmt) {
    die('Error preparing statement: ' . $conn->error);
}

$stmt->bind_param("ss", $name, $message);

if ($stmt->execute()) {
    // Redirect ke halaman utama dengan anchor ke guestbook
    header('Location: index.php#guestbook');
    exit;
} else {
    // Tampilkan pesan error yang lebih informatif
    echo 'Error: Could not save the message. ' . $stmt->error;
}

// Tutup statement dan koneksi
$stmt->close();
$conn->close();
?>
