<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>

        <div class="blockAdmin">

            <ul>

                <li class="linkAdmin"><a href="index.php?pages=listCategories">Gestion des categories</a></li>
                <li class="linkAdmin"><a href="index.php?pages=listArticles">Gestion des articles</a></li>
                <li class="linkAdmin"><a href="index.php?pages=editUsers">Gestion des membres</a></li>

            </ul>

        </div>

        <?php

    }else {

        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php

    }

    ?>
</section>