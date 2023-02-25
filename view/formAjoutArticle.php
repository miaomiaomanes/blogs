<h1>Ajouter un article</h1>

<form action="" method="post">
    Titre : <input type="text" name="titre" id="titre"><br>
    Contenu : <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea><br>
    Image : <input type="text" name="image" id="image"><br>
    <!-- id_user : <input type="text" name="id_user" id="id_user"><br> -->
    categorie : <select name="id_categorie" id="id_categorie">
        <?php 
        foreach ($menu as $categorie) { ?>


<option value="<?= $categorie['id_categorie'] ?>"> <?= $categorie['nom'] ?></option>
                   

        <?php } ?>



    </select>
    <br>
    <button>Ajouter</button>
</form>