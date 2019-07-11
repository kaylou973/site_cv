<?php require_once('init.inc.php'); ob_start(); ?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <!-- Lien css  -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-admin.css">

    <!-- Lien CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="connexion.php?action=site">
                <img src="public/img/logo-Retour.png" alt="" style="height: 55px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-skill.php">Compétence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-experience.php">Expérience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-formation.php">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php?deco=deconnexion">Déconnexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL ?>" target="_blank">site</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
