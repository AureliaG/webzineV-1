<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire administrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">   
  <!-- jquerry JavaScript -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 
  </head>
  <header>
    <h3 align="center">Ajout d'articles dans la base de donnée</h3><br>
    <div style="display:flex; justify-content:center">
      <a href="page_admin.php" role="button" class="btn btn-outline-secondary">retouner sur la page administrateur</a>
    </div>
    <div style="display:flex; justify-content:center">
      <a href="./index.php" role="button" class="btn btn-outline-secondary">retourner sur le site</a>
    </div>
  </header>
  <body>
    <!--Formulaire articles-->
    <section class="add-form container-fluid row">
      <div class="col-md-4"></div>

      <form class="form-zone col-md-4" action="" method="POST">

        <div class="form-group">
          <label for="titre">Titre</label>
          <input class="form-control" type="text" name="titre" id="titre">
        </div>

        <div class="form-group">
          <label for="chapo">Chapo</label>
          <input class="form-control" type="text" name="chapo" id="chapo">
        </div>

        <div class="form-group">
          <label for="auteur">Auteur</label>
          <input class="form-control" type="text" name="auteur" id="auteur">
        </div>

        <div class="form-group">
          <label for="rubrique">Rubrique</label>
          <input class="form-control" type="text" name="rubrique" id="rubrique">
        </div>

        <div class="form-group">
          <label for="article">Article</label>
          <textarea rows="20" cols="60" name="article" id="article">
          </textarea>
        </div>

        <div class="form-group">
          <label for="nom_photo">Nom de la photo de l'article</label>
          <input class="form-control" type="text" name="nom_photo" id="nom_photo"">
        </div>

        <div class="form-group">
          <label for="path_photo">Photos</label>
          <input class="form-control" type="text" name="path_photo" id="path_photo">
        </div>

        <div class="form-group">
          <button class="btn btn-dark" type="submit" name="submit" id="submit">Go!</button>
        </div>
      </form>

      <div class="col-md-4"></div>
    </section>


<!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>