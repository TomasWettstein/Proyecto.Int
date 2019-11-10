<?php 
class Usuario {
    public $userName;
    public $email;
    public $password;
    public $avatar;

    public function __construct($userName = null,$email,$password,$avatar){
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
    }

    //SETTERS

    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function setEmail($email){
        $this->email - $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

    //GETTERS

    public function getUserName(){
        return $this->userName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getAvatar(){
        return $this->avatar;
    }
}
