<form action="?p=addCommentForm" method="post">

Reviews : 
<br><textarea class='border-solid border-2 'name="review" id="review" cols="60" rows="2"></textarea><br>
    <input type="hidden" value="<?= $article['id_article'] ?>" name="id_article" id="id_article">
    
        <button class=" btn btn-primary">Submit</button>
    
</form>