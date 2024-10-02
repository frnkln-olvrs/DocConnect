<?php
require_once '../classes/database.php';

$db = new Database();
$connection = $db->connect();

try {
  $query = "SELECT a.account_id, a.account_image, CONCAT(a.firstname, ' ', a.middlename, ' ', a.lastname) AS doctor_name, 
                   d.specialty, d.start_wt, d.end_wt, d.start_day, d.end_day
            FROM account a 
            INNER JOIN doctor_info d ON a.account_id = d.account_id
            WHERE a.user_role = 1";
  
  $stmt = $connection->prepare($query);
  $stmt->execute();
  $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

  header('Content-Type: application/json');
  if ($doctors) {
    echo json_encode($doctors);
  } else {
    echo json_encode([]);
  }
} catch (PDOException $e) {
  error_log($e->getMessage(), 3, '/tmp/php_errors.log');
  echo json_encode(['error' => $e->getMessage()]);
}
?>
