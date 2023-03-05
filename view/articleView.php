
<div class='col-span-2 pr-20 grow'>
    <h2 class='  text-4xl mb-10 font-semibold leading-10 text-gray-900 group-hover:text-gray-600'><?= $article['titre'] ?></h2>
    <img class='min-w-full' src='<?= $article['image'] ?>'>

    <div class='flex items-center gap-x-4 text-xs'>

        <div class='relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100'><?= $article['nom'] ?></div>
        <time class='text-gray-500'><?= $article['dateCreation'] ?></time>
    </div>
    <div><?= $article['contenu'] ?></div>

    <!-- for the reviews part -->
    <?php include_once('view/formComments.php') ?>
    <?php include_once('view/commentsView.php') ?>
</div>