<?php
session_start();
include_once('inc/dbConnect.inc.php');
$message=array();
if(isset($_POST['uname']) && !empty($_POST['uname'])){
    $uname=mysqli_real_escape_string($con,$_POST['uname']);
}else{
    $message[]='Please enter username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysqli_real_escape_string($con,$_POST['password']);
}else{
    $message[]='Please enter password';
}

$countError=count($message);

if($countError > 0){
     for($i=0;$i<$countError;$i++){
              echo ucwords($message[$i]).'<br/><br/>';
     }
}else{
    $query="select * from login1 where username='$uname' and password='$password'";

    $res=mysqli_query($con,$query);
    $checkUser=mysqli_num_rows($res);
    if($checkUser > 0){
         $_SESSION['LOGIN_STATUS']=true;
         $_SESSION['UNAME']=$uname;
         echo 'correct';
    }else{
         echo ucwords('please enter correct user details');
    }
    
}
?>

