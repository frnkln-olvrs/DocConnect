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
    public $birthdate;
    public $contact;
    public $account_image;
    public $address;
    public $user_role;
    public $verification_status;
    public $campus_id;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function sign_in_account()
    {
        $sql = "SELECT * FROM account WHERE email = :email LIMIT 1;";
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
                $this->account_image = $accountData['account_image'];

                return true;
            }
        }
    }

    // admin functions begin

    function add_admin()
    {
        $sql = "INSERT INTO account (email, password, firstname, middlename, lastname, user_role) VALUES (:email, :password, :firstname, :middlename, :lastname, :user_role);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':user_role', $this->user_role);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function is_email_exist()
    {
        $sql = "SELECT * FROM account WHERE email = :email;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        if ($query->execute()) {
            if ($query->rowCount() > 0) {
                return true;
            }
        }
        return false;
    }

    function check_for_admin($user_role)
    {
        $sql = "SELECT * FROM account WHERE user_role = :user_role;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':user_role', $user_role);
        if ($query->execute()) {
            if ($query->rowCount() > 0) {
                return true;
            }
        }
        return false;
    }


    // admin functions end

    function verify()
    {
        $sql = "UPDATE account SET verification_status = :verification_status WHERE account_id = :account_id";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':verification_status', $this->verification_status);
        $query->bindParam(':account_id', $this->account_id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // doctor functions start
    // fix laterr
    function add_doc()
    {
        $sql = "INSERT INTO account (email, password, firstname, middlename, lastname, user_role, contact, birthdate, gender) VALUES (:email, :password, :firstname, :middlename, :lastname, :user_role, :contact, :birthdate, :gender);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':user_role', $this->user_role);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':birthdate', $this->birthdate);
        $query->bindParam(':gender', $this->gender);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }


    function show_doc()
    {
        $sql = "SELECT * FROM account  WHERE user_role = 1 AND is_deleted != 1 ORDER BY account_id ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    // doctor functions end

    // moderator functions start

    function add_mod()
    {
        $sql = "INSERT INTO account (email, password, firstname, middlename, lastname, user_role, contact, campus_id) VALUES (:email, :password, :firstname, :middlename, :lastname, :user_role, :contact, :campus_id);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':user_role', $this->user_role);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':campus_id', $this->campus_id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function show_mod()
    {
        $sql = "SELECT a.*, c.campus_id, c.campus_name FROM account a INNER JOIN campus c ON a.campus_id = c.campus_id WHERE user_role = 2 AND a.is_deleted != 1 ORDER BY account_id ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    // moderator functions end


    function add_user()
    {
        $sql = "INSERT INTO account (email, password, firstname, middlename, lastname, user_role, contact, campus_id) VALUES (:email, :password, :firstname, :middlename, :lastname, :user_role, :contact, :campus_id);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':user_role', $this->user_role);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':campus_id', $this->campus_id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function show_user()
    {
        $sql = "SELECT a.*, c.campus_id, c.campus_name FROM account a INNER JOIN campus c ON a.campus_id = c.campus_id WHERE user_role = 2 AND a.is_deleted != 1 ORDER BY account_id ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
}
