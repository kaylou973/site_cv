<?php

namespace controller;

class ControllerUser{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepository;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$op = isset( $_GET['op'] ) ? $_GET['op'] : NULL;

		try{
			if( !$op || $op == 'list'){
				$this->listUsers();
			}
			// elseif( $op == 'show'){
			// 	$this->showUser();
			// }
			else{
				$this->showError("Page not found", "Page for operation ". $op ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listUsers(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$users = $this->db->selectAll($orderby);

		include 'view/users/users.php';
	}
	//-------------------------------------------------
	// public function showUser(){

	// 	$id = isset($_GET['id']) ? $_GET['id'] : NULL;

	// 	if( ! $id ){

	// 		throw new Exception('Internal error.');
	// 	}
	// 	$user = $this->db->select($id);

	// 	include 'view/admin/users/user.php';
	// }
}