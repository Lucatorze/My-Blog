<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=0.20">
    <link rel="stylesheet" type="text/css" href="default.css">
    <link rel="stylesheet" type="text/css" href="styleIndex.css">
    <link rel="stylesheet" type="text/css" href="menu_hamburger.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
</head>
<body>
    <main role="main">
      <header>
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>
      </header>
        <aside>
          <nav>
            <div class="menu">
                <ul>
                  <a href="index.php"><li>Accueil</li></a>
                  <a href="login.php"><li>Se connecter</li></a>
                  <a href="deconnexion.php"><li>Déconnexion</li></a>
                </ul>
            </div>
          </nav>
        </aside>
        <form id="loginForm" name="loginForm" method="post" action="loginController.php"> <!--ajouter la page php à action-->
           <label for"email">Pseudo</label>
           <input type="text" name="nickname" id="nickname" placeholder="xX-Kikoo-xX"><br><br>
        	 <label for"pwd">Mot de passe</label>
        	 <input type="password" name="password" id="password"><br><br>
        	 <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
        </form>
    </main>
    <script src="jquery.min.js"></script>
    <script>
    $(function () {
    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
      $( ".menu" ).slideToggle( "slow", function() {
      $( ".hamburger" ).hide();
      $( ".cross" ).show();
      });
    });

    $( ".cross" ).click(function() {
      $( ".menu" ).slideToggle( "slow", function() {
      $( ".cross" ).hide();
      $( ".hamburger" ).show();
      });
    });

    $('#prenom').focus();
    $('#prenom').click(function () {
      $(this).css({'background' : '#ffffe5'});
    });
    $('#prenom').mouseout(function () {
      $(this).css({'background' : '#fff'});
    })
    $('#nom').click(function () {
      $(this).css({'background' : '#ffffe5'});
    });
    $('#nom').mouseout(function () {
      $(this).css({'background' : '#fff'});
    })
    $('#pwd').click(function () {
      $(this).css({'background' : '#ffffe5'});
    });
    $('#pwd').mouseout(function () {
      $(this).css({'background' : '#fff'});
    })
    $('#pwd2').click(function () {
      $(this).css({'background' : '#ffffe5'});
    });
    $('#pwd2').mouseout(function () {
      $(this).css({'background' : '#fff'});
    })
    $('#email').click(function () {
      $(this).css({'background' : '#ffffe5'});
    });
    $('#email').mouseout(function () {
      $(this).css({'background' : '#fff'});
    })
  });

    </script>

</body>
</html>
