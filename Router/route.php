<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/ManageController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/ManageListController.php";



$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);
$route->get("/manage", [ManageController::class, 'manage']);
$route->get("/manageList", [ManageListController::class, 'manageList']);
$route->get("/manage-user", [UserController::class, 'manageUser']);


$route->get("/managelist", [ManageListController::class, 'manageList']);

$route->route();