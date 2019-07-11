<?php

namespace controller;

class ControllerExperience{
	

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepositoryExp;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location:' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$act = isset( $_GET['act'] ) ? $_GET['act'] : NULL;

		try{
			if( !$act || $act == 'list'){
				$this->listExperiences();
			// }
			// elseif( $act == 'show'){
			// 	$this->showExperience();
			}
			else{
				$this->showError("Page not found", "Page for operation ". $act ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listExperiences(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$experiences = $this->db->selectAll($orderby);

		include 'view/experience/experiences.php';
	}
	//-------------------------------------------------
	// public function showExperience(){

	// 	$id = isset($_GET['id']) ? $_GET['id'] : NULL;

	// 	if( ! $id ){

	// 		throw new Exception('Internal error.');
	// 	}
	// 	$experience = $this->db->select($id);

	// 	include 'view/experience/experience.php';
	// }
}