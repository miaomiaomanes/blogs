<h2>1 dernier articles</h2>
<?php foreach($dernierArticles as $article) { ?>
   
    <div>
        <h2><?php echo $article['titre']; ?></h2>
        <img src='<?php echo $article['image'] ?>'>
        <p><?=$article['contenu']?></p>
    </div>
   

<?php } ?>