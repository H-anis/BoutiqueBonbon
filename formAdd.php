<form method="post" action="add.php" class="d-flex" role="search">
<ul>
    <li>
        <a>Nom du produit</a>
        <input class="form-control me-2" name="name">
    </li>
    <li>
<a>Prix du produit</a>
<input class="form-control me-2" name="prix" >
    </li>
    <li>
    <label for="photo">Choisissez la photo à insérer</label><input type="file" name="photo" enctype= "multipart/form-data" />
    </li>
    <li>    
<button class="btn btn-outline-success" type="submit">Enregistrer</button>
    </li>
</ul>
</form>