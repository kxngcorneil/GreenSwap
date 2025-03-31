<?php

require 'C:\Users\jakeh\Desktop\GreenSwap\Website\private\objects\User.php';
require 'C:\Users\jakeh\Desktop\GreenSwap\Website\private\objects\AccountDetails.php';

class UnitTestforUsers {

    public $user;

    public function __construct() {
        $this->user = new AccountDetails(
        1, 
        'Test',
        'Case', 
        '1990-02-20',
        'TestCase123', 
        'QWERTY',
        'Testcase@gmail.com');
    }

    public function runTests() {
        echo "User ID: " . $this->user->getUserID() . "<br>";
        echo "User Firstname: " . $this->user->getUserFirstName() . "<br>";
        echo "User Lastname: " . $this->user->getUserLastName() . "<br>";
        echo "User Date of Birth: " . $this->user->getUserDateOfBirth() . "<br>";
        echo "Username: " . $this->user->getUsername() . "<br>";
        echo "Password Hashed: " . $this->user->getPasswordHashed() . "<br>";
        echo "Email Addreess: " . $this->user->getEmailAddress() . "<br>";
        echo "If Password Correct:" . $this->user->checkPassword('QWERTY') . "<br>";
        

    }
}


$test = new UnitTestforUsers();
$test->runTests();

?>
