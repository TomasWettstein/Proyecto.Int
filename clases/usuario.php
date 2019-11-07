<?php 
class Usuario {
    public $userName;
    public $email;
    public $password;
    public $passwordRepeat;
    public $avatar;

    public function __construct($userName,$email,$password,$passwordRepeat,$avatar){
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->avatar = $avatar;
    }

    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function setEmail($email){
        $this->email - $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setPasswordRepeat($passwordRepeat){
        $this->passwordRepeat = $passwordRepeat;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getPasswordRepeat(){
        return $this->passwordRepeat;
    }
    public function getAvatar(){
        return $this->avatar;
    }
}
