<?php
require_once('controller/profileController.php');
?>

<section id="containerProfile">

    <div class="btnInfo">
        <img class="imageFlech" src="./assets/img/flech.png">
        <img class="imageFlech2" src="./assets/img/flech2.png">
    </div>
    <div class="blocInfoPofile">
        <h3><div id="titleProfile">PROFILE UTILISATEUR</div><div class="profileResponse"> ( <?php echo $result['nickname'] ?> )</div></h3>
    <p>
        <br>Pseudo<div class="profileResponse"><?php echo "<br>".$result['nickname']?></div>
    </p>
    <p>
        <br>Nom<div class="profileResponse"><?php echo "<br>".$result['lastname']?></div>
    </p>
    <p>
        <br>Prenom<div class="profileResponse"><?php echo "<br>".$result['firstname']?></div>
    </p>
    <p>
        <br>Email<div class="profileResponse"><?php echo "<br>".$result['email']?></div>
    </p>
    <p>
        <br>ID user<div class="profileResponse"><?php echo "<br>".$_SESSION['userId']?></div>
    </p>
</div>
    <!-- EDITION NEW PROFILE ----------------------------------------------->
    <br><br>
    <p><h3>EDITER VOTRE PROFILE</h3></p>
    <form method="POST" action="" >
        <p>Nouveau pseudo</P>
        <input type="text" name="newNickname"><br><br>
        <p>Nouveau email</p>
        <input type="email" name="newEmail"><br><br>
        <input type="submit" id="btnSubmit" value="Envoyer">
    </form>
    <div class="refreshEmail">
        <?php echo $resetNickname?>
    </div>
    <div class="refreshNickname">
        <?php echo $resetEmail?>
    </div>
    <script>
        $(function (){
            var i = 1;
                $('.btnInfo').click(function () {
                    i++;
                    if (i % 2 == 0) {
                        $('.imageFlech').css({
                            'display':'inline-block'
                        });
                        $('.imageFlech2').css({
                            'display' : 'none'
                        });
                        $('.blocInfoPofile').slideUp();
                    } else if (i % 2 != 0) {
                        $('.imageFlech').css({
                            'display':'none'
                        });
                        $('.imageFlech2').css({
                            'display' : 'inline-block'
                        });
                        $('.blocInfoPofile').slideToggle();
                    }
                })
        })
    </script>
</section>