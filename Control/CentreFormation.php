<?php
class centreFormation {
	function __construct($centreFormation){
		$this->centreFormation = $centreFormation;
	}

	function afficher(){
		$centreFormations = $this->centreFormation->findAll();
		return [
			'title'=>'Centre de formation',
			'contenu'=>'CentreFormation.htm.php',
			'variables'=>[
				'centreFormations'=>$centreFormations
			]
		];
	}
	function ajouter(){}
	function modifier(){}
	function supprimer(){}
}
?>