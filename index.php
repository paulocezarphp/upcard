<!DOCTYPE html>
<html>
<head>
	  <title>UpCard</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='robots' content='noindex,follow' />
	  <link rel="sortcut icon" href="app/images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="app/system/css/style.css">
    <link rel="stylesheet" type="text/css" href="app/system/css/style_mobile.css">
    <link rel="stylesheet" type="text/css" href="app/system/css/style_desktop.css">
    <?php include("app/system/php/modules/themes.php"); ?>
</head>
<body>
    
    <?php
       
       $system_install = false;
       $login_validate = false;

       if($system_install == true){

          if($login_validate == true){
             include("app/system/page_home.php");
          }else{
             header('Location: login');
          }
          
       }else{
          header('Location: install');
       }

    ?>

</body>
</html>