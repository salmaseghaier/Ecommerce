<?php
session_start();
include("../../classes/Panier.php");
$pan=new Panier();
if(isset($_POST['add_panier'])){
    //ajout
    $pan->creationDuPanier();
    //redirection vers la page shop
    header("location: shop.php");
}
if(empty($_SESSION['panier']['id_produit'])) // panier vide
{
    echo "<tr><td colspan='5'>Votre panier est vide</td></tr>";
}
else
{
    for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
    {
        echo "<tr>";
        echo "<td>" . $_SESSION['panier']['titre'][$i] . "</td>";
        echo "<td>" . $_SESSION['panier']['id_produit'][$i] . "</td>";
        echo "<td>" . $_SESSION['panier']['quantite'][$i] . "</td>";
        echo "<td>" . $_SESSION['panier']['prix'][$i] . "</td>";
        echo "</tr>";
    }
    echo "<tr><th colspan='3'>Total</th><td colspan='2'>" . montantTotal() . " £</td></tr>";
    if(internauteEstConnecte())
    {
        echo '<form method="post" action="">';
        echo '<tr><td colspan="5"><input type="submit" name="payer" value="Valider et déclarer le paiement"></td></tr>';
        echo '</form>';
    }
    else
    {
        echo '<tr><td colspan="3">Veuillez vous <a href="register.php">inscrire</a> ou vous <a href="login.php">connecter</a> afin de pouvoir payer</td></tr>';
    }
    echo "<tr><td colspan='5'><a href='?action=vider'>Vider mon panier</a></td></tr>";
}
echo "</table><br>";
?>
<html lang="en">

<head>
    <title>Ajouter Panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="margin: 50px">

<h1>Ajout Panier</h1>
<form method="post" action="">
    <div class="form-group">
        <label for="nom">Nom du Produit</label>
        <input type="text" class="form-control" id="produit"  name="produit" placeholder="choisir produit">
    </div>
    <label for="nom">Quantité</label>
    <input type="number" class="form-control" id="quantité"  name="quanité" placeholder="préciser la quantité">
    </div>
    <button type="submit" name="add_panier" class="btn btn-primary">Confirmer votre choix</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
<?php session_destroy(); ?>
