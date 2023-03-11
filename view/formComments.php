<form action="?p=addCommentForm" method="post">


    <article class="border-solid ml-20 mb-20 border-2 flex max-w-xl flex-col items-start justify-between mt-20">
        <div class="relative rounded-lg mt-4 flex items-center gap-x-4">
            <img src="assets/img/logo.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-4">
                <p class="font-semibold text-gray-900">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        <span><?= $_SESSION['prenom'] ?></span>
                        <span><?= $_SESSION['nom'] ?></span>
                    </a>
                </p>

            </div>

        </div>
        <div class="divider max-w-l "></div>
        <div class="text-gray-600">
            Reviews :
            <br><textarea class='border-solid border-2 ' name="review" id="review" cols="60" rows="2"></textarea><br>
            <input type="hidden" value="<?= $article['id_article'] ?>" name="id_article" id="id_article">

            <button class=" btn btn-primary">Submit</button>
        </div>

    </article>

</form>