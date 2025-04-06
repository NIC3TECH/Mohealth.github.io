<?php
session_start();

$customer_id = $_POST["NIC"];
$password = $_POST["fpassword"];

$conn = new mysqli('localhost', 'root', '', 'mohealth_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT fpassword FROM sign_up_tb WHERE NIC = ?");
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("s",  $customer_id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashedPass);
    $stmt->fetch();

 
    if (password_verify($password, $hashedPass)) {
        $_SESSION['NIC'] = $customer_id;
        echo 'Sign in successful, please wait';
        ?>
        <script type="text/javascript">
        window.location = "http://localhost/Mohealth/home.html";
        </script>
        <?php
    } else {
        echo 'Wrong NIC or password';
        ?>
        <script type="text/javascript">
        alert('Wrong NIC or password');
        window.location = "http://localhost/Mohealth/index.html";
        </script>
        <?php
    }
} else {
    echo 'Wrong ID number or password';
    ?>
    <script type="text/javascript">
    alert('Wrong ID number or password');
    window.location = "http://localhost/Mohealth/index.html";
    </script>
    <?php
}

$stmt->close();
$conn->close();
?>