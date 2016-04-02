<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Form Validation</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="css/fv.css" type="text/css" />
	
        <script src="jquery-1.11.2.js"></script>
        <script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 5){$("#user-result").html('<font color="red"><strong>enter atleast 5 characters</font></strong>').css("float","left");return;}
		
		if(username.length >= 5){
			$("#user-result").html('<img src="imgs/ajax-loader.gif" />');
			$.post('presuccess/check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});
        
      
});
</script>
        
        
        
        
        
        
        
</head>
<body>
	
    
   
	<div id='wrap'>
		
<h1 title='Registration'>Form </h1>
<section class='form'>
    <form  id="register" action="formsuccesspre.php" method="POST" novalidate>

	<fieldset>
	<div class="item">
	<label>
            <span>Name</span>
            <input data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. John f. Kennedy" required="required" type="text" />		
	</label>
		
	</div>

            <br>
            
	
         
            <br>
            
            <div class="item">
            <label>
		<span>UserName</span>
                <input id="username"  data-validate-length-range="5" type="text" name="username" required="required">
            </label>
                
                <div id="user-result"></div>
                
	
	</div>
                       
            <br>
            <br>
            <br>
            <div class="item">
		<label>
		<span>Date</span>
		<input class='date' type="date" name="date" required='required'>
		</label>
		</div>
            <br>
            
            <div class="item">
		<label>
		<span>email</span>
		<input name="email" class='email' required="required" type="email" />
		</label>
            </div>
                                    <br>

                        
		<div class="item">
		<label>
		<span>Confirm email address</span>
		<input type="email" class='email' name="confirm_email" data-validate-linked='email' required='required'>
		</label>
		</div>
		            <br>

	
	<div class="item">
	<label>
	<span>Password</span>
	<input type="password" name="password" data-validate-length-range="4,8" required='required' id="password">
	</label>
	
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="result"></div>
	</div>
                                        <br>
                                        <br>

	<div class="item">
		<label>
	<span>Repeat password</span>
	<input type="password" name="password2" data-validate-linked='password' required='required'>
		</label>
	</div>
                                        <br>
	<div class="item">
	<label>
			<span>Telephone</span>
	<input type="tel" class='tel' name="phone" required='required' data-validate-length-range="8,20">
	</label>
	
	</div>
                                        
                                                    <br>

    <div class="item">
    <label>
        <span>Gender</span>
		<select class="required" name="dropdown">
		<option value="">-- none --</option>
		<option value="Male">MALE</option>
		<option value="Female">FEMALE</option>
                
		</select>
    </label>
	
    </div>
    

    
	
	
	</fieldset>
	<fieldset>
<p>Please fill in all the details correctly</p>
<input name="somethingHidden" required="required" type="text" style='display:none' />
	</fieldset>
	<button id='send' type='submit'>Submit</button>
        &nbsp;&nbsp;
        <button  type="reset" value="reset"> Reset</button>
	</form>
	</section>
	</div>
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/multifield.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/checkpassword.js"></script>
    <script>
    // initialize the validator function
	

	// validate a field on "blur" event, a 'select' on 'change' event & a '.required' classed multifield on 'keyup':
            $('form')
		.on('blur', 'input[required], input.optional, select.required', validator.checkField)
		.on('change', 'select.required', validator.checkField)
		.on('keypress', 'input[required][pattern]', validator.keypress);

            $('.multi.required')
		.on('keyup blur', 'input', function(){
				validator.checkField.apply( $(this).siblings().last()[0] );
			});

		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);

		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;
			// evaluate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();
			return false;
		});

		
	</script>
        
        
        
     
</body>
</html>