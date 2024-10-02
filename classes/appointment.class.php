<?php
require_once("../classes/database.php");

class Appointment
{
    public $appointment_id;
    public $doctor_id;
    public $patient_id;
    public $appointment_date;
    public $appointment_time;
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
        $query->bindParam(':doctor_id', $this->doctor_id);
        $query->bindParam(':patient_id', $this->patient_id);
        $query->bindParam(':appointment_date', $this->appointment_date);
        $query->bindParam(':appointment_time', $this->appointment_time);
        $query->bindParam(':appointment_status', $this->appointment_status);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
