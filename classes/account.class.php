<?php
require_once("../classes/database.php");

class Account
{
    public $account_id;
    public $email;
    public $password;
    public $firstname;
    public $middlename;
    public $lastname;
    public $gender;
    public $contact;
    public $account_image;
    public $address;
    public $user_role;
    public $verification_status;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function sign_in_account()
    {
        $sql = "SELECT account WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);

            if ($accountData && password_verify($this->password, $accountData['password'])) {
                $this->account_id = $accountData['account_id'];
                $this->user_role = $accountData['user_role'];
                $this->firstname = $accountData['firstname'];
                $this->middlename = $accountData['middlename'];
                $this->lastname = $accountData['lastname'];
                $this->email = $accountData['email'];
                $this->verification_status = $accountData['verification_status'];
                $this->gender = $accountData['gender'];
                $this->contact = $accountData['contact'];
                $this->address = $accountData['address'];
                $this->account_image = $accountData['account_image'];

                return true;
            }
        }
    }

    function add()
    {
        $sql = "INSERT INTO account (email, ) VALUES (:email, );";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
