<?php
include 'login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $designation = $_POST['designation'];
    $dept = $_POST['dept'];
    $photo = $_POST['photo'];
    $password = $_POST['password'];

    $sql = "INSERT INTO your_table_name (name, email, phone, designation, dept, photo, password) VALUES ('$name', '$email', '$phone', '$designation', '$dept', '$photo', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

