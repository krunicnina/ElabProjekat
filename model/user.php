<?php

class User {
    public $id;
    public $username;
    public $password;
//konstruktor
    public function __construct($id,$username,$password){
       $this->id=$id;
       $this->username=$username;
       $this->password=$password;
    }
//login
public static function loginUser($korisnik){
//upit za bazu
return true;

}


}


?>