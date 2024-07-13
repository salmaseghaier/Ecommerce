<?php
class Commande
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    }

//liste des cmds
    function listecommande()
    {
        return $this->db->query("select * from commande");
    }

//Payer commande
    function payerCmde($data, $idC)
    {
        //$data = idCmde (url) , donnees paiement

            $n=$data['numerocarte'];
            $c=$data['code'];
            $dp=$data['dateP'];
            $newEtat = "payée";
            $this->db->exec("update Commande set carte = '$n', code='$c', datep = '$dp', etatCommande='$newEtat' where id='$idC'");
}
//ajout cmd
    function addCommande($data)
    {

        $d=$data['dateCmd'];
        $i=$data['iduser'];
        $defaultEtat = "non payée";
        $this->db->exec("insert into commande values ('','$d','$i','$defaultEtat')");
    }
    function getCommandeById($id)
    {
        return $this->db->query("select * from Commande where id='$id'")->fetch();
    }

}
