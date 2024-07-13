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
<div class="navbar">
    <h1>Tableau de Bord Admin</h1>
</div>


<!-- navbar.php -->
<div class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Tableau de Bord Admin</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#dashboard">Tableau de Bord</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/projet-php/Ecommerce/views/produit/listeproduit">Produits</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/projet-php/Ecommerce/views/produit/addproduit">Add produits</a></li>
            <li class="nav-item"><a class="nav-link" href="/listecommande">Commandes</a></li>
            <li class="nav-item"><a class="nav-link" href="/addcommande">Add commandes</a></li>
            <li class="nav-item"><a class="nav-link" href="/listeutilisateur">Utilisateurs</a></li>
        </ul>
    </div>
</div>
