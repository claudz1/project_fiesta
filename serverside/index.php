<?php
  session_start();
  
  
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>After Login</title>

<link rel="stylesheet" href="css/stylelogin.css"/>

</head>
<body>
    
    
    

<div id="container">
    <!--top section start-->
    

    

    <div id="wrapper">
         <div class="user_intro"><h1>Welcome <?php echo $_SESSION['UNAME'];?></h1></div>
    </div>

    <!--fotter section start-->
    <button type="button"><a href="logout.php">Logout</a></button>
</div>
    
    
<!--END FOOTER-->
    
</body>
</html>
