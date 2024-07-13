<?php
include("../../Classes/Produit.php");
include("../../Classes/Categorie.php");

// add produit
$p = new Produit();
if (isset($_POST['add_produit'])) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($image["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifiez si le fichier est une image réelle ou une fausse image
        $check = getimagesize($image["tmp_name"]);
        if ($check !== false) {
            // Vérifiez si le fichier existe déjà
            if (!file_exists($target_file)) {
                // Autoriser certains formats de fichier
                if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                    // Vérifiez la taille du fichier
                    if ($image["size"] < 500000) { // 500 KB maximum
                        // Si tout est correct, essayez de télécharger le fichier
                        if (move_uploaded_file($image["tmp_name"], $target_file)) {
                            $data = $_POST;
                            $data['image'] = $target_file; // Stocker le chemin du fichier dans la base de données
                            $p->addProduit($data);
                            header("location: listeproduit.php");
                            exit();
                        } else {
                            echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
                        }
                    } else {
                        echo "Désolé, votre fichier est trop volumineux.";
                    }
                } else {
                    echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
                }
            } else {
                echo "Désolé, le fichier existe déjà.";
            }
        } else {
            echo "Le fichier n'est pas une image.";
        }
    } else {
        echo "Désolé, aucune image n'a été téléchargée ou une erreur s'est produite lors du téléchargement.";
    }
}

// liste categorie
$c = new Categorie();
$listeC = $c->listecategorie();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajouter Produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            margin: 50px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<?php include '../../views/navbar.php'; ?>

<h1>Ajouter Produit</h1>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer nom" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Entrer description">
    </div>
    <div class="form-group">
        <label for="taille">Taille</label>
        <input type="text" class="form-control" id="taille" name="taille" placeholder="Entrer taille" required>
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix" placeholder="Entrer prix" required>
    </div>
    <div class="form-group">
        <label for="categorie">Categorie</label>
        <select name="categorie" class="form-control" required>
            <?php
            while ($c = $listeC->fetch()) {
                echo "<option value='{$c['id']}'>{$c['nom']}</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <button type="submit" name="add_produit" class="btn btn-primary">Ajouter Produit</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
