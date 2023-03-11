<div class="bg-white py-2 sm:pr-5 sm:py-5 g">
    <div class="mx-auto max-w-7xl ">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class=" ml-10 text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl">Welcome to Children News</h2>
            <p class="mt-2 ml-10 text-lg leading-8 text-gray-600">Explore the world news with your kids</p>
        </div>
        <div class="sm:ml-5 sm:pl-5 flex-wrap mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-y-20 gap-x-5 border-t border-gray-200 pt-10 sm:mt-10 sm:pt-5 lg:mx-0 lg:max-w-none lg:grid-cols-4">

            <?php foreach ($articles as $article) { ?>

                <article class="md:mx-2 mt-5 flex-wrap max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time class="text-gray-500"><?= $article['dateCreation'] ?></time>
                        <a href="?p=categorie&id=<?= $article['id_categorie'] ?>" class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100"><?= $article['nom'] ?></a>
                    </div>
                    <div class="group relative">
                        <figure class="sm:mr-10 max-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80"><img class='h-full w-full' src=<?= $article['image'] ?>></figure>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="?p=article&id=<?= $article['id_article'] ?>">
                                <span class="absolute"> <?= $article['titre'] ?></span>

                            </a>
                        </h3>

                        <div class="relative top-14  mt-5 sm:pt-5 text-sm leading-6 text-gray-600 line-clamp-3">
                        <?php if (isset($_SESSION['id_role'])) { ?>
                            <a class="badge badge-outline" href="?p=article&id=<?= $article['id_article'] ?>">voir plus....</a>
                        <?php }else{ ?>
                            <a class="badge badge-outline" href="?p=connexion">voir plus....</a>
                            <?php } ?>
                            <?php if (isset($_SESSION['id_role']) && $_SESSION['id_role'] == 1) { ?>
                                <form action="?p=delete" method="post" class="badge badge-outline badge-secondary">
                                    <input type="hidden" value="<?= $article['id_article'] ?>" name="deleteArticle" id="deteleArticle">
                                    <button type="submit">delete</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>

                </article>

            <?php } ?>

            <!-- More posts... -->
        </div>
    </div>
</div>