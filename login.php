<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matric_number = $_POST['matric_number'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM students WHERE matric_number = ? AND password = ?");
    $stmt->bind_param("ss", $matric_number, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['matric_number'] = $matric_number;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login details.";
    }
}
?>
