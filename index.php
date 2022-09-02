<?php
session_start();
// // if(isset($_SESSION['pharma']))
// // {
// //     if(!empty($_SESSION['pharma']))
// //     {
// //         header("Location: admin/afficher.php");
// //     }
// }
require("config/commandes.php");
require("config/connexion.php");
$Produits = afficher(); 
?>

<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <style>
      .bd-placeholder-img 
      {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px)
      {
        .bd-placeholder-img-lg 
        {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">A propos</h4>
              <p class="text-muted">Kampharma votre pharmacie en ligne vous facilite les paiements de vos medicaments pour garantir votre sante.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <ul class="list-unstyled">
                <p>
                  <a href="login.php" class="btn btn-primary my-2">Connexion</a>
                  <a href="https://wa.me/696808475?
                  text=j'ai%20vu%20un%20produit%20sur%20<mark>Kampharma</mark>%20les%20modalites%20de%20paiements" class="btn btn-secondary my-2">Nous contacter</a>
                </p>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <h1>Kampharma</h1><br><br>
            <strong>votre Pharmacie en ligne</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main>
      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php foreach ($Produits as $produit): ?>
              <div class="col">
                <div class="card shadow-sm">
                  <mark><?php echo $produit->nom ?></mark><img src="<?php echo $produit->image ?>" class="rounded mx-auto d-block" width="50%">
                  <a href=""></a>
                 
                  <div class="card-body">
                     <?php echo substr($produit->description, 0,100) ?>...

                   <!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><mark>Description du produit</mark> </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <div>
                          
                        </div>
                      </div>
                    </div> -->
                    
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-info">Acheter</button><br>
                        <!-- <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                          Description -->
                        </a>
                      </div>
                      <small class="text-muted"><?php echo $produit->prix ?> FCFA</small>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<style type="text/css">
  h1
  {
    color: #e2702b;
    font-weight: bold;
  }
  mark
  {
    text-align: center;
    font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-weight: bold;
    font-size: 1em;
  }
  img
  {
    box-sizing: border-box;
    border-radius: 57px;
  }
  small
  {
    font-size: 2em;
    color: green;
  }
</style>



<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>
