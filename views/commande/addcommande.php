
<?php
include("../../classes/Commande.php");
$cmde = new Commande();

if(isset($_POST['add_commande'])){
    //ajout
    $cmde->addCommande($_POST);
    //redirection vers la panier
    header("location: Panier.php");
}

?>















