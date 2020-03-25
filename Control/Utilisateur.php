<?php
class utilisateur {
	function __construct($utilisateur){
		$this->utilisateur = $utilisateur;
	}
	
	function authentifier(){
		$user = $this->utilisateur->find('login',$_POST['Login']);
		if(!empty($user)) {
			$user = $user[0];
			if($user->MDP == $_POST['MDP']) {
				session_start();
				$_SESSION['id'] = $user->NCIN;
				header("Location:?route=home");
			} else {
				return [ 
					'title'=>'Login ou mdp incorrect', 
					'icon'=> 'Error.png',
					'contenu'=>'Home.htm.php',
					'variables'=>['user'=>$user] 
				];
			}
		}
	}
	function inscrire(){}
	function modifier(){}
	function supprimer(){}
	function afficher(){return [ 'title'=>'Utilisateur','icon'=>'Error.png','contenu'=>'Home.htm.php','variables'=>[] ];}
	function home(){return ['contenu'=>'Home.htm.php', 'title'=>'Succes Road','variables'=>[] ];}
	function erreur(){return ['contenu'=>'ErreurConnexion.htm', 'title'=>'Erreur d\'authentification','icon'=>'Error.png','variables'=>[] ];}
}
?>