<?php 
session_start();
 // if (isset($_SESSION['pharma']) AND !empty($_SESSION['pharma'])) {
 // 	header("location: Admin/");
 // }
 // else
 // {
 // 	header("location: ../login.php");
 // // die("tu n'est pas administrateur");
 // }
require("../config/commandes.php");
$Produits = afficher();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Tous les produits</title>
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
						<a class="nav-link" class="btn btn-primary" aria-current="page" href="../Admin">Nouveaux</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" class="btn btn-primary" href="supprimer.php">Supprimer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" class="btn btn-primary" href="afficher.php" style="font-weight: bold;">Produits</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" class="btn btn-primary" href="editer.php">Editer</a>
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
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Image</th>
								<th scope="col">Nom</th>
								<th scope="col">Prix</th>
								<th scope="col">Description</th>
								<th scope="col">Editer</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($Produits as $produit): ?>
								<tr>
									<th scope="row"><?php echo $produit->id ?></th>
									<td><a href="<?php echo $produit->image ?>"><img src="<?php echo $produit->image ?>" width="70%"></td>
										<td><?php echo $produit->nom ?></td>
										<td style="font-weight:bold; color: blue;"><?php echo $produit->prix ?>$</td>
										<td><?php echo substr($produit->description, 0, 100) ?>...</td>
										<td>
											<a href="Editer.php?pdt=<?php echo $produit->id ?>"><i class="fa fa-pencil" style="font-size: 200%;color: green;"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>


					</div><br><br>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>
