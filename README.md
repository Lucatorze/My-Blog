# strangeAnimals42

Pour installer le blog sur votre hebergeur, voici la liste des chose à faire : 

1. Décompressé tous le contenu du zip dans votre répertoire www/ de votre serveur

2. prenez le fichier " blog.sql ", ouvrez le et copier l'intégralité de son contenu dans votre base de données. Des articles, Des catégories , des commentaires et un compte administrateur sera déjà présent afin de servir d'exemple.

3. Ensuite, renomer le fichier " model/dbconfExemple.php " en " dbconf.php " (Laissez le dans "model")

4. A l'intérieur du fichier " dbconf.php ", Modifier les information de connexion (host, dbname, user et password) pour qu'il puis se connecter à la base de données.

5. Les identifiant du compte admin sont : 
  * Login : admin123
  * Mot de passe : admin123

6. Afin de vous créer un compte personnel Administrateur, déconnectez vous du compte administrateur, créez vous un compte et reconnectez vous avec le compte admin123. Dans le menu, cliquez sur " Administration ", puis " Gestion des membres ", et enfin modifier votre compte en séléctionnant le rang " Administrateur ". Vous pouvez enssuite supprimer le compte admin123 et vous reconnecter avec votre nouveau compte Administrateur.
