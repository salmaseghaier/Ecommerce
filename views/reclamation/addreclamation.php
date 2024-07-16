<?php
//session_start();
include("../../classes/reclamation.php");
include("../../classes/user.php");
include ("../../classes/Commande.php");

$reclamation = new reclamation();
$commande=new Commande();
$user=new user();
$listecommande=$commande->listecommande();

$listereclamation=$reclamation->listereclamation();

if(isset($_POST['add_reclamation'])){
    $reclamation->addReclamation($_POST);
    echo "Nouvelle réclamation ajoutée" ;
    header("location: listereclamation.php");}
?>
<html lang="en">

<head>
    <title>Ajouter reclamation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body style="margin: 50px">

<div class="form-container">
    <h2>Réclamation de Commande</h2>
    <form action="" method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="email">Adresse E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="id_commande">Numéro de Commande</label>
                <input type="number" class="form-control" id="id_commande" value="<?php echo $commande['idc']?>" name="id_commande" placeholder="N°de commande">
            </div>

                <label for="description">Description du Problème</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            <div>
                <select name="id_commande">
                <?php
                    while($commande=$listecommande->fetch()){
                    echo"<option value='{$reclamation['id']}'>{$reclamation['idc']}></option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" name ="add_reclamation" class="btn btn-primary">Envoyer votre Réclamation</button>
    </form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
