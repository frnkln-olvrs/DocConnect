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

    function add_link()
    {
        $sql = "UPDATE appointment SET appointment_link = :appointment_link WHERE appointment_id = :appointment_id";

        $query = $this->db->connect()->prepare($sql);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
