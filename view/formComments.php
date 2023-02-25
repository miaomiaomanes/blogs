<form action="?p=addCommentForm" method="post">
   
    Reviews : <textarea name="review" id="review" cols="30" rows="10"></textarea><br>
    <input type="hidden" value="<?= $article['id_article'] ?>" name="id_article" id="id_article">
    <br>
    <button>Ajouter</button>
</form>