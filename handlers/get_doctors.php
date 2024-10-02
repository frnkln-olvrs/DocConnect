<?php
require_once '../classes/database.php';

$db = new Database();
$connection = $db->connect();

try {
  $query = "SELECT a.*, d.*, CONCAT(a.firstname, ' ', a.middlename, ' ', a.lastname) AS doctor_name FROM account a INNER JOIN doctor_info d ON a.account_id = d.account_id WHERE a.user_role = 1 AND d.is_deleted = 0";
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
  echo json_encode(['error' => $e->getMessage()]);
}
?>
