<?php
require_once("../classes/database.php");

class Message
{
    public $message_id;
    public $account_id;
    public $appointment_date;
    public $appointment_time;
    public $appointment_link;
    public $appointment_status;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add_appointment()
    {
        $sql = "INSERT INTO appointment (doctor_id, patient_id, appointment_date, appointment_time, appointment_status) VALUES (:doctor_id, :patient_id, :appointment_date, :appointment_time, :appointment_status);";

        $query = $this->db->connect()->prepare($sql);
       

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
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
