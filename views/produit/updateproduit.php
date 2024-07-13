<?php
include("../../Classes/Produit.php");
include("../../Classes/Categorie.php");
$p = new Produit();
//liset categ
$c= new Categorie();
$listeC=$c->listecategorie();
//Get cat by id
if(isset($_GET['idP'])){
    $id =$_GET['idP'];
    $prod= $p->getProduitById($id);
}
//update
if(isset($_POST['MAJ_produit'])){
    $p->updateP($_POST);
    header("location: listeproduit.php");
}



?>
<html lang="en">

<head>

    <title>MAJ Produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="margin: 50px">
<?php include '../../views/navbar.php'; ?>

<h1>MAJ Produit </h1>
<form method="post" action="">
    <input type="hidden" name="idP" value="<?php echo $prod['id']?>">
    <div class="form-group">
        <label for="nom">nom</label>
        <input type="text" class="form-control" id="nom" value="<?php echo $prod['nom']?>" name="nom" placeholder="Entrer nom">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" value="<?php echo $prod['description']?>" name="description" placeholder="Entrer description">
    </div>
    <div class="form-group">
        <label for="taille">taille</label>
        <input type="number" class="form-control" id="taille" value="<?php echo $prod['taille']?>" name="taille" placeholder="Entrer taille">
    </div>

    <div class="form-group">
        <label for="prix">prix</label>
        <input type="number" class="form-control" id="prix" value="<?php echo $prod['Prix']?>" name="Prix" placeholder="Entrer prix">
    </div>


    <div class="form-group">
        <label for="image">image</label>
        <input type="text" class="form-control" id="image" value="<?php echo $prod['image']?>" name="image" placeholder="Entrer image">
    </div>
    <div class="form-group">
        <label for="categorie">Categorie</label>
        <select name="categorie">
            <?php
            while($c=$listeC->fetch())
            {echo "<option value='{$c['id']}'>{$c['nom']}</option>";

            }

            ?>
        </select>
    </div>



    <button type="submit" name="MAJ_produit" class="btn btn-primary">MAJ Produit</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
