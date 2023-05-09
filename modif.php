<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="navbar-brand" src="Images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modifications
          </a>
          <ul class="dropdown-menu">       
            <li><a class="dropdown-item" href="formAdd.php">Ajouter un produit</a></li>
          </ul>
        </li>
      </ul>
      <form method="post" class="d-flex" role="search">
        <input class="form-control me-2" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 
  <?php
  require "config.php" ;
  $bdd=connect() ;
  if(isset($_POST['search']))
  {
  $recherche = strtolower($_POST['search']);
  $sql = "select * from produit where nom LIKE '%$recherche%'";
  }
  else
  {
  $sql = "select * from produit ";
  }
  $resultat=$bdd->query($sql);

 /* while($produit = $resultat->fetch(PDO::FETCH_OBJ))
  {
    echo"<tr> <td>". $produit->nom ."</td> <td> ".$produit->prix ."</td> <td> <img src='".$produit->photo ."'></td></tr>" ;
  } */

  ?> 
  <div class="container text-center"> 
    <div class="row">
    <?php
  while($produit = $resultat->fetch(PDO::FETCH_OBJ))
  {

    ?>

      <div class="card m-2" style="width: 18rem;">
        <div class="cardheader">               
					<div class="avatar">
						<img alt="" src="<?php echo $produit->photo ; ?>">
					</div>
				</div>
        <div class="card-body info">
          <div class="title">
            <a ><?php echo $produit->nom ; ?></a>
          </div>
          <div class="price">
            <a ><?php echo $produit->prix ; ?></a>
          </div>
        </div>
        <div class="card-body valid">
          <div class="validbutton">
            <a href="delete.php?name=<?php echo $produit->nom ; ?>">Supprimer</a>
          </div>
        </div>
        <div class="card-body valid">
          <div class="validbutton">
            <a href="modification.php?name=<?php echo $produit->nom ; ?>">Modifier</a>
          </div>
        </div>
      </div>

<?php }?>

  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  </body>
</html>