<p>reviews</p>

<?php foreach ($comments as $comment) { ?>

    <div>


        <span><?= $comment['prenom'] ?></span>
        <span><?= $comment['nom'] ?></span>


        <h2 style="color:blue"><?= $comment['comment'] ?></h2>



        date_create: <b><?= $comment['date_creation'] ?></b><br>



    </div>

<?php } ?>