<h1>Tous les articles</h1>

<?php foreach ($articles as $article) { ?>

    <div>

        <a href="?p=article&id=<?= $article['id_article'] ?>">
            <h2><?= $article['titre'] ?></h2>
        </a>
        <img src=<?= $article['image'] ?>>
        <?php if (isset($_SESSION['id_role']) && $_SESSION['id_role'] == 1) { ?>
        <form action="?p=delete" method="post" >
           <input type="hidden" value="<?= $article['id_article'] ?>" name="deleteArticle" id="deteleArticle">
           <button type="submit">delete</button>
        </form>
        <?php } ?>


        <h2 style="color:blue"><?= $article['nom'] ?></h2>



        date_create: <b><?= $article['dateCreation'] ?></b><br>
        <a href="?p=article&id=<?= $article['id_article'] ?>">voir plus....</a>
        

    </div>

<?php } ?>