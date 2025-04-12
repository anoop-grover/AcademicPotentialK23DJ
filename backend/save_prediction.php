<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "academic_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get JSON from frontend
$data = json_decode(file_get_contents("php://input"), true);

$course = $conn->real_escape_string($data['course']);
$gpa = floatval($data['gpa']);
$activities = $conn->real_escape_string($data['activities']);
$hours = intval($data['hours']);
$recommendation = $conn->real_escape_string($data['recommendation']);

// Simulate ANN prediction
$score = rand(60, 98); // We'll replace with actual model later

// Insert into DB
$sql = "INSERT INTO predictions (course, gpa, activities, hours, recommendation, score)
        VALUES ('$course', $gpa, '$activities', $hours, '$recommendation', $score)";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "score" => $score]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}

$conn->close();
?>
