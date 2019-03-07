<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" value="<?= $pattern ?>"></dd>
			</dd>
			
			<dt>Email</dt>
			<dd>
				<input type="text" name="email" value="<?= $pattern ?>"></dd>
			</dd>
		</dl>
		
		<div>
			Register
		</div>
	</body>
</html>