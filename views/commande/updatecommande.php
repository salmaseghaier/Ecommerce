<?php
include("../../Classes/Commande.php");
$cmd =new Commande();

//Get commande by id
if(isset($_GET['idc'])){
    $id =$_GET['idc'];
    $com= $cmd->getCommandeById($id);
}

//update cmd
if(isset($_POST['MAJ_commande'])){
    $cmd->updateCmd($_POST);
    header("location: Panier.php");
}
?>







