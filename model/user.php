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
public static function loginUser($korisnik, mysqli $conn){
//upit za bazu

$query= "SELECT * FROM user WHERE username= '$korisnik->username' AND 'password=korisnik->password'";
return $conn->query($query);


//return true;

}


}


?>