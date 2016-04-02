<?php
  session_start();
  if(isset($_SESSION['LOGIN_STATUS']) && !empty($_SESSION['LOGIN_STATUS'])){
      header('location:index.php');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login for premium</title>
<link rel="stylesheet" type="text/css" href="css/stylelogin.css" />
<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
<script type="text/javascript">
function validLogin(){
      var uname=$('#uname').val();
      var password=$('#password').val();

      var dataString = 'uname='+ uname + '&password='+ password;
      
      $.ajax({
      type: "POST",
      url: "processedpre.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               
               if(result=='correct'){
                     window.location='index.php';
               }else{
                     $("#errorMessage").html(result);
               }
      }
      });
}
$(window).resize(function(){
	var cf = $('#carbonForm');
	
	$('#container').css('margin-top',($(window).height()-cf.outerHeight())/2)
});
function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>
</head>
<body>
    

    
    <div id="container">
        <h1>Login</h1>
        <div class="fieldContainer">
            
            <div class="formRow">
                <div id="errorMessage"></div>
            </div>
                <br>
            <div class="formRow">
                <div class="label">
                   <label for="name">Name</label> 
                   
                </div>
                 <div class="field">
                       <input type="text" name="uname" id="uname" />
                       
                   </div>  
            </div>
            <div class="formRow">
                <div class="label">
                   <label for="pass">Password</label> 
                   
                </div>
                <div class="field">
                       <input type="password" name="password" id="password" />
                </div>  
            </div>
              
        </div>
        <div class="signupButton">
            <input type="submit" name="submit" value="Submit" id="submit" onclick="validLogin()"/>
            
            
        </div>
        
        <a href="validator.php" name="link" class="link">New User Register Now</a>
    </div>
    
</body>
</html>
