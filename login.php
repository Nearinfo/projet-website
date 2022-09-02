<?php 
session_start();
include "config/commandes.php";
// if(isset($_SESSION['pharma']))
// {
// 	if(!empty($_SESSION['pharma']))
// 	{
// 		header("Location: admin/afficher.php");
// 	}
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Login</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<form method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" style="width: 50%"required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="motdepasse" style="width: 50%" required>
					</div>
					<input type="submit" class="btn btn-danger" value="Se connecter" name="envoyer" style="width: 50%" required>
				</form>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</div>

</body>
</html>
<?php 
if(isset($_POST['envoyer']))
{
	if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
	{
		$email = htmlspecialchars($_POST['email']) ;
		$motdepasse = sha1($_POST['motdepasse']);

		$admin = getAdmin($email, $motdepasse);

		if($admin)
		{
			$_SESSION['pharma'] = $admin;
			header('Location: admin/afficher.php');
		}
		else
		{
			header('Location: admin/afficher.php');
		}
		// }else{
		// 	header('Location: index.php');
		// }
	}

}
?>