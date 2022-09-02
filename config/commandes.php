<?php 
function ajouter($image, $nom, $prix, $desc)
{
	if (require("connexion.php")) 
	{
		$req = $conn->prepare("INSERT INTO produits (image, nom, prix, description) VALUES('$image', '$nom', $prix, '$desc')");
		$req->execute(array($image, $nom, $prix, $desc));
		$req->closeCursor();
	}
}

function afficher()
{
	if (require("connexion.php"))
	{
		$req = $conn->prepare("SELECT * FROM produits ORDER BY id DESC");
		$req->execute();
		$data = $req->fetchAll(PDO::FETCH_OBJ);
		return $data;
		$req->closeCursor();
	}
}
function supprimer($id)
{
	if (require("connexion.php"))
	{
		$req =  $conn->prepare("DELETE FROM produits WHERE id=?");
		$req->execute(array($id));
	}
} 
function getAdmin($email, $motdepasse)
{
	if (require("connexion.php")) {
		$requser = $conn->prepare("SELECT * FROM admin WhERE email = ? AND motdepasse = ?");
       $requser->execute(array($email, $motdepasse));
       $userexist = $requser->rowCount();
       if ($userexist == 1) 
       {
           $userinfo = $requser->fetch();
           $_SESSION['id'] = $userinfo['id'];
           $_SESSION['name'] = $userinfo['email'];
           $_SESSION['pass'] = $userinfo['motdepasse'];
           header("location: Admin/afficher.php?id=" .$_SESSION['id']);
       }
       else
       {
        die('mauvais nom ou mot de passe!');
       }
	}
   
       
}
function modifier($image, $nom, $prix, $desc, $id)
{
	if (require("connexion.php")) 
	{
		$req = $conn->prepare("UPDATE produits SET image = ?, nom =? , prix = ?, description = ? WHERE id = ?");
		$req->execute(array($image, $nom, $prix, $desc,$id));
		$req->closeCursor();
	}
}
function ajouterAdmin($pseudo, $email, $motdepasse)
{
	if (require("connexion.php")) 
	{
		$req = $conn->prepare("INSERT INTO admin (pseudo, email, motdepasse) VALUES('$pseudo', '$email', '$motdepasse')");
		$req->execute(array($pseudo, $email, $motdepasse));
		if ($req) {
			die("le conte est creer");
		}
		else
		{
			die('conte non creer');
		}
		$req->closeCursor();
	}
}
?>
