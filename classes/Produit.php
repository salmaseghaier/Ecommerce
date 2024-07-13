<?php

class Produit
{
    private $db;
    function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;dbname=projet','root','');
    }

    //liste des produits
    function listeproduit(){
        return $this->db->query("select * from product");
    }
    //add produit
    function addProduit($data){
        $n=$data['nom'];
        $d=$data['description'];
        $t=$data['taille'];
        $p=$data['Prix'];
        $categorie=$data['categorie'];
        $i=$data['image'];
        $this->db->exec("INSERT INTO product (nom, description, taille, prix, categorie_id, image) VALUES ('$n', '$d', '$t', '$p', '$categorie', '$i')");
    }
//delete produit
    function deleteProduit($id)
    {
        $this->db->exec("delete from product where id='$id'");

    }
//get produit by id
    function getProduitById($id)
    {
        return $this->db->query("select * from product where id='$id'")->fetch();
    }


    //update produit
    function updateP($data)
    {
        $n=$data['nom'];
        $d=$data['description'];
        $t=$data['taille'];
        $p=$data['Prix'];
        $categorie=$data['categorie'];
        $i=$data['image'];
        $id = $data['idP'];




        $this->db->exec("update product set nom ='$n',description='$d',taille='$t',Prix='$p',categorie_id='$categorie',image='$i' where id='$id'");


    }









}
