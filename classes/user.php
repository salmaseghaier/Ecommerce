<?php

class user
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    }

     public function login($data){
        $email = $data["email"];
        try{
            $req = "SELECT * FROM user where email = 'email'";
            $stmt = DB::connexion()->prepare($req);
            $stmt->execute(array(":email"=>$email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $e){
            echo "erreur : ".$e.getMessage();
        }
    }

   function createUser($data){
        $this->db->exec('INSERT INTO user(username_u,email_u,password_u) VALUES (:username_u,:email_u,:password_u)');
        $this->bindParam(':username',$data['username_u']);
        $this->bindParam(':email_u',$data['email_u']);
        $this->bindParam(':password',$data['mdp']);
        if($this->execute()){
            return '1';
        }else{
            return '0';
        }

    }
}