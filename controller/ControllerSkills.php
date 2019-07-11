<?php

namespace controller;

class ControllerSkills{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepositorySkil;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$skil = isset( $_GET['skil'] ) ? $_GET['skil'] : NULL;

		try{
			if( !$skil || $skil == 'list'){
				$this->listSkills();
			}
			else{
				$this->showError("Page not found", "Page for operation ". $skil ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listSkills(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$skills = $this->db->selectAll($orderby);

		include 'view/skills/skills.php';
	}
	
}