<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'portfolio_db');

// Periksa koneksi
if ($conn->connect_error) {
    die('Database connection failed.');
}

// Validasi ID
$id = $_GET['id'] ?? null;
if (!$id || !filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
    die('Invalid ID.');
}

// Ambil data pesan berdasarkan ID
$result = $conn->query("SELECT * FROM guestbook WHERE id = $id");
if (!$result || $result->num_rows === 0) {
    die('Message not found.');
}
$row = $result->fetch_assoc();

// Jika form di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($message)) {
        die('Name and message cannot be empty.');
    }

    // Bersihkan data input
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    // Update data di database
    $stmt = $conn->prepare("UPDATE guestbook SET name = ?, message = ? WHERE id = ?");
    if (!$stmt) {
        die('Error preparing statement.');
    }

    $stmt->bind_param("ssi", $name, $message, $id);

    if ($stmt->execute()) {
        header('Location: index.php#guestbook');
        exit;
    } else {
        echo 'Error updating message.';
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Message</title>
    <link rel="stylesheet" href="editmessage.css">
</head>
<body>
    <div class="edit-message-container">
        <h2>Edit Message</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($row['message']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php#guestbook" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
