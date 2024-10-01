<?php
require_once '../classes/database.php';

$db = new Database();
$connection = $db->connect();

try {
  $query = "SELECT id, name FROM users WHERE role = 3";
  $stmt = $connection->prepare($query);
  $stmt->execute();
  $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

  header('Content-Type: application/json');
  echo json_encode($doctors);
} catch (PDOException $e) {
  echo json_encode(['error' => $e->getMessage()]);
}
?>
