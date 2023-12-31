<?php
class Auth
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $isActive;
    private $registrationDate;
    private $companyID;
    private $resetToken;

    public function __construct($id, $username, $email, $password, $role, $isActive, $registrationDate, $companyID, $resetToken = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->isActive = $isActive;
        $this->registrationDate = $registrationDate;
        $this->companyID = $companyID;
        $this->resetToken = $resetToken;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
    // Getter for password hash
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    public function getCompanyID()
    {
        return $this->companyID;
    }
    public function getResetToken()
    {
        return $this->resetToken;
    }
    // Setters
}
?>