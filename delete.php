<?php
  require "config.php" ;
  $bdd=connect() ;
  $name = $_GET['name'];
  $sql = "delete from produit where nom LIKE '%$name%' ";
  $resultat=$bdd->query($sql);
  header('Location: modif.php');
    Exit();
?>