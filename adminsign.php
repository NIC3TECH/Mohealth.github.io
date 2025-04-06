<?php
session_start();
$email = $_POST["femail"];
$Password = $_POST["fpassword"];


$conn = new mysqli('localhost', 'root', '', 'mohealth_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT femail, fpassword FROM admin_db WHERE femail = ? AND fpassword = ?");
$stmt->bind_param("ss", $email, $Password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->fetch();
    $_SESSION['admin_email'] = $email;
    echo'Sign in sucessfull please wait';

    ?>
    <script type="text/javascript">
    window.location = "http://localhost/Mohealth/admin.html";
    </script>
    <?php
} else { echo 'wrong email or password'
    ?>
    <script type="text/javascript">

    window.location = "http://localhost/Mohealth/Adminsign.html";
    alert('wrong email or password');
    </script>
    <?php
}
$_SESSION[ 'valid_user']= $email;
session_destroy();
$stmt->close();
$conn->close();
?>