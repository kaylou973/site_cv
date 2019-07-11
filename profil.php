<?php require_once('public/inc/init.inc.php');
ob_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profil - admin </title>

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
            <a class="nav-link" href="<?php echo URL; ?>" target="_bank">site</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

    <section class="pricing py-5">
      <div class="container">
        <div class="row">
          <!-- Free Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Competence</h5>
                <hr>
                <a href="admin-skill.php" class="btn btn-block btn-primary text-uppercase">COMPETENCE</a>
              </div>
            </div>
          </div>
          <!-- Plus Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Expereience</h5>
                <hr>
                <a href="admin-experience.php" class="btn btn-block btn-primary text-uppercase">EXPERIENCE</a>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Formation</h5>
                <hr>
                <a href="admin-formation.php" class="btn btn-block btn-primary text-uppercase">FORMATION</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- script Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php ob_flush(); ?>