<!DOCTYPE html>
<html>
<head>
	  <title>UpCard: Login</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='robots' content='noindex,follow' />
	  <link rel="sortcut icon" href="app/images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="app/system/css/style_login.css">
</head>
<body>
    
    <?php
       
       $validate_login = false;
       $system_install = false;

       if($system_install == true){

           if($validate_login == true){
               header('Location: ./');
           }else{
               include("app/system/page_login.php");
           }

       }else{
           header('Location: install');
       }

    ?>

</body>
</html>