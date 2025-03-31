<?php
class User {
    private int $userID;
    private string $userFirstName;
    private string $userLastName;
    private string $userDateOfBirth;
    


    // Constructor
    public function __construct($userID, $userName, $userFirstName, $userLastName, $userDateOfBirth, $userEmailAddress, $userPassword) {
        $this->userID = $userID;
        $this->userName = $userName;
        $this->userEmailAddress = $userEmailAddress;
        $this->userFirstName = $userFirstName;
        $this->userLastName = $userLastName;
        $this->userDateOfBirth = $userDateOfBirth;
        $this->userPassword = $userPassword;
        
    }

    // Getters
    public function getUserID(): int {
        return $this->userID;
    }


    public function getUserFirstName(): string {
        return $this->userFirstName;
    }

    public function getUserLastName(): string {
        return $this->userLastName;
    }

    public function getUserDateOfBirth(): string {
        return $this->userDateOfBirth;
    }

    // Setters
    public function setUserID($userID) {
        $this->userID = $userID;
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
}
?>
