<?php require_once('public/inc/admin.header.inc.php'); ob_start(); ?>
<?php $r = execute_requete("SELECT * FROM formation");?>

    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4">FORMATION</h1><hr><br>
    

        <button type="button" class="btn btn-outline-secondary">
            <a href="?form=ajouter">Ajout d'une Nouvelle formation</a>
        </button><br>

        <?php
        //--------------------------
        //Suppression des formations
        if (isset($_GET['form']) && $_GET['form'] == 'supprimer') {
            // $r = execute("SELECT * FROM formation WHERE id_formation ='$_GET[id_formation]'");
            //Ici, je récupere les infos de l'article à supprimer

            execute_requete("DELETE FROM formation WHERE id_formation= '$_GET[id_formation]' ");

            header('location:admin-formation.php');
        }
        ?>

        <!-- ----------------------------------------------------------------------------- -->

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <?php
                    for ($i = 0; $i < $r->columnCount(); $i++) {
                        // debug($r);

                        $colonne = $r->getColumnMeta($i);
                        ?>
                        <th scope="col">
                            <?php
                            echo $colonne['name'];
                            // debug($colonne);
                            ?>
                        </th>
                    <?php } ?>
                    <th colspan="2">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($formations = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <?php foreach ($formations as $key => $formation) : ?>
                            <th>
                                <?php echo $formation; ?>
                            </th>

                        <?php endforeach; ?>
                        <td>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="?form=supprimer&id_formation=<?php echo $formations['id_formation'] ?>" style="color:grey;">
                                    Supp
                                </a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="?form=modifier&id_formation=<?php echo $formations['id_formation'] ?>" style="color:grey;">
                                    Modif
                                </a>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
        //-----------------------------------------------------------------------
        if (!empty($_POST)) {

            foreach ($_POST as $key => $formation) {

                $_POST[$key] = htmlentities(addslashes($formation));
            }

            //-----------------------------------------------------------
            if (isset($_GET['form']) && $_GET['form'] == 'modifier') {
                //si il existe une 'form' dans mon URL ET que cette 'form' est égale à 'modifier'

                execute_requete("UPDATE formation SET 
                    school='$_POST[school]', 
                    level='$_POST[level]', 
                    speciality='$_POST[speciality]', 
                    year='$_POST[year]'
                    WHERE id_formation='$_GET[id_formation]'");

                header('location:admin-formation.php');
            } else {

                execute_requete("INSERT INTO formation(school, level, speciality, year) VALUES('$_POST[school]', '$_POST[level]', '$_POST[speciality]', '$_POST[year]')");

                header('location:admin-formation.php');
            }
        }

        if (isset($_GET['form']) && $_GET['form'] == 'modifier') {
            $r = execute_requete("SELECT * FROM formation WHERE id_formation ='$_GET[id_formation]'");

            $formations = $r->fetch(PDO::FETCH_ASSOC);
        }

        $school=(isset($formations['school'])) ? $formations['school'] : '';
        $level=(isset($formations['level'])) ? $formations['level'] : '';
        $speciality=(isset($formations['speciality'])) ? $formations['speciality'] : '';
        $year=(isset($formations['year'])) ? $formations['year'] : '';
        ?>

        <?php
        if (isset($_GET['form']) && ($_GET['form'] == 'modifier' || $_GET['form'] == 'ajouter')) :
            //Si on a une 'form' dans l'URL ET que cette 'form' est égale soit à 'update' OU à 'add'


            ?>
            <form method="POST">
                <label for="school">Ecole</label>
                <input type="text" class="form-control" name="school" id="school" value="<?= $school ?>"><br>

                <label for="level">Niveau d'étude</label>
                <input type="text" class="form-control" name="level" id="level" value="<?= $level ?>"><br>

                <label for="speciality">Spécialité / Orientation</label>
                <input type="text" class="form-control" name="speciality" id="speciality" value="<?= $speciality ?>"><br>

                <label for="year">Année</label>
                <input type="text" class="form-control" name="year" id="year" value="<?= $year ?>"><br>

                <input type="submit" value="<?php echo ucfirst($_GET['form']) ?>" class="btn btn-secondary">
            </form>

        <?php endif; ?>
    </div>

<?php require_once('public/inc/admin.footer.inc.php'); ?>


