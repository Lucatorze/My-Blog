<?php
require_once('controller/profileController.php');
?>

<section>

    <h3>PROFILE USER <?php echo $result['nickname'] ?></h3>
    <p>
        Pseudo : <?php echo "<br />".$result['nickname']?>
    </p>
    <p>
        <br />Nom : <?php echo "<br />".$result['lastname']?>
    </p>
    <p>
        <br />Prenom :<?php echo "<br />".$result['firstname']?>
    </p>
    <p>
        <br />Email :<?php echo "<br />".$result['email']?>
    </p>

    <!-- EDITION NEW PROFILE ----------------------------------------------->
    <br><br>
    <p>EDIT YOUR PROFILE ========================></p>
    <form method="POST" action="" >
        <p>New nickname</P>
        <input type="text" name="newNickname"><br><br>
        <p>New email</p>
        <input type="email" name="newEmail"><br><br>
        <input type="submit" id="btnSubmit" value="send">
    </form>
</section>