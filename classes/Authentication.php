<?php

class Authentication
{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=projet',"root", "");
    }

    //Sign up
    function signup($data){
        $n = $data['nom'];
        $p = $data['prénom'];
        $email = $data['email'];
        //$phone=$data['telephone'];
        $pass = md5($data['password']);
        //$adresse=$data['adresse'];
        //$civilite=$data['civilite'];
        //$statut=$data['statut'];
        $role = "ROLE_CLIENT";

        $this->db->exec("insert into user values ('', '$n','$p','$email','','$pass','','','','$role')");
    }
    //Sign in
    function signin($username, $password)
    {
        return $this->db->query("select * from user where email='$username' and password='$password'");
    }

    //Vérification Username
    function verifEmail($email)
    {
        return $this->db->query("select * from user where email='$email'");
    }
}