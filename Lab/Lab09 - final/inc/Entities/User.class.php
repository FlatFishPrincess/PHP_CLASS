<?php

Class User  {

    // id        | int(11)     | NO   | PRI | NULL    | auto_increment |
    // | firstName | varchar(50) | YES  |     | NULL    |                |
    // | lastName  | varchar(50) | YES  |     | NULL    |                |
    // | email     | varchar(50) | YES  |     | NULL    |                |
    // | username  | varchar(50) | YES  |     | NULL    |                |
    // | password  | text        | YES  |     | NULL    |                |
    
    //Attributes
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $username;
    private $password;

    //Getters
    function getId() : int     {
        return $this->id;
    }

    function getFirstName() : string   {
        return $this->firstName;
    }

    function getLastName() : string {
        return $this->lastName;
    }

    function getEmail() : string {
        return $this->email;
    }

    function getUsername() : string {
        return $this->username;
    }

    function getPassword() : string {
        return $this->password;
    }

    //Setters
    function setFirstName(string $firstName)  {
        $this->firstName = $firstName;
    }

    function setLastName(string $lastName)   {
        $this->lastName = $lastName;
    }

    function setEmail(string $email) {
        $this->email = $email;
    }

    function setUsername(string $username)   {
        $this->username = $username;
    }

    public function setPassword(string $newPassword)    {
        //Hash password
        $this->password = $newPassword;
    }

    //Verify password
    public function verifyPassword($passwordToVerify) : bool {
        // password_verify(); should use
        $hash = password_hash($this->getPassword(), PASSWORD_DEFAULT);
        return password_verify($passwordToVerify, $hash);
    }
}
