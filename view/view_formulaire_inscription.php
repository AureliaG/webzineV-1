<!DOCTYPE html>
<html>
  <head>
    <title>Inscription Webzine</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">
    <link rel="stylesheet" href="./css/style_membre.css">    
  </head>
  <body>
    <!--Titre-->
    <h3 align="center">Salut! Inscris toi pour participer à la vie du site</h3><br>
    <div id="placement_bouton">
      <p id="placement_bouton_perdu">Oups, tu t'es perdu.e?</p>
      <a href="index.php" role="button" class="btn btn-outline-secondary">retourner sur le site</a>
    </div>

  <!--Formulaire inscription-->
    <section class="add-form container-fluid row">
      <div class="col-lg-4 col-sm-2"></div>

      <form class="form-zone col-lg-4 col-sm-8" action="" method="POST">

        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input class="form-control" type="text" name="pseudo" id="pseudo">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" id="email">
        </div>

        <div class="form-group">
          <label for="email2">Confirme ton adresse email</label>
          <input class="form-control" type="email" name="email2" id="email2">
        </div>

        <div class="form-group">
          <label for="mdp">Choisis ton mot de passe</label>
          <input class="form-control" type="password" name="mdp" id="mdp">
        </div>

        <div class="form-group">
          <label for="mdp2">Confime ton mot de passe</label>
          <input class="form-control" type="password" name="mdp2" id="mdp2">
        </div>

        <div class="form-group">
          <button class="btn btn-dark" type="submit" name="submit">Go!</button>
          <a href="connection_membre.php" role="button" class="btn btn-outline-secondary">Déjà inscrit? Clic ici!</a>
        </div>
      </form>

      <div class="col-lg-4 col-sm-2"></div>
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
<!-- Bootstrap JavaScript 
  <script src=“https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js”></script> -->

</body>
</html>