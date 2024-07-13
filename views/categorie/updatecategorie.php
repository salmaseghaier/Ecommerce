<?php
include("../../Classes/Categorie.php");

$c=new Categorie();
//Get categorie by id
if(isset($_GET['idC'])){
    $id =$_GET['idC'];
    $cat= $c->getCategorieById($id);
}
//update categorie
if(isset($_POST['MAJ_categorie'])){
    $c->updateC($_POST);
    header("location: listecategorie.php");
}

?>
<html lang="en">

<head>
    <title>MAJ categorie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="margin: 50px">

<h1>MAJ categorie </h1>
<form method="post" action="">
    <input type="hidden" name="idC" value="<?php echo $cat['id']?>">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" value="<?php echo $cat['nom']?>" name="nom" placeholder="Entrer nom">
    </div>

    <button type="submit" name="MAJ_categorie" class="btn btn-primary">MAJ Categorie</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
