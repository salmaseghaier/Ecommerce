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
        $p = $data['prix'];
        $d = date('Y-m-d H:i:s');
        $i = $_SESSION['panier']['id_user'];
        $defaultEtat = "non payée";
        $this->db->exec("insert into commande values ('','$p','$d','$i','','','','$defaultEtat')");

    }

        function getCommandeById($id)
        {
            return $this->db->query("select * from Commande where id='$id'")->fetch();
        }


    function updateCmd($data,$iduser)
    {
        $p=$data['prix'];
        $d=$data['datecmd'];
        $i=$data['iduser'];
        $defaultEtat = "non payée";

        $this->db->exec("update Commande set prix = '$p', dateCmd='$d', iduser = '$i', etatCommande='$defaultEtat' where id='$iduser'");

    }
//delete cmd
    function deleteCommande($id)
    {
        $this->db->exec("delete from Commande where id='$id'");

    }

}
