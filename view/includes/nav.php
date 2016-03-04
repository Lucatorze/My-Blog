<aside>
    <nav>
        <div class="menu">

            <?php
            if(isset($_SESSION['admin'])){
                ?>

                <ul>
                    <a href="index.php?pages=articles"><li>Articles</li></a>
                    <a href="index.php?pages=categories"><li>Catégories</li></a>
                    <a href="index.php?pages=profile"><li>Profile</li></a>
                    <a href="index.php?pages=admin"><li>Administration</li></a>
                    <a href="index.php?pages=logout"><li>Déconnexion</li></a>
                </ul>

                <?php
            }
            elseif(isset($_SESSION['userId'])){
                ?>

                <ul>
                    <a href="index.php?pages=articles"><li>Articles</li></a>
                    <a href="index.php?pages=categories"><li>Catégories</li></a>
                    <a href="index.php?pages=profile"><li>Profile</li></a>
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