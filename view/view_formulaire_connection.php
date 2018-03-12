<!DOCTYPE html>
<html>
  <head>
    <title>Webzine</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">    
  </head>
  <!--titre-->
  <h3 align="center">Bienvenue!! Connecte toi</h3><br> 
  <div style="display:flex; justify-content:center">
    <p style="margin: 10px">Oups, tu t'es perdu.e?</p>
    <a href="../index.php" role="button" class="btn btn-outline-secondary">retourner sur le site</a>
  </div>

<!--Connection-->
  <section class="add-form container-fluid row">
    <div class="col-md-4"></div>

    <form class="form-zone col-md-4" action="" method="POST">

      <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input class="form-control" type="text" name="pseudo" id="pseudo">
      </div>

      <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input class="form-control" type="password" name="mdp" id="mdp">
      </div>

      <div class="form-group">
        <button class="btn btn-dark" type="submit" name="submit">Go!</button>
        <a href="./inscription.php" role="button" class="btn btn-outline-secondary">Pas de compte? Pas de prob et clic ici!</a>
      </div>
    </form>

    <div class="col-md-4"></div>
  </section>
<!--Message d'erreur en cas de mauvaise entrée-->
  <h6 align="center" style="color: darkred">
    <?php
      if (isset($_GET['message'])) {
      echo $_GET['message'];
      }
    ?>
  </h6>

<!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


</body>
</html>