<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "st_manage";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: {$conn->connect_error}"]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the photo file is uploaded
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        // Define upload directory
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['photo']['name']);

        // Check if the file was successfully uploaded
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
            // File uploaded successfully
            $photoPath = $uploadFile;
        } else {
            die(json_encode(["status" => "error", "message" => "Failed to upload the file."]));
        }
    } else {
        $photoPath = null;  // No file uploaded
    }

    // Sanitize and collect form data
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $designation = $_POST['designation'];
    $dept = $_POST['dept'];

    // Prepare and execute SQL query
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, designation, dept, photo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $password, $designation, $dept, $photoPath);
        header("Location: ../index.php");

    $stmt->close();
}
$conn->close();
?>
