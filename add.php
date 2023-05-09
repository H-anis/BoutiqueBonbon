<?php
  require "config.php" ;
  $bdd=connect() ;
  $name = $_POST['name'];
  $prix = $_POST['prix'];

  $image = $_POST['photo'];
  $chemin_destination = $image; 'Images/' . 
  rename("C:/Users/zbeub/Desktop/" . $_POST['photo'], "C:/wamp64/www/SiteBonbon/Images/" . $_POST['photo']);
  $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination);
  $sql = "INSERT INTO produit (nom, prix, photo)     VALUES ('".$name."' , '".$prix."' , '".$chemin_destination."');";
  $bdd->exec($sql);
  header('Location: modif.php');
    Exit();
?>