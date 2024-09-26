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
    public $bio;
    public $specialty;
    public $start_wt;
    public $end_wt;
    public $appointment_limits;


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
        $connect = $this->db->connect();
        $connect->beginTransaction();

        $sql = "INSERT INTO account (email, password, firstname, middlename, lastname, user_role, contact, birthdate, gender) VALUES (:email, :password, :firstname, :middlename, :lastname, :user_role, :contact, :birthdate, :gender);";

        $query = $connect->prepare($sql);
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
            $last_product_id = $connect->lastInsertId();

            $sec_sql = "INSERT INTO doctor_info (account_id) VALUES (:account_id)";

            $sec_query = $connect->prepare($sec_sql);
            $sec_query->bindParam(':account_id', $last_product_id);

            if ($sec_query->execute()) {
                $connect->commit();
                return true;
            } else {
                $connect->rollBack();
                return false;
            }
        } else {
            $connect->rollBack();
            return false;
        }
    }


    function show_doc()
    {
        $sql = "SELECT a.*, d.* FROM account a INNER JOIN doctor_info d ON d.account_id = a.account_id WHERE a.user_role = 1 AND a.is_deleted != 1 ORDER BY a.account_id ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }


    function sign_in_doctor()
    {
        $sql = "SELECT a.*, d.* FROM account a INNER JOIN doctor_info d ON a.account_id = d.account_id WHERE email = :email LIMIT 1;";
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
                $this->gender = $accountData['gender'];
                $this->birthdate = $accountData['birthdate'];
                $this->email = $accountData['email'];
                $this->contact = $accountData['contact'];
                $this->address = $accountData['address'];
                $this->verification_status = $accountData['verification_status'];
                $this->account_image = $accountData['account_image'];
                $this->start_wt = $accountData['start_wt'];
                $this->end_wt = $accountData['end_wt'];
                $this->specialty = $accountData['specialty'];
                $this->bio = $accountData['bio'];

                return true;
            }
        }
    }

    function update_doctor_info()
    {
        $sql = "UPDATE account a JOIN doctor_info d ON a.account_id = d.account_id
        SET a.firstname = :firstname, a.middlename = :middlename, a.lastname = :lastname, a.gender = :gender,
        a.birthdate = :birthdate, d.specialty = :specialty, a.contact = :contact, a.email = :email,
        a.address = :address, d.bio = :bio 
        WHERE a.account_id = :account_id";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':birthdate', $this->birthdate);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':specialty', $this->specialty);
        $query->bindParam(':bio', $this->bio);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':account_id', $this->account_id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function test_update()
    {
        $connect = $this->db->connect();
        $connect->beginTransaction();

        $sql = "UPDATE account 
        SET firstname = :firstname, middlename = :middlename, lastname = :lastname, gender = :gender, birthdate = :birthdate, contact = :contact, email = :email, address = :address
        WHERE account_id = :account_id";

        $query = $connect->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':birthdate', $this->birthdate);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':account_id', $this->account_id);

        if ($query->execute()) {
            $sec_sql = "UPDATE doctor_info 
            SET specialty = :specialty, bio = :bio
            WHERE account_id = :account_id";

            $sec_query = $connect->prepare($sec_sql);
            $sec_query->bindParam(':account_id', $this->account_id);
            $sec_query->bindParam(':specialty', $this->specialty);
            $sec_query->bindParam(':bio', $this->bio);

            if ($sec_query->execute()) {
                $connect->commit();
                return true;
            } else {
                $connect->rollBack();
                return false;
            }
        } else {
            $connect->rollBack();
            return false;
        }
    }

    function save_image()
    {
        $sql = "UPDATE account SET account_image = :account_image WHERE account_id = :account_id";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':account_image', $this->account_image);
        $query->bindParam(':account_id', $this->account_id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
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
        $sql = "INSERT INTO account (email, password, firstname, middlename, lastname, user_role, contact, gender, birthdate, campus_id) VALUES (:email, :password, :firstname, :middlename, :lastname, :user_role, :contact, :gender, :birthdate, :campus_id);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':user_role', $this->user_role);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':birthdate', $this->birthdate);
        $query->bindParam(':campus_id', $this->campus_id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function show_user()
    {
        $sql = "SELECT a.*, c.campus_id, c.campus_name FROM account a INNER JOIN campus c ON a.campus_id = c.campus_id WHERE user_role = 3 AND a.is_deleted != 1 ORDER BY account_id ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
}
