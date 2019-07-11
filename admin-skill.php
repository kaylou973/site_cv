<?php require_once('public/inc/admin.header.inc.php'); ob_start(); ?>
<?php $r = execute_requete("SELECT * FROM skills");?>

    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4">COMPETENCE</h1><hr><br>
        
        <button type="button" class="btn btn-outline-secondary">
            <a href="?skil=ajouter">Ajout d'une Nouvelle compétence</a>
        </button><br>

        <?php
        //----------------------------
        //Suppression des compétences
        if (isset($_GET['skil']) && $_GET['skil'] == 'supprimer') {

            execute_requete("DELETE FROM skills WHERE id_skills= '$_GET[id_skills]' ");

            header('location:admin-skill.php');
        }

        //----------------------------
        //Affichage des compétences
        $r = execute_requete("SELECT * FROM skills");
        // debug($r);

        $content .= '<table class="table">';
        $content .= '<thead class="thead-dark">';
        $content .= '<tr>';
        for ($i = 0; $i < $r->columnCount(); $i++) {
            $colonne = $r->getColumnMeta($i);
            // debug($colonne);

            $content .= "<th>$colonne[name]</th>";

        }

        $content .= '<th colspan="2">Edit</th>';
        $content .= '</tr>';
        $content .= '</thead>';

        $content .= '<tbody>';
        while ($skill = $r->fetch(PDO::FETCH_ASSOC)) { //TANT QU'IL y a des 'skills' 
            //FETCH() : permet d'exploiter les données 

            $content .= '<tr>';
            foreach ($skill as $indice => $value) {

                $content .= "<td>$value</td>";
            }

            $content .= '<td><a href="?skil=modifier&id_skills=' . $skill['id_skills'] . '">Modif</a></td>';
            $content .= '<td><a href="?skil=supprimer&id_skills=' . $skill['id_skills'] . '" onClick="return( confirm(\'En êtes vous sur ?\'))">Supp</a></td>';

            $content .= '</tr>';
        }
        $content .= '</tbody>';
        $content .= '</table>';


        //----------------------------
        ?>
        <?= $content; ?>

             <?php
        //-----------------------------------------------------------------------
        if (!empty($_POST)) {

            foreach ($_POST as $key => $skill) {

                $_POST[$key] = htmlentities(addslashes($skill));
            }

            //-----------------------------------------------------------
            if (isset($_GET['skil']) && $_GET['skil'] == 'modifier') {
                //si il existe une 'skil' dans mon URL ET que cette 'skil' est égale à 'modifier'

                execute_requete("UPDATE skills SET 
                    name='$_POST[name]', 
                    level='$_POST[level]'
                    WHERE id_skills='$_GET[id_skills]'");

                header('location:admin-skill.php');
            } else {

                execute_requete("INSERT INTO skills(name, level) VALUES('$_POST[name]', '$_POST[level]')");

                header('location:admin-skill.php');
            }
        }

        if (isset($_GET['skil']) && $_GET['skil'] == 'modifier') {
            $r = execute_requete("SELECT * FROM skills WHERE id_skills ='$_GET[id_skills]'");

            $skills = $r->fetch(PDO::FETCH_ASSOC);
        }

        $name=(isset($skills['name'])) ? $skills['name'] : '';
        $level=(isset($skills['level'])) ? $skills['level'] : '';
        
        ?>

        <?php
        if (isset($_GET['skil']) && ($_GET['skil'] == 'modifier' || $_GET['skil'] == 'ajouter')) :
            //Si on a une 'skil' dans l'URL ET que cette 'skil' est égale soit à 'update' OU à 'add'


            ?>
            <form method="POST">
                <label for="name">Ecole</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $name ?>"><br>

                <label for="level">Niveau d'étude</label>
                <input type="text" class="form-control" name="level" id="level" value="<?= $level ?>"><br>

                <input type="submit" value="<?php echo ucfirst($_GET['skil']) ?>" class="btn btn-secondary">
            </form>

        <?php endif; ?>
    </div>


<?php require_once('public/inc/admin.footer.inc.php'); ?>