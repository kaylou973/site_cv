<?php

namespace controller;

class ControllerProjects{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepositoryPro;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$pro = isset( $_GET['pro'] ) ? $_GET['pro'] : NULL;

		try{
			if( !$pro || $pro == 'list'){
				$this->listProjects();
			}
			// elseif( $pro == 'show'){
			// 	$this->showProject();
            // }
			else{
				$this->showError("Page not found", "Page for operation ". $pro ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listProjects(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$projects = $this->db->selectAll($orderby);

		include 'view/projects/projects.php';
	}
	//-------------------------------------------------
	// public function showProject(){

	// 	$id = isset($_GET['id']) ? $_GET['id'] : NULL;

	// 	if( ! $id ){

	// 		throw new Exception('Internal error.');
	// 	}
	// 	$project = $this->db->select($id);

	// 	include 'view/projects/project.php';
    // }
}