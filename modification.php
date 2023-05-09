<?php
  require "config.php" ;
  $bdd=connect() ;
  if(isset($_POST['pri']))
  {
  $name = $_GET['name'];
  $prix = $_POST['prix'];
  $sql = "update produit set prix = $prix where nom LIKE '%$name%' ";
  $resultat=$bdd->query($sql);
  header('Location: modif.php');
    Exit();
  }
  else
  {
    ?>
    <form method="post">
        <input class="form-control me-2" name="prix">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <?php
  }
?>