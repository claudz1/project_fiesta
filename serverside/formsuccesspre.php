<html>
    <head>
        <script src="jquery-1.11.2.js"></script>
        <link rel="stylesheet" href="presuccess/success-css.css" type="text/css" />
    </head>
    
        <body>	
   
    </body>
</html>
<?php
session_start();
###### db ##########
$db_username = 'root';
$db_password = '';
$db_name = 'demo';
$db_host = 'localhost';

################
$name=$_REQUEST['name'];

$user=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$tel=$_REQUEST['phone'];
$gen=$_REQUEST['dropdown'];

if (isset($_POST['date']))
     {
    $date=$_REQUEST['date'];
    
     }
$date=date("Y-m-d h:i:s",strtotime($date));

if(isset($_POST['register'])){
    $enter=mysqli_query($connecDB,"SELECT username FROM registeruser WHERE username='".$_POST['username']."'");
        if(mysql_num_rows($enter) >0){
            echo '<b>username Already Used.</b>';
        }
        }

$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');       
mysqli_query($connecDB,"insert into `registeruser` values('NULL','".$name."','".$user."','".$date."','".$email."','".$pass."','".$tel."','".$gen."')");

$idname= mysqli_insert_id($connecDB);


mysqli_query($connecDB,"insert into `login1` values('NULL','".$user."','".$pass."')");
echo"<h1>REGISTRATION CONFIRMED </h1><br>";
echo"<h1 id=reg><a href=login.php>you can<b>login</b>now....</a><h1>";


      
     
        
        mysqli_close($connecDB);
?>

