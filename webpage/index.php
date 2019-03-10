
<?php 

	error_reporting(0);
	$name=$_REQUEST["name"];
	$gender=$_REQUEST["gender"];
	$birthdate=$_REQUEST["birthdate"];
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$password1=$_REQUEST["password1"];
	$email=$_REQUEST["email"];
	

	$isPost= $_SERVER["REQUEST_METHOD"]=="POST";
	$isGet = $_SERVER["REQUEST_METHOD"]=="GET";

	$isNameError=$isPost && (strlen($name)!=2); 
	$isGenderError=$isPost && !$gender;
	$isBirthdateError=$isPost && !$birthdate;
	$isUsernameError=$isPost && !$username;
	$isPasswordError=$isPost && !$password || ($password!=$password1);

	$isFormError=$isNameError || $isGenderError || $isBirthdateError || $isUsernameError || $isPasswordError;



 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	<style media="screen">
      .error {
        color: red;
      }
    </style>

	</head>
	
	<body>


	<?php  if($isGet || $isFormError) { ?>

		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>

		<form action="index.php" method="post">
  			
			<fieldset> 
				<legend> Some personal info here:</legend> 
					<input type="text" name="name" value="<?= $name ?>" required> Name <br /> 
					<span class="error"><?= $isNameError?"Name should be at least 2 characters!" : "" ?></span><br />
					
					<input type="text" name="birthdate" value="<?= $birthdate ?>"> Date of birth<br /> <br />
					Your Gender: 
					<input type="radio" name="gender" value="<?=$gender ?>"  required> M (male)  
					<input type="radio" name="gender" value="<?=$gender ?>"  required> F(female)  <br /> <br />
					
					
					Your Marital Status:
					<select name="status">
    					<option value="single">Single</option>
   						<option value="married">Married</option>
   						<option value="divorced">Divorced</option>
    					<option value="widowed">Widowed</option>
  					</select>  

					

		</fieldset>

				&nbsp;
			
			<fieldset>	<legend> Username & Password </legend>

					<input type="text" name="username" value="<?= $username?>"  required> Username<br /><br />
					<input type="password" name="password" value="<?= $password ?>"  required> Password<br /> <br />
					<input type="password" name="password1" value="<?= $password1 ?>"  required> Confirm Password<br /> <br />

					<input type="text" name="email" value="<?= $email ?>" required> Email<br /> <br />


			</fieldset>
			
			
		
		
  <input type="submit">
</form>


<?php } else { ?>
	<h1>Thank you for your submission. Your info as following</h1>
	<ul>
		<li> Your Name:  <?=  $name ?></li>
		<li> Your Gender:  <?=  $gender ?></li>
		<li> Your Birthdate:  <?=  $birthdate ?></li>
		<li> Your Email:  <?=  $email ?></li>
	</ul>
	
    
    <?php } ?>
		
		
			</body>
</html>