<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold">Add new article</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" name="titre" id="titre" placeholder="Title" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Context</span>
                        </label>
                        <textarea class="textarea textarea-bordered" name="contenu" id="contenu" cols="30" rows="10" placeholder="Context"></textarea>

                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Image</span>
                        </label>
                        <input type="file" name="image" id="image" class="file-input file-input-bordered file-input-accent " />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Categories</span>
                        </label>
                        <select name="id_categorie" id="id_categorie" class="input input-bordered">
                            <?php
                            foreach ($menu as $categorie) { ?>
                                <option value="<?= $categorie['id_categorie'] ?>"> <?= $categorie['nom'] ?></option>
                            <?php } ?>



                        </select>
                    </div>


                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>