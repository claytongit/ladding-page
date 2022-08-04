<?php 
	session_start();	
	function connect()
	{
		try {
			$pdo = new PDO('mysql:host=sql206.epizy.com;dbname=epiz_32201959_security;charset=utf8', 'epiz_32201959', 'ANtk1XrAToHo');
			return $pdo;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	$sql  = "INSERT INTO ip (session) VALUES ('". session_id() ."')";
	$pdo  = connect();
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	
	header('Location: /home.html');
?>