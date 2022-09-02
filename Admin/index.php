<?php
session_start();
 // if (!isset($_SESSION['pharma'])) 
 // {
 //   header("location: ../login.php");
 // }
 // if (empty($_SESSION['pharma'])) 
 // {
 //   header("location: ../login.php");
 // }
require("../config/commandes.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

	<title>ajouter un produit</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../"><mark>Kampharma Shop</mark></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" class="btn btn-primary" aria-current="page" href="../Admin" style="font-weight: bold;">Nouveaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-primary" href="supprimer.php">Supprimer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-primary" href="afficher.php">Produits</a>
        </li>
        <li class="nav-item">
						<a class="nav-link active" class="btn btn-primary" href="Editer.php">Editer</a>
					</li>
      </ul>
      <div>
      	<a href="deconnexion.php" class="btn btn-danger">Se deconnecter</a>
      </div>
  </div>
</nav>
	<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				<form method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
						<input type="name" name="image" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Nom du produit</label>
						<input type="text" name="nom" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">prix</label>
						<input type="number" name="prix" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Description du produit</label>
						<textarea class="form-control" name="desc" required></textarea>
					</div>
					<button type="submit" name="valider" class="btn btn-success">Ajouter</button>
				</form>

			</div>
		</div>

	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

		
</body>
</html>
<?php 
if (isset($_POST['valider'])) 
{
	if (isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc'])) 
	{
		if (!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc'])) 
	   {
			$image = htmlspecialchars($_POST['image']);
			$nom = htmlspecialchars($_POST['nom']);
			$prix = htmlspecialchars($_POST['prix']);
			$desc = htmlspecialchars($_POST['desc']);
			try 
			{
				ajouter($image, $nom, $prix, $desc);
				
			} 
			catch (Exception $e) 
			{
				$e->getMessage();
			}
       }
	}
}
?>