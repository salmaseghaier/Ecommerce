<?php
session_start();
class Reclamation {
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    }

    function addReclamation($data)
    {//$_POST,$_GET

        $idu=$data['idu'];
        $nom=$_SESSION['Nom'];
        $email = $data['email'];
        $desc = $data['Description'];

        $this->db->exec("insert into reclamation (idu,Nom,email,Description) values ($idu','$nom','$email',$desc')");

    }
    function deleteReclamation($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM reclamation WHERE id = ?");
        $this->db->exec("delete from reclamation where id='$id'");
    }
    function getReclamationById($id)
    {
        return $this->db->query("select * from reclamation where id='$id'")->fetch();
    }

    function listereclamation()
    {
        return $this->db->query("select * from reclamation");
    }
    function updatereclamation($data){

        $idu=$data['idu'];
        $nom=$_SESSION['Nom'];
        $desc = $data['Description'];
        $email = $data['email'];
        //this->db->exec("update reclamation set idu ='$idu',Description='$desc',Nom='nom', where id='$id'");

    }
}
?>
