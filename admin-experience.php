<?php require_once('public/inc/admin.header.inc.php'); ob_start(); ?>
<?php $r = execute_requete("SELECT * FROM experience");?>

    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4">EXPERIENCE</h1><hr><br>

        <button type="button" class="btn btn-outline-secondary">
            <a href="?act=ajouter">Ajout d'une nouvelle expérience</a>
        </button><br>

        <?php
        //--------------------------
        //Suppression des experiences
        if (isset($_GET['act']) && $_GET['act'] == 'supprimer') {
            // $r = execute("SELECT * FROM experience WHERE id_experience ='$_GET[id_experience]'");
            //Ici, je récupere les infos de l'article à supprimer

            execute_requete("DELETE FROM experience WHERE id_experience= '$_GET[id_experience]' ");

            header('location:admin-experience.php');
        }
        ?>

        <!-- ----------------------------------------------------------------------------- -->

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <?php
                    for ($i = 0; $i < $r->columnCount(); $i++) {

                        $colonne = $r->getColumnMeta($i);
                        ?>
                        <th scope="col">
                            <?php
                            echo $colonne['name'];
                            ?>
                        </th>
                    <?php } ?>
                    <th colspan="2">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($experiences = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <?php foreach ($experiences as $key => $experience) : ?>
                            <th>
                                <?php echo $experience; ?>
                            </th>

                        <?php endforeach; ?>
                        <td>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="?act=supprimer&id_experience=<?php echo $experiences['id_experience'] ?>" style="color:grey;">
                                    Supp
                                </a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="?act=modifier&id_experience=<?php echo $experiences['id_experience'] ?>" style="color:grey;">
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

            foreach ($_POST as $key => $experience) {

                $_POST[$key] = htmlentities(addslashes($experience));
            }

            //-----------------------------------------------------------
            if (isset($_GET['act']) && $_GET['act'] == 'modifier') {
                //si il existe une 'act' dans mon URL ET que cette 'act' est égale à 'modifier'

                execute_requete("UPDATE experience SET 
                    name='$_POST[name]', 
                    years='$_POST[years]', 
                    description='$_POST[description]'
                    WHERE id_experience='$_GET[id_experience]'");

                header('location:admin-experience.php');
            } else {

                execute_requete("INSERT INTO experience(name, years, description) VALUES('$_POST[name]', '$_POST[years]', '$_POST[description]')");

                header('location:admin-experience.php');
            }
        }

        if (isset($_GET['act']) && $_GET['act'] == 'modifier') {
            $r = execute_requete("SELECT * FROM experience WHERE id_experience ='$_GET[id_experience]'");

            $experiences = $r->fetch(PDO::FETCH_ASSOC);
        }

        $name=(isset($experiences['name'])) ? $experiences['name'] : '';
        $years=(isset($experiences['years'])) ? $experiences['years'] : '';
        $description=(isset($experiences['description'])) ? $experiences['description'] : '';
        ?>

        <?php
        if (isset($_GET['act']) && ($_GET['act'] == 'modifier' || $_GET['act'] == 'ajouter')) :
            //Si on a une 'act' dans l'URL ET que cette 'act' est égale soit à 'modifier' OU à 'add'

            ?>
            <form method="POST">
                <label for="name">Expérience</label><br>
                <input type="text" class="act-control" name="name" id="name" value="<?= $name ?>"><br>

                <label for="years">Année</label><br>
                <input type="text" class="act-control" name="years" id="years" value="<?= $years ?>"><br>

                <label for="description">Description de l'activitée</label><br>
                <textarea name="description" id="description" cols="30" rows="10"><?= $description ?></textarea><br>

                <input type="submit" value="<?php echo ucfirst($_GET['act']) ?>" class="btn btn-secondary">
            </form>

        <?php endif; ?>
    </div>


<?php require_once('public/inc/admin.footer.inc.php'); ?>