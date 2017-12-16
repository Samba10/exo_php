<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Page d'accueil</title>
      <style type="text/css">
        body{
          background-color:gray;
          text-align: center;
          background: earth.gif;

        }
        form{
          border: solid 10px white ;
          margin-right: 30%;
          margin-left: 30%;
          border-radius: 15px;


        }
      </style>
    </head>
    <body>
      <h2>Bienvenue sur le page d'Accueil de mon site</h2>
    <form method="POST" action="">
        Login <input type="login" name="mail" placeholder="e-mail"/> <br/><br/>
        Password <input type="password" name="mdp" placeholder="mot de passe"/> <br/><br/>
        Profil <select name="profil" id="profil">
         <option value="">User</option>
         <option value="">Admin</option>
         </select><br/><br/>
         <input type="submit" value="Connexion"/><br/><br/>
         
    </form>
    <form action="inscription.php">
      <input type="submit" name="inscription" value="Inscription">
    </form>
    <?php
         
    ?>
    </body>
</html>