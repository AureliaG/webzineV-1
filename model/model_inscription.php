<?php
//INSCRIPTION NOUVEAU MEMBRE
function addMember() {

  if (isset($_POST['submit'])) {


    $pseudo = htmlspecialchars(strtolower($_POST['pseudo']));
    $email = htmlspecialchars(strtolower($_POST['email']));
    $email2 = htmlspecialchars(strtolower($_POST['email2']));
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
 	//$role 

    if (isset($pseudo, $email, $email2, $mdp, $mdp2)) {

      $pseudolength = strlen($pseudo);

      if ($pseudolength <= 15) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

          if ($email == $email2) {

            $mdplength = strlen($_POST['mdp']);

            if ($mdplength >= 6) {

              if ($mdp == $mdp2) {
                $sql = 'SELECT * FROM users WHERE email = ?';

                $reqmail = connectionDb($sql);
                $reqmail->execute(array($email));
                $mailexist = $reqmail->rowCount();

                if ($mailexist == 0) {

                  $sql = 'SELECT * FROM users WHERE pseudo = ?';

                  $reqpseudo = connectionDb($sql);
                  $reqpseudo->execute(array($pseudo));
                  $pseudoexist = $reqpseudo->rowCount();

                  if ($pseudoexist == 0) {

                    $sql = 'INSERT INTO users (pseudo, password, email) VALUES (?, ?, ?)';

                    $statement = connectionDb($sql);

                    $statement->execute(array($pseudo, $mdp, $email));

                    $formMessage = "<h6 align =\"center\" style=\"color: green\">Bien enregistré! Tu peux maintenant écrire des articles et accéder au forum!</h6>";


                  } else {
                    $formMessage = "Déso, ce pseudo est déjà pris!";
                  }


                } else {
                  $formMessage = "Tu es déjà inscrit avc cette adresse, connecte toi pour nous donner de l'amour ;)";
                }

              } else {
                $formMessage = "Oups!! T'es deux mots de passe sont différents";
              }

            } else {
              $formMessage = "Sécurité, sécurité, sécurité!!! Ton mot de passe doit faire plus de 6 caractères";
            }

          } else {
            $formMessage = "Oups!! T'es deux adresses mails sont différentes";
          }

         } else {
         $formMessage = "ts, ts, tss, rentre une adresse mail correcte! ";
       }

      } else {
        $formMessage = "Wowwww ton pseudo est trop long!! moins de 15 caractères s'il te plait!";
      }

    } else {
      $formMessage = "Ne sois pas timide, remplis tous les champs ;)";
    }
    header('location: ./inscription.php?message=' . $formMessage);
  }
}

//CONNEXION MEMBRE
function signIn() {

  session_start();

  if (isset($_POST['submit'])) {

    $pseudo = htmlspecialchars(strtolower($_POST['pseudo']));
    $mdp = sha1($_POST['mdp']);

    if (isset($pseudo, $mdp)) {

      $sql = 'SELECT * FROM users WHERE pseudo = ? AND password =  ?';

      $statement = connectionDb($sql);
      $statement->execute(array($pseudo, $mdp));
      $userexist = $statement->rowCount();

      if ($userexist == 1) {

        $userData = $statement->fetch();
        $_SESSION['id'] = $userData['id'];
        $_SESSION['pseudo'] = $userData['pseudo'];
        $_SESSION['email'] = $userData['email'];

        header('location: espace_membre.php?');

      } else {

        $formMessage = "brigan!! mauvais mot de passe ou utilisateur";
        header('location: signin.php?message=' . $formMessage);

        }

    }
  }
}

//DECONNEXION MEMBRE
function signOut() {

  session_start();

  $_SESSION = array();

  session_destroy();

  header('location: ../index/signin.php');

  
  if (isset($_GET['idSignOut'])) {

          signOut();
  }
}