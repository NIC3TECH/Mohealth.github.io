<?php
session_start();


if (!isset($_SESSION['NIC'])) {
    echo "Please log in first to see this page.";
    ?>
    <script type="text/javascript">
    window.location = "http://localhost/Mohealth/index.html";
    </script>
    <?php
    exit();
}

$customer_id = $_SESSION['NIC'];

$conn = new mysqli('localhost', 'root', '', 'mohealth_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("SELECT fname, lname, NIC, Age, gender, med_report  FROM sign_up_tb WHERE NIC = ?");
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("s", $customer_id);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $nic, $age, $gender, $med_report);
$stmt->fetch();
$stmt->close();
$conn->close();
?><!DOCTYPE html>
<html>
<header>

   <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mohealth</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Flaticon.css">
    <style> body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}


.profile-container {
    width: 50%;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.profile-container p {
    font-size: 18px;
    margin: 10px 0;
    line-height: 1.6;
}

.profile-container strong {
    color: #005f73;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.nav-links ul li a:hover {
    color: #00a896;
}</style>
</head>

<body style="background-color:#00c3ffc7">
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images1/Mologo.png" alt="Mohealth Logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Feedback.html">Contact Us</a></li>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="Medical selection.html">Book Appointment</a></li>
                    <li><div class="signin-btn"><a href="logout.php">Logout</a></div></li>
                </ul>
            </div>
        </nav>
        <h1>"A hospital may be a place of pain, but it's also a place of hope, healing, and humanity."</h1>
    </section>
    <h1>Patient Profile</h1>
    <div class="profile-container">
        <p><strong>First Name:</strong> <?php echo htmlspecialchars($firstname); ?></p>
        <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lastname); ?></p>
        <p><strong>NIC:</strong> <?php echo htmlspecialchars($nic); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
        <p><strong>Medical report:</strong><?php echo htmlspecialchars($med_report);?></p>
    </div>
</body>
</html>