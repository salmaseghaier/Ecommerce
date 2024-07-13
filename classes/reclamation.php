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
        $desc = $data['desc'];
        $nom=$_SESSION['idu'];
        $n_comm = $data['idc'];
        //$this->db->exec("INSERT INTO reclamation (id_commande, id_user, description) VALUES (?, ?, ?)");

        $this->db->exec("insert into reclamation (id,idu,idc,description) values ('','$nom','$n_comm','$desc')");

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
        $desc = $data['description'];
        $id = $data['id'];
        $this->db->exec("update reclamation set description='$desc' where id='$id'");
    }
}
?>
