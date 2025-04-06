<?php
$name = $_POST["sname"];
$email = $_POST["semail"];
$subject= $_POST["ssubject"];
$message = $_POST["smessage"];

$conn = new mysqli('localhost', 'root', '', 'mohealth_db');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO feedback_db (sname, semail, ssubject, smessage) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute() === TRUE) {
    echo "Thank you for you're feedback.  " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
