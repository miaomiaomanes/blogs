<div class='col-span-2 pr-20'>
    <h2 class='  text-4xl mb-10 font-semibold leading-10 text-gray-900 group-hover:text-gray-600'><?= $article['titre'] ?></h2>
    <img class='min-w-full' src='<?= $article['image'] ?>'>

    <div class='flex items-center gap-x-4 text-xs'>

        <div class='relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100'><?= $article['nom'] ?></div>
        <time class='text-gray-500'><?= $article['dateCreation'] ?></time>
    </div>
    <div><?= $article['contenu'] ?></div>

    <!-- for the reviews part -->
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
        <div class="text-gray-600"> <?php include_once('view/formComments.php') ?></div>

    </article>
    <?php include_once('view/commentsView.php') ?>
</div>