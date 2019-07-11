<?php

namespace controller;

class ControllerFormation
{


    private $db;
    public function __construct()
    {

        $e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\EntityRepositoryForm;
    }
    //-------------------------------------------------
    public function redirect($location)
    {

        header('Location:' . $location);
    }

    //-------------------------------------------------
    public function handleRequest()
    {

        $form = isset($_GET['form']) ? $_GET['form'] : NULL;

        try {
            if (!$form || $form == 'list') {
                $this->listFormations();
            // }elseif ($form == 'show') {
            //     $this->showFormation();
            }else {
                $this->showError("Page not found", "Page for operation " . $form . " was not found.");
            }
        } catch (Exception $e) {

            $this->showError("Application error", $e->getMessage());
        }
    }
    //-------------------------------------------------
    public function listFormations()
    {

        $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

        $formations = $this->db->selectAll($orderby);

        include 'view/formation/formations.php';
    }
    //-------------------------------------------------
    // public function showFormation()
    // {

    //     $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    //     if (!$id) {

    //         throw new Exception('Internal error.');
    //     }
    //     $formation = $this->db->select($id);

    //     // include 'view/formation/formation.php';
    // }
}
