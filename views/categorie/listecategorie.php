<?php
include"../../classes/Categorie.php";
$c=new Categorie();
//liste des modeles
$listeC=$c->listecategorie();
//delete des model

if(isset($_GET['idC'])){
    $id = $_GET['idC'];
    $c->deleteCategorie($id);
    header("location:listecategorie.php");



}
?>
<html lang="en">

<head>
    <title>Liste des Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="margin: 50px">

<h1>Liste des Categories </h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">delete</th>
        <th scope="col">MAJ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($c=$listeC->fetch()){
        echo "<tr>
              <td>{$c['nom']}</td>
               
                 <td><a href='?idC={$c['id']}'>delete</a></td>
                <td><a href='updatecategorie.php?idC={$c['id']}'>MAJ</a></td>
                               

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
