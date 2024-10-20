
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

session_start();

require_once('../classes/message.class.php');
$message = new Message();

if (!isset($_SESSION['account_id']) || !isset($_SESSION['user_role'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

$account_id = $_SESSION['account_id'];
$user_role = $_SESSION['user_role'];
$search = $_GET['search'] ?? '';

$opposite_role = ($user_role == 3) ? 1 : 3;

try {
  // $query = "SELECT DISTINCT a.account_id, a.firstname, a.lastname, a.account_image,
  //           (SELECT COUNT(*) FROM messages m
  //            WHERE m.receiver_id = :account_id 
  //            AND m.sender_id = a.account_id 
  //            AND m.is_read = 0) AS unread_count
  //            FROM account a
  //            LEFT JOIN messages m ON (a.account_id = m.sender_id OR a.account_id = m.receiver_id)
  //            WHERE (a.user_role = :opposite_role)
  //            AND a.account_id != :account_id";

  // // If a search term is provided, add it to the query
  // if (!empty($search)) {
  //   $query .= " AND (a.firstname LIKE :search OR a.lastname LIKE :search)";
  // }

  // $stmt = $pdo->prepare($query);
  // $stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT);
  // $stmt->bindValue(':opposite_role', $opposite_role, PDO::PARAM_INT);

  // if (!empty($search)) {
  //   $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
  // }

  // $stmt->execute();
  //$chatList = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $chatList = $message->get_chats($account_id, $opposite_role, $search);
  
  echo json_encode($chatList);
} catch (Exception $e) {
  error_log($e->getMessage());
  echo json_encode(['error' => 'Failed to retrieve chats']);
}
?>
