<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tugas_baru";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<?php
require_once 'database/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO messages (name, email, phone, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$name, $email, $phone, $message]);

        if($result) {
            header("Location: index.php?status=success#kontak");
        } else {
            header("Location: index.php?status=error#kontak");
        }
    } catch(PDOException $e) {
        header("Location: index.php?status=error&message=" . urlencode($e->getMessage()) . "#kontak");
    }
    exit;
}
?>