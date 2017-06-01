<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
	
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/csslogin/style.css">

  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
			<form action="<?php echo base_url()."index.php/login/do_login" ?>" method="POST">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="username">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button class="btn btn-primary btn-large btn-block">login
				</button>
				</form>
			</div>
		</div>
	</div>
</body>
  
  
</body>
</html>
