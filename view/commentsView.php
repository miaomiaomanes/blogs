<p class='text-3xl mb-10'>Reviews</p>


<?php foreach ($comments as $comment) { ?>


    <article class=" flex max-w-xl flex-col items-start justify-between ">
        <div class="relative  mt-3 flex justify-between  items-center gap-x-4">
            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        <span><?= $comment['prenom'] ?></span>
                        <span><?= $comment['nom'] ?></span>
                    </a>
                </p>
            </div>
        </div>
      
        <div class="pl-14 flex items-center gap-x-2 text-xs">
            <time datetime="2020-03-16" class="text-gray-500"><?= $comment['date_creation'] ?></time>

        </div>

        <div class="group relative">

            <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3"><?= $comment['comment'] ?></p>
        </div>

    </article>
    <div class="divider max-w-l "></div>

<?php } ?>