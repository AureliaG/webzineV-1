<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Webzine</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">
		<!-- jQuery library -->
  		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>

		<!-- marge de gauche-->	
		<?php
		require 'marge_gauche.php';
		?>

		<!-- header-->
		<?php
		require 'header.php';
		?>

		<?php
		require 'main_articles.php';
		?>
			
		</div> <!-- fin header col-md-8-->
		
	</div> <!-- fin row marge_gauche-->

</html>