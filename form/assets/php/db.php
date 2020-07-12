<?php
	$config = ["driver" => "mysql",
						 "host" => "localhost",
					 	 "db" => "form",
					 	 "charset" => "UTF8",
				 		 "user" => "root",
						 "password" => ""];

	$option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	$pdo = new PDO(
		sprintf(
				'%s:host=%s;dbname=%s;charset=%s',
				$config['driver'],
				$config['host'],
				$config['db'],
				$config['charset']
		),
		$config['user'],
		$config['password'],
		$option
	);
?>
