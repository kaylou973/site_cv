<?php require_once('public/inc/connexion.header.inc.php');
ob_start(); ?>

<?php

//--------------- 
//DECONNEXION
//---------------
if (isset($_GET['deco']) && $_GET['deco'] == 'deconnexion') {
    /** 
     * si il y a une action 'deconnexion' est détecté dans l'URL 
     * que celle-ci est égale à 'déconnexion', alors on détruit la session
     */

    session_destroy();
    header('location:index.php');
    exit();
}

//----------------
//CONNEXION
//----------------

if (userConnect()) {
    /**
     * une fois connecté on se redirige vers le profil admin pour tout modif.
     * pas besoin de verifie si l'utilisateur est admin vue qu'il y aura qu'un utilisateur
     */

    header('location:profil.php');
    exit();
}
//---------------------------------------------------------------------
if ($_POST) {
    $result = execute_requete("SELECT * FROM user WHERE username = '$_POST[username]' ");
    //Si il y a une correspondance d'un username dans la table 'user', $result renverra '1' ligne de résultat

    if ($result->rowCount() >= 1) {
        $user = $result->fetch(PDO::FETCH_ASSOC);
        // debug($user);
        // debug($_POST);

        //Vérification du mot de passe : si le mot de passse est correct, renseigne des informations dans notre fichier de session
        if (password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user']['id_user'] = $user['id_user'];
            $_SESSION['user']['username'] = $user['username'];
            $_SESSION['user']['password'] = $user['password'];
            $_SESSION['user']['firstname'] = $user['firstname'];
            $_SESSION['user']['lastname'] = $user['lastname'];

            //Redirection vers la page profil :
            header('location:profil.php');
            ob_end_flush();
        } else {
            $content .= '<div class="alert alert-danger" role="alert">Erreur password</div>';
        }
    } else {
        $content .= '<div class="alert alert-danger" role="alert">Erreur username</div>';
    }
}
?>

<?= $content ?>

<!-- ============================================================================== -->
<div class="containe">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome back!</h3>
                                <form method="POST">
                                <div class="form-label-group">
                                    <input type="text"  name="username" id="username" class="form-control" placeholder="username" required autofocus>
                                    <label for="username">Username</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="password" name="password"  class="form-control" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                                </form>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('public/inc/connexion.footer.inc.php'); ?>