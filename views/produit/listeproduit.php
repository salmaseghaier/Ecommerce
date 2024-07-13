<?php
include"../../classes/Produit.php";
include("../../Classes/Categorie.php");
$p=new Produit();
//liste des produits
$listeP=$p->listeproduit();
$c=new Categorie();

//delete produit
if(isset($_GET['idP'])){
    $id = $_GET['idP'];
    $p->deleteProduit($id);
    header("location:listeproduit.php");

}
?>
<html lang="en">

<head>
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            padding-top: 60px;
            color: #fff;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #333;
            color: #fff;
        }

    </style>
</head>

<body>

<?php include '../../views/navbar.php'; ?>


<!--<div class="content">
    <h2>Statistiques</h2>
    <div class="card">
        <h3>Total des Ventes</h3>
        <p>5000 dt</p>
    </div>
    <div class="card">
        <h3>Nombre de Produits</h3>
        <p>150</p>
    </div>
    <div class="card">
        <h3>Utilisateurs Inscrits</h3>
        <p>1200</p>
    </div>
-->
<h1 id="products">Liste des produits </h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">nom</th>
        <th scope="col">description</th>
        <th scope="col">taille</th>
        <th scope="col">Prix</th>
        <th scope="col">image</th>
        <th scope="col">Categorie</th>

        <th scope="col">Delete</th>
        <th scope="col">MAJ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($p=$listeP->fetch()){
        echo "<tr>
              <td>{$p['nom']}</td>
               <td>{$p['description']}</td>
                <td>{$p['taille']}</td>
                 <td>{$p['Prix']}</td>
                    <td><img src='{$p['image']}' alt='{$p['nom']}' style='width:100px; height:auto;'></td>
                <td>{$c->getCategorieById($p['categorie_id'])['nom']}</td>
                   <td><a href='?idP={$p['id']}'>delete</a></td>
                <td><a href='updateproduit.php?idP={$p['id']}'>MAJ</a></td>
                
               
               
      </tr>";
    }

    ?>

    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Ajouter du code JavaScript ici pour rendre le tableau de bord plus interactif
    });

</script>

</body>

</html>
