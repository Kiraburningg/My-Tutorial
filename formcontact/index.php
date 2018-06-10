<?php 
	$msg = '';
	$msgClass ='';

if(filter_has_var(INPUT_POST, 'submit')){
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	if(!empty($email) && !empty($name) && !empty($message)){

		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			$msg = 'please use valid email';
			$msgclass = 'alert-danger';
		}
		else{
			$toEmail = 'kiraburning12345@gmail.com';
			$subject = 'Contact Request Form' . $name;
			$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>' . $name . '</p>
					<h4>Email</h4><p> ' . $email . '</p>
					<h4>Message</h4><p> ' . $message . '</p> ';

					$headers ="MIME-version: 1.0" . "\r\n";
					$headers .="Content-Type: text/html; charset=UTF=8" . "\r\n";

					$headers .="From: " .$name. "<" .$email. ">" . "\r\n";

					if(mail($toEmail, $subject, $body, $headers)){
						$msg = 'Email Sent';
						$msgclass = 'alert-success';
					}
					else{
						$msg = 'Email not Sent';
						$msgClass = 'alert-danger';
					}
		}
	}
	else{
		$msg = 'Please fill in all fields';
		$msgClass = 'alert-danger';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>

	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
	  			<a class="navbar-brand" href="#">My Website</a>
	  		</div>
		</nav>
	    
	    <div class="container">
		<?php if($msg != ''): ?>
			<br>
			<div class="alert <?php echo $msgClass; ?>"><?php echo "$msg"; ?></div>
	    <?php endif; ?>
	    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	    	<div class="form-group">
	    		<label>Name: </label>
	    		<input type="name" name="name" class="form-control" placeholder="Enter Name">
	    	</div>
	    	<div class="form-group">
	    		<label>Email: </label>
	    		<input type="email" name="email" class="form-control" placeholder="Enter Email">
	    	</div>
	    	<div class="form-group">
	    		<label>Message: </label>
	    		<textarea name="message" class="form-control"></textarea>
	    	</div>

	    	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	    </form>
    </div>
</body>
</html>