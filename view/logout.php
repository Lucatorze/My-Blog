<?php require_once('controller/logoutController.php'); ?>

<section>

    <div>
        Vous êtes à présent déconnecté<br>
        <a href="index.php">Retour à l'accueil</a>
    </div>
    <script>
        $(function () {
            $('.elevator').css({
               'display' : 'none'
            });
        })
    </script>
</section>