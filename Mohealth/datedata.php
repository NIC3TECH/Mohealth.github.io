<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $appointment_Date = $_POST['appointmentDate'];
    $hospital=$_POST['hospitalD'];
    $customer_id = $_POST['NIC'];
    $time =$_POST['time'];
    $specialist= $_POST['specialist_doc'];


    
 $conn = new mysqli('localhost', 'root', '', 'mohealth_db');


 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }


 $ticket_number = strtoupper(substr(md5(time()), 0, 8)); 

$sql = "INSERT INTO appointments (ticket_number, customer_id, appointment_date, hospital, atime, specialist_doc ) 
        VALUES ('$ticket_number', '$customer_id', '$appointment_Date', '$hospital' , '$time', '$specialist')";
}
if (mysqli_query($conn, $sql)) {
   
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Appointment Confirmation</title>
        <link rel='stylesheet' href='Style.css'>
         <style>
                body {
                    background-color: #3addf3cb;
                    font-family: 'Roboto', sans-serif;
                    text-align: center;
                    padding: 50px;
                }
                .confirmation {
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    display: inline-block;
                    padding: 30px;
                    max-width: 400px;
                    margin: 0 auto;
                }
                h1 {
                    color: #4CAF50;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
                p {
                    color: #333;
                    font-size: 16px;
                    margin-bottom: 10px;
                }
                .hero-btn {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: background-color 0.3s ease;
                }
                .hero-btn:hover {
                    background-color: #45a049;
                }
            </style>
    </head>
    <body style='background-color:#3addf3cb'>
        <section class='confirmation'>
            <h1>Appointment Confirmed!</h1>
            <p>Appointment date:$appointment_Date</P>
            <p>Time of Appointment:$time</P>
            <p>Hospital chosen:$hospital</P>
            <p>Doctor:$specialist</p>
            
            <p>Your appointment has been booked successfully.</p>
            <p>Your ticket number is: <strong>$ticket_number</strong></p>
            <a href='home.html' class='hero-btn'>Return to Home</a>
        </section>
    </body>
    </html>";
} else {
    
    echo "<p>There was an error booking your appointment. Please try again later.</p>";
}
 $conn->close();
?>