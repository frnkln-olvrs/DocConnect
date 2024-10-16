<?php
require_once("../classes/database.php");

class Message
{
    public $message_id;
    public $sender_id;
    public $receiver_id;
    public $message;
    public $status;
    public $is_read;
    public $is_created;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function fetch_messages($account_id, $with_account_id)
    {
        $sql = "SELECT * FROM messages
          WHERE (sender_id = :account_id AND receiver_id = :with_account_id)
          OR (sender_id = :with_account_id AND receiver_id = :account_id)
          ORDER BY is_created";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':account_id', $account_id);
        $query->bindParam(':with_account_id', $with_account_id);

        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_chats()
    {
        $sql = "SELECT DISTINCT a.account_id, a.firstname, a.lastname, a.account_image,
            (SELECT COUNT(*) FROM messages m
             WHERE m.receiver_id = :account_id 
             AND m.sender_id = a.account_id 
             AND m.is_read = 0) AS unread_count
             FROM account a
             LEFT JOIN messages m ON (a.account_id = m.sender_id OR a.account_id = m.receiver_id)
             WHERE (a.user_role = :opposite_role)
             AND a.account_id != :account_id";

        // If a search term is provided, add it to the query
        if (!empty($search)) {
            $sql .= " AND (a.firstname LIKE :search OR a.lastname LIKE :search)";
        }

        $query = $this->db->connect()->prepare($sql);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
