<?php
session_start();
include 'db.php';

if (!isset($_SESSION['matric_number'])) {
    header("Location: login.html");
    exit();
}

$matric_number = $_SESSION['matric_number'];

echo "<h2>Welcome, $matric_number!</h2>";
echo "<h3>Available Course Materials:</h3>";

$result = $conn->query("SELECT * FROM course_materials");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h4>" . $row['course_name'] . " (" . $row['course_code'] . ")</h4>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<a href='" . $row['material_link'] . "' target='_blank'>Download</a>";
        echo "</div><hr>";
    }
} else {
    echo "No course materials available.";
}
?>
