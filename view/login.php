<?php require_once("controller/loginController.php"); ?>

<section id="loginSection">
    <div class="contenairLogin">

        <div>

            <?php echo $error; ?>

        </div>

        <form id="loginForm" name="loginForm" method="post" action="index.php?pages=login">
            <label for="nickname">Pseudo</label>
            <input type="text" name="nickname" id="nickname" placeholder="xX-Kikoo-xX"><br>
            <br>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password"><br>
            <br>

            <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
        </form>
        <div class="contenairLoginResult">
            <div class="nicknameInvalide">

            </div>
            <div class="passwordInvalide">
                <?php echo $passwordInvalide ?>
            </div>
            <div class="allGood">
                <?php echo $allGood ?>
            </div>
        </div>

    </div>
    <!-- <script src="./assets/js/loginAjax.js"></script> AJAX -->
    <script>
        $(function () {
            $('#nickname').focus();
            $('input').mouseover(function (){
                $(this).css({
                    'backgroundColor' : 'white',
                    'transition' : '0.8s'
                });
            });
            $('.elevator').css({
                'display' : 'none'
            });
        });
    </script>
</section>