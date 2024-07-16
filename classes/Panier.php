<?php
class Panier
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    }
    public function store($user_id, $product_id) {
        $query = $this->db->prepare("INSERT INTO panier (user_id, product_id) VALUES (:user_id, :product_id)");
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':product_id', $product_id);
        return $query->execute();
    }
}
function executeRequete($req)
{
    global $mysqli;
$resultat = $mysqli->query($req);
if(!$resultat)
{
    die("Erreur sur la requete sql.<br>Message : " . $mysqli->error . "<br>Code: " . $req);
    }
return $resultat;
}
//------------------------------------




function internauteEstConnecte()
{
    if(!isset($_SESSION['membre'])) return false;
        else return true;
}
//------------------------------------
function internauteEstConnecteEtEstAdmin()
{
    if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) return true;
        else return false;
}
//------------------------------------
function creationDuPanier()
{
    if(!isset($_SESSION['panier']))
    {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['titre'] = array();
        $_SESSION['panier']['id_produit'] = array();
        $_SESSION['panier']['quantite'] = array();
        $_SESSION['panier']['prix'] = array();
    }
}
//------------------------------------
function ajouterProduitDansPanier($titre, $id_produit, $quantite, $prix)
{
    //s'assurer que le panier existe
    creationDuPanier();
    $position_produit = array_search($id_produit, $_SESSION['panier']['id_produit']);
    if ($position_produit !== false) {
        $_SESSION['panier']['quantite'][$position_produit] += $quantite;
    } else {   // Ajouter l'article au panier
        $_SESSION['panier']['titre'][] = $titre;
        $_SESSION['panier']['id_produit'][] = $id_produit;
        $_SESSION['panier']['quantite'][] = $quantite;
        $_SESSION['panier']['prix'][] = $prix;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titre = $_POST['titre'];
        $id_produit = $_POST['id_produit'];
        $quantite = $_POST['quantite'];
        $prix = $_POST['prix'];
    }



    //




//------------------------------------
    function montantTotal()
    {
        $total = 0;
        for ($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++) {
            $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
        }
        return round($total, 2);
    }

//------------------------------------
    function retirerProduitDuPanier($id_produit_a_supprimer)
    {
        $position_produit = array_search($id_produit_a_supprimer, $_SESSION['panier']['id_produit']);
        if ($position_produit !== false) {
            array_splice($_SESSION['panier']['titre'], $position_produit, 1);
            array_splice($_SESSION['panier']['id_produit'], $position_produit, 1);
            array_splice($_SESSION['panier']['quantite'], $position_produit, 1);
            array_splice($_SESSION['panier']['prix'], $position_produit, 1);
        }
    }

//------------------------------------
//--- AJOUT PANIER ---//
    if (isset($_POST['ajout_panier'])) {   // debug($_POST);
        $resultat = executeRequete("SELECT * FROM produit WHERE id_produit='$_POST[id_produit]'");
        $produit = $resultat->fetch_assoc();
        ajouterProduitDansPanier($produit['titre'], $_POST['id_produit'], $_POST['quantite'], $produit['prix']);
    }
//--- VIDER PANIER ---//
    if (isset($_GET['action']) && $_GET['action'] == "vider") {
        unset($_SESSION['panier']);
    }
    session_destroy();

}




