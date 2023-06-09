<?php
class User{
    public $name;
    public $email;
    public $phone;
    public $birth_date;
    public $password;
    public function __construct($name,$email,$phone,$password,$birth_date)
    {
        $this->phone=$phone;
        $this->password=$password;
        $this->email=$email;
        $this->name=$name;
        $this->birth_date=$birth_date;
    }
}