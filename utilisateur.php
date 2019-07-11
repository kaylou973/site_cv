<?php require_once('public/inc/header.inc.php');?>

<?php

if( $_POST ){//Si on clique sur le button 'submit'

    // debug($_POST);


    // Déclaratiopn d'une variable :
    $erreur='';

    if ( strlen($_POST['username'])<=3|| strlen($_POST['username'])>=20){// si le pseudo est inférieure ou égal à 3 OU qu'il est supérieur à 20
        
        $erreur .='<div class="alert alert-danger" role="alert">Erreur taille pseudo</div>';
    }
    //Test si le pseudo est disponible, si le pseudo renvoie au moins 1 résultat, c'est que le pseudo est déjà attribué

    $r = execute_requete("SELECT * FROM user WHERE username = '$_POST[username]' ");

    if( $r->rowCount() >=1){
        $erreur .= '<div class="alert alert-danger" role="alert">Pseudo Indisponible</div>';

    }
    //Boucle sur les saisies afin de les passer dans la fonction addslashes() :
    foreach($_POST as $key => $value){

            $_POST[$key] = addslashes($value);

    }

    //Cryptage du mot de passe :
    $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if(empty($erreur)){
        execute_requete("INSERT INTO user(username, password, firstname, lastname ) VALUES ('$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[lastname]') ");

        echo '<div class="alert alert-success" role="alert">Inscription validée ! <a href="'.URL.'">Cliquez ici pour vous connecter</a></div>';
    }
    //Affiche des erreurs:
    $content .=$erreur;

}
?>

<h1>Inscription</h1>

<?= $content ?>


<form method="post">
    <label for="username">username</label><br>
    <input type="text" name="username" id="username" class="form-conrol">
    <br>
    <label for="password">Mot de passe</label><br>
    <input type="text" name="password" id="password" class="form-conrol">
    <br>
    <label for="firstname">firstname</label><br>
    <input type="text" name="firstname" id="firstname" class="form-conrol">
    <br>
    <label for="lastname">lastname</label><br>
    <input type="text" name="lastname" id="lastname" class="form-conrol">
    <br>
    
    <input type="submit" class="btn btn-secondary" value="S'inscrire">

</form>

<?php require_once('public/inc/footer.inc.php');?>