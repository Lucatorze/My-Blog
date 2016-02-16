<?php require_once('controller/profileController.php'); ?>

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

</section>