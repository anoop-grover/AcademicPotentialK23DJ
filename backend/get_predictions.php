<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "academic_db");

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

$result = $conn->query("SELECT * FROM predictions ORDER BY timestamp DESC");

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>
