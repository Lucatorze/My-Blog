<aside>
    <nav>
        <div class="menu">

            <?php
            if(isset($_SESSION['userId'])){
            ?>

                <ul>
                    <a href="index.php?pages=articles"><li>Articles</li></a>
                    <a href="index.php?pages=categories"><li>Catégories</li></a>
                    <a href="index.php?pages=logout"><li>Déconnexion</li></a>
                </ul>

            <?php
            }
            else {
            ?>

                <ul>
                    <a href="index.php?pages=articles"><li>Articles</li></a>
                    <a href="index.php?pages=categories"><li>Catégories</li></a>
                    <a href="index.php?pages=register"><li>Inscription</li></a>
                    <a href="index.php?pages=login"><li>Se connecter</li></a>
                </ul>

            <?php
            }
            ?>

        </div>
    </nav>
</aside>