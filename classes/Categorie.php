<?php

class Categorie
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    }

//liste des categ
    function listecategorie()
    {
        return $this->db->query("select * from categorie");
    }

//add categorie
    function addCategorie($data)
    {//$_POST,$_GET
        $n = $data['nom'];
        $this->db->exec("insert into categorie values ('','$n')");

    }

//delete categorie
    function deleteCategorie($id)
    {
        $this->db->exec("delete from categorie where id='$id'");

    }

//get categorie by id
    function getCategorieById($id)
    {
        return $this->db->query("select * from categorie where id='$id'")->fetch();
    }


    //update categorie
    function updateC($dataa)
    {
        $n = $dataa['nom'];
        $id = $dataa['idC'];
        $this->db->exec("update categorie set nom ='$n' where id='$id'");


    }


}



