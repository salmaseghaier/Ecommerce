<?php
include "../../classes/Commande.php";
$cmde = new Commande();
$listecommande = $cmde->listecommande();

?>
<html lang="en">

<head>
    <title>Liste des commandes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="margin: 50px">

<h1>Liste des commandes </h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">date commande</th>
        <th scope="col">User</th>
        <th scope="col">Prix</th>
        <th scope="col">Etat Commande</th>
        <th scope="col">Carte</th>
        <th scope="col">Code</th>
        <th scope="col">Date de paiement</th>
        <th scope="col">PAYER</th>
        <th scope="col">MAJ</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($cmde=$listecommande->fetch()){
        echo "<tr>
              <td>{$cmde['dateCmd']}</td>
               <td>{$cmde['iduser']}</td>
                <td>{$cmde['prix']}</td>
                <td>{$cmde['etatCommande']}</td>
                 <td>{$cmde['carte']}</td>
                 <td>{$cmde['code']}</td>
                 <td>{$cmde['datep']}</td>
                <td><a href='addpaiement.php?idC={$cmde['id']}'>Payer</a></td>
                           <td><a href='addcommande.php?idC={$cmde['id']}'>MAJ</a></td>
                           <td><a href='addcommande.php?idC={$cmde['id']}'>delete</a></td>

          
      </tr>";
    }

    ?>

    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
