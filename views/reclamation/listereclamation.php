<?php
include "../../classes/reclamation.php";
$reclamation= new reclamation();

$listereclamation=$reclamation->listereclamation();

if (isset($_GET['id'])){
    $id =$_GET['id'];
    $reclamation ->deletereclamation($id);
    header("location: listereclamation.php");
}
?>
<html lang="en">

<head>
    <title>Liste des Reclamations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="margin: 50px">

<h1>Liste des Réclamations </h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Numéro de Réclamation</th>
        <th scope="col">Description</th>
        <th scope="col">Delete</th>
        <th scope="col">MAJ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($r=$listereclamation->fetch()){
        echo " <tr>
              <td>{$r['id']}</td>
                <td>{$r['description']}</td>
                 <td><a href='?id={$r['id']}'>Delete</a></td>
                <td><a href='updatereclamation.php?id={$r['id']}'>MAJ</a></td>
                               

      </tr>";
    }

    ?>

    </tbody>
</table>

