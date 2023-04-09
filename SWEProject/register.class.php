<?php 

class RegisterUser {

    private $username;
    private $raw_password;
    private$encrypted_password;
    private $firstname;
    private $lastname;
    private $email;
    private $dob;
    private $gender;
    private $usertype;
    private $pettype;
    private $petname;
    private $petage;
    public $error;
    public $success;
    public $storage = "Data/registered.json";
    private $storage_users;
    private $new_user;


    public function __construct($username, $password, $firstname, $lastname, $email, $dob, $gender, $usertype, $pettype, $petname, $petage) {

        $this->username = trim($this->username);
        $this->username = filter_var($username, FILTER_SANITIZE_STRING);

        $this->firstname = trim($this->firstname);
        $this->firstname = filter_var($firstname, FILTER_SANITIZE_STRING);

        $this->lastname = trim($this->lastname);
        $this->lastname = filter_var($lastname, FILTER_SANITIZE_STRING);

        $this->email = trim($this->email);
        $this->email = filter_var($email, FILTER_SANITIZE_STRING);

        $this->dob = trim($this->dob);
        $this->dob = filter_var($dob, FILTER_SANITIZE_STRING);

        $this->gender = trim($this->gender);
        $this->gender = filter_var($gender, FILTER_SANITIZE_STRING);

        $this->usertype = trim($this->usertype);
        $this->usertype = filter_var($usertype, FILTER_SANITIZE_STRING);

        $this->pettype = trim($this->pettype);
        $this->pettype = filter_var($pettype, FILTER_SANITIZE_STRING);

        $this->petname = trim($this->petname);
        $this->petname = filter_var($petname, FILTER_SANITIZE_STRING);

        $this->petage = trim($this->petage);
        $this->petage = filter_var($petage, FILTER_SANITIZE_STRING);

        $this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
        $this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);



        $this->stored_users = json_decode(file_get_contents($this->storage), true);

        $this->new_user = [
            "username" => $this->username,
            "password" => $this->encrypted_password,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email" => $this->email,
            "dob" => $this->dob,
            "gender" => $this->gender,
            "usertype" => $this->usertype,
            "pettype" => $this->pettype,
            "petname" => $this->petname,
            "petage" => $this->petage
        ];


        if ($this->checkFieldValues()) {
            $this->insertUser();
        }


    }

    private function checkFieldValues(){
        if (empty($this->username) || empty($this->raw_password)){
            $this->error = "both fields are required";
            return false;
        } else {
            return true;
        }
    }

    private function usernameExists(){
        foreach($this->stored_users as $user) {
            if ($this->username == $user["username"]){
                $this->error = "username already taken, try again";
                return true;
            }
        }

        return false;
    }

    private function insertUser(){
        if ($this->usernameExists() == FALSE) {
            array_push($this->stored_users, $this->new_user);
            if (file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))) {
                return $this->success = "reg successful";
            } else {
                return $this->error = "something went wrong, try again";
            }
        }
    }


}



