<?php
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$password = $_POST["fpassword"];
$id = $_POST["NIC"];
$age = $_POST["Age"];
$gender = $_POST["gender"];
$hash = password_hash($password, PASSWORD_DEFAULT);  // Use the correct variable

$conn = new mysqli('localhost', 'root', '', 'mohealth_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO sign_up_tb (fname, lname, fpassword, NIC, Age, gender) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("ssssis", $firstname, $lastname, $hash, $id, $age, $gender);

if ($stmt->execute() === TRUE) {
    
    ?>
    <script type="text/javascript">
    window.location = "http://localhost/Mohealth/index.html";
    </script>      
    <?php
} else {
    die("Error: " . $stmt->error);
}

echo "Generated hash: " . $hash;  
$stmt->close();
$conn->close();
?>