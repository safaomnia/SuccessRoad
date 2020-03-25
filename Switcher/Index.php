<?php 
try {
	include  __DIR__ . '/Entry.php';
	include  __DIR__ . '/Route.php';
	if(isset($_GET['route'])) $route = strtolower($_GET['route']);
	else $route = "";
	$entry = new Entry($route ,$_SERVER['REQUEST_METHOD'],new Route());
	$entry->run();
}
catch (PDOException $e) {
	echo 
	'<script>
		alert("Base de données Inconnue:\nVérifier le base !!\n'.$e->getMessage().'")
	</script>';
} 
?>