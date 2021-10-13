<?php


@$operation = $_POST['op'];

include("app/system/php/modules/operations.php");

if($operation == "login"){

	header("Location: ./");
	
}elseif($operation == "quit"){

	header("Location: ./");
	
}elseif($operation == "user_create"){

	header("Location: ./");
	
}elseif($operation == "user_edite"){

	header("Location: ./");
	
}elseif($operation == "user_delete"){

	header("Location: ./");
	
}elseif($operation == "group_create"){

	header("Location: ./");
	
}elseif($operation == "group_edite"){

	header("Location: ./");
	
}elseif($operation == "group_delete"){

	header("Location: ./");
	
}elseif($operation == "create_card"){

	header("Location: ./");
	
}elseif($operation == "create_edite"){

	header("Location: ./");
	
}elseif($operation == "create_delete"){
	
	header("Location: ./");

}elseif($operation == "install"){
	
	header("Location: ./");

}else{
	header("Location: ./");
}

?>