
<?php
header('Content-Type: application/json');

// Database connection
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "mohealth_db";

$DBconnect = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if (!$DBconnect) {
    die(json_encode(array("error" => "Connection failed: " . mysqli_connect_error())));
}

$sql_table = "SELECT customer_id, appointment_date, hospital, ticket_number, atime, specialist_doc FROM appointments ORDER BY specialist_doc DESC ";
$result_table = mysqli_query($DBconnect, $sql_table);

if ($result_table) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result_table)) {
        $data[] = array(
            "customer_id" => $row["customer_id"],
            "appointment_date" => $row["appointment_date"],
            "hospital" => $row["hospital"],
            "ticket_number" => $row["ticket_number"],
            "atime" => $row["atime"],
            "specialist_doc" => $row["specialist_doc"]
        );
    }
    mysqli_free_result($result_table);
    echo json_encode(array("data" => $data));
} else {
    echo json_encode(array("error" => "Error: " . mysqli_error($DBconnect)));
}


mysqli_close($DBconnect);
?>