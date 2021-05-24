<!DOCTYPE html>
<html>
<head>
	  <title>UpCard: Install</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='robots' content='noindex,follow' />
	  <link rel="sortcut icon" href="app/images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="app/system/css/style_install.css">
</head>
<body>
    
    <?php
       
       $system_install = false;

       if($system_install == false){
           include("app/system/page_install.php");
       }else{
           header('Location: ./');
       }

    ?>

</body>
</html>