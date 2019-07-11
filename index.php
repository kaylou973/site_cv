<?php

require_once 'Autoload.php';

$controller = new controller\ControllerUser();

$controller->handleRequest();

$controller = new controller\ControllerSkills();

$controller->handleRequest();

$controller = new controller\ControllerExperience();

$controller->handleRequest();

$controller = new controller\ControllerFormation();

$controller->handleRequest();

$controller = new controller\ControllerProjects();

$controller->handleRequest();
