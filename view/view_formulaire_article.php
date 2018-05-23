<!DOCTYPE html>  
<html> 
  <head>
    <title>Webzine</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<input type="hidden" name="_next" value="http://localhost/webzine_de_lamour/succes_formulaire_article.php/"/>  
  </head>
  <body>
	<section class="add-form container-fluid">
	<div class="row">
	  	<div class="col-md-4"></div>
	  	<div class="col-lg-4 col-sm-12">
	  		<form class="form-zone" method="POST" action="https://formspree.io/
	garnier.aurelia.emeline@gmail.com">
		  	<div class="form-group">
		  	<!--rajouter attribut for pour lier label et imput-->
			    <label>Ton nom ou ton prénom ou le nom de ton chien, bref ton nom d'auteur</label>
			    <input class="form-control" name="nom" placeholder="Josée">
		  	</div>
		  	<div class="form-group">
			    <label>On reste en contact? Laisse-moi ton mail</label>
			    <input class="form-control" name="email" placeholder="ton@mail.com">
			    <small id="emailHelp" class="form-text text-muted">Promis juré craché, on donnera pas ton aresse au FBI</small>
		  	</div>
		  	<div class="form-group">
			    <label>Ecrit le chapô de ton article</label>
			    <input class="form-control" name="chapo" placeholder="chapi chapi chapo">
			    <small id="emailHelp" class="form-text text-muted">Résume le sujet de ton article en une ou deux phrases</small>
		  	</div>
		  	<div class="form-group">
			    <label>Écris avec ton coeur, tes tripes mais surtout avec tes mains</label>
			    <textarea rows="20" cols="30" class="form-control"  name="message"> </textarea>		    
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<a href="espace_membre.php">Revenir sur l'espace membre</a>
	  	</div>
		
		<div class="col-md-4"></div>
		</div>
	</section>	

</body>
</html>