<?php

	error_reporting(0);
	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";
	$mailPattern='/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
	$phoneNumberPattern="/^\+[\d]{3}(\-){0,1}[\d]{2}(\-){0,1}[\d]{3}(\-){0,1}[\d]{2}(\-){0,1}[\d]{2}(\-){0,1}$/";
	$match="Not checked yet.";
	$isEmail="Not sure yet.";
	$isPhoneNumber="Not sure yet";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$pattern=$_POST["pattern"];
	$text=$_POST["text"];
	$replaceText=$_POST["replaceText"];

	$replacedText=preg_replace($pattern, $replaceText, $text);

	if(preg_match($pattern, $text)) {
						$match="Match!";
					} else {
						$match="Does not match!";
					}
	if(preg_match($mailPattern, $text)){
				$isEmail="it is a valid email address!";
	} else {
				$isEmail="it is not a valid email !";
	}

	if(preg_match($phoneNumberPattern, $text)){
				$isPhoneNumber="it is a valid Phone number !";
	} else {
				$isPhoneNumber="it is not a valid Phone Number !";
	}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>
			<dt>Results:</dt>
			<dd> <?=$isEmail ?></dd>
			<dd> <?=$isPhoneNumber ?></dd>
			
			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>
