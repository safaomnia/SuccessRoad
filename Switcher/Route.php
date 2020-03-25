<?php
class Route {
	public function __construct() {
		include __DIR__ . '/../Model/DatabaseConnection.php';
		include __DIR__ . '/../Model/DatabaseTable.php';
		include __DIR__ . '/../Control/Utilisateur.php';
		include __DIR__ . '/../Control/CentreFormation.php';
		$this->utilisateurTable = new DatabaseTable($pdo, 'utilisateur', 'NCIN');
		$this->centreFormationTable = new DatabaseTable($pdo, 'centre_formation', 'CleCentre');
	}

	public function getRoutes(){
		
		$utilisateurController = new utilisateur($this->utilisateurTable);
		$centreFormationController = new centreFormation($this->centreFormationTable);

		$routes = [
			'' => [
				'GET' => [
					'controller' => $utilisateurController,
					'method' => 'home'
				]
			],
			'home' => [
				'GET' => [
					'controller' => $utilisateurController,
					'method' => 'home'
				]
			],
			'centreformation' => [
				'GET' => [
					'controller' => $centreFormationController,
					'method' => 'afficher'
				]
			],
			'connexion' => [
				'GET' => [
					'controller' => $utilisateurController,
					'method' => 'home'
				],
				'POST' => [
					'controller' => $utilisateurController,
					'method' => 'authentifier'
				]
			],
			'connexion/erreur' => [
				'GET' => [
					'controller' => $utilisateurController,
					'method' => 'erreur'
				]
			]
		];
		return $routes;
	}
	public function getAuthentification(){
		return false;
	}

}