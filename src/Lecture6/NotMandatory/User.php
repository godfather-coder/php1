<?php
require "./UserInterface.php";

class User implements Useri{
    public $showForm = true;
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

    function validphone()
    {
        if (str_starts_with($this->phone, "+995") && strlen($this->phone) === 13) {
        } else {
            $this->showForm =false;
            return "Phone Number is Invalid";
        }
    }
    function validemail()
    {
       if(strpos($this->email,"@") !== false){
       }
       else{
           $this->showForm =false;
           return "Email is Invalid";
       }
    }

    function validdate()
    {
        $date = strtotime($this->birth_date);
        if ($date !== false) {
        } else {
            $this->showForm =false;
            return "Invalid Date Option";

        }
    }

    function validpass()
    {
        if(strlen($this->password)<8){
            $this->showForm =false;
            return "Password Must Contains More Than 8 Characters";

        }elseif (strlen($this->password)>8 ){
            $Numbers = false;
            $Chars = false;
            for ($i = 0; $i < strlen($this->password); $i++) {
                $char = $this->password[$i];
                if (ctype_digit($char)) {
                    $Numbers = true;
                }
                if (ctype_alpha($char)) {
                    $Chars = true;
                }
                if ($Numbers && $Chars) {
                    break;
                }
            }
            if ($Numbers && $Chars) {
            } else if(!$Numbers){
                $this->showForm =false;
               return "Password Must Contains Numbers";
            }else if(!$Chars){
                $this->showForm =false;
                return "Password Must Contains Characters";
            }
        }
    }
}