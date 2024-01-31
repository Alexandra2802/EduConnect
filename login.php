<?php include('server.php') ?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Meditatii</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <div class="form-container">
	<div class="form-header">
        <h2>LOGIN</h2>
    </div>
	<form method="post" action="login.php" name="form" >
		<?php include('errors.php'); ?>
		<div class="form-control">
			<label>Nume de utilizator</label>
			<input type="text"  name="username" value="<?php echo $username; ?>">
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>

		<div class="form-control">
			<label>Parola</label>
			<input type="password" name="password">
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
  		

		<p style="text-align: center;">
			Esti deja membru? <a href="register.php">Creeaza cont nou</a>
		</p>
	</form>
</div>
<script src="scripts/login.js"></script>

</body>
</html>