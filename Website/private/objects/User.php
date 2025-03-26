<?php
class User {
    private $userID;
    private $userName;
    private $userFirstName;
    private $userLastName;
    private $userDateOfBirth;
    private $userPassword;

    // Constructor
    public function __construct($userID, $userName, $userFirstName, $userLastName, $userDateOfBirth, $userPassword) {
        $this->userID = $userID;
        $this->userName = $userName;
        $this->userFirstName = $userFirstName;
        $this->userLastName = $userLastName;
        $this->userDateOfBirth = $userDateOfBirth;
        $this->userPassword = $userPassword;
    }

    // Getters
    public function getUserID() {
        return $this->userID;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getUserFirstName() {
        return $this->userFirstName;
    }

    public function getUserLastName() {
        return $this->userLastName;
    }

    public function getUserDateOfBirth() {
        return $this->userDateOfBirth;
    }

    public function getUserPassword() {
        return $this->userPassword;
    }

    // Setters
    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setUserFirstName($userFirstName) {
        $this->userFirstName = $userFirstName;
    }

    public function setUserLastName($userLastName) {
        $this->userLastName = $userLastName;
    }

    public function setUserDateOfBirth($userDateOfBirth) {
        $this->userDateOfBirth = $userDateOfBirth;
    }
    // Hash Cost set to 10 by default
    public function setUserPassword($userPassword) {
        $this->userPassword = password_hash($userPassword, PASSWORD_BCRYPT);
    }
}
?>
