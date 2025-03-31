<?php

class AccountDetails extends User {

    private $username;
    private $password;
    private $emailaddress;

    // Getters
    public function getUsername() {
        return $this->username;
    }

    public function getEmailAddress() {
        return $this->emailaddress;
    }

    public function getPasswordHashed() {
        return $this->password;
    }
    
    // Setters
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmailAddress($emailaddress) {
        $this->emailaddress = $emailaddress;
    }

    public function setUserPassword($userPassword) {
        $this->password = password_hash($userPassword, PASSWORD_BCRYPT);
    }

    // Other Functions 
    public function checkPassword($userInputtedPassword) {
        if (password_verify($userInputtedPassword, $this->password)) {
            echo "Password Accepted!";
        } else {
            echo "Password Incorrect";
        }
    }
}

?>
