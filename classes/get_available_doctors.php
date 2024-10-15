<?php
include 'database.php';

header('Content-Type: application/json');

$day = isset($_GET['day']) ? $_GET['day'] : null;

try {
    // Connect to the database
    $db = new Database();
    $connection = $db->connect();
    
    if ($day) {
        $query = "
            SELECT a.lastname AS doctor_last_name, d.start_wt, d.end_wt, d.start_day, d.end_day
            FROM doctor_info d
            JOIN account a ON d.account_id = a.account_id
            WHERE d.start_day <= ? AND d.end_day >= ?
        ";
        $stmt = $connection->prepare($query);
        $stmt->execute([$day, $day]);
    } else {
        $query = "
            SELECT a.last_name AS doctor_last_name, d.start_wt, d.end_wt, d.start_day, d.end_day
            FROM doctor_info d
            JOIN account a ON d.account_id = a.account_id
        ";
        $stmt = $connection->prepare($query);
        $stmt->execute();
    }

    $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the doctors as JSON
    echo json_encode($doctors);
} catch (Exception $e) {
    // Return error response in case of exception
    echo json_encode(["error" => $e->getMessage()]);
}
?>
