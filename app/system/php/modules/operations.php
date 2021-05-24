<?php

function CreateDb($db_name, $db_hostname, $db_user, $db_password, $db_prefix, $user_name, $user_password, $user_email){

	try{
		$conn = new PDO("mysql:dbname={$db_name};host={$db_hostname}","{$db_user}","{$db_password}"); 
		$connection_db =  true;
	}catch (Exception $e) {
		$connection_db = false;
	}

	$db_validation_cont = 0;

	if($connection_db == true){


		$user = $conn->prepare("CREATE TABLE IF NOT EXISTS {$db_prefix}_user(
			id INT AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(55),
			login VARCHAR(55),
			password VARCHAR(55),
			email VARCHAR(155),            
			permission VARCHAR(55),
			registrationdate DATETIME, 
			lastacess VARCHAR(55),
			colortheme VARCHAR(100),
			status VARCHAR(10)
		) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");

		$user->execute();
		if($user->execute()){ $db_validation_cont++; }


		$card = $conn->prepare("CREATE TABLE IF NOT EXISTS {$db_prefix}_card(
			id INT AUTO_INCREMENT PRIMARY KEY,
			id_user INT, 
			text_front VARCHAR(800),
			text_back VARCHAR(800),          
			status VARCHAR(10)
		) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");

		$card->execute();
		if($card->execute()){ $db_validation_cont++; }

	}

}

?>