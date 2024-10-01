<?php
require_once '../classes/database.php';

$db = new Database();
$connection = $db->connect();

try {
  $query = "SELECT account_id, CONCAT(firstname, ' ', lastname) AS doctor_name FROM account WHERE user_role = 1 AND is_deleted = 0";
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
