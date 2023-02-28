<div class='ml-10 pb-20'>
    <h2>Top Stories</h2>
<div >
    <?php foreach ($dernierArticles as $dernierArticle) { ?>

        <div class="group relative">

            <figure class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80"><img src=<?= $dernierArticle['image'] ?>></figure>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="?p=article&id=<?= $dernierArticle['id_article'] ?>">
                    <span class="absolute bottom-0"> <?= $dernierArticle['titre'] ?></span>

                </a>
            </h3>
        </div>


    <?php } ?>

    <div>
    </div>