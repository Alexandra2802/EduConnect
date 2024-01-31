<?php include('../connection/server.php') ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>EduConnect</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 

</head>
<body>
	<br><br><br>
<div class="form-container" style="margin-top:200px; margin-bottom:200px;">
	<div class="form-header">
		<br><br>
        <h2>CONT NOU</h2>
    </div>
	<form method="post" action="register.php" name="form" >
		<?php include('../errors.php'); ?>
		<div class="form-control">
			<label>Nume de utilizator</label>
			<input type="text"  name="username" value="<?php echo $username; ?>">
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="container">
				<div class="col-md-3 form-control">
					<div class="selectdiv">
					<select name="county" id="main-menu" >
						<option value="" class="custom-select" disabled selected>Judet</option>
					</select>
					</div>
				</div>
				<div class="col-md-3 form-control">
					<div class="selectdiv">
					<select name="city" id="sub-menu">
						<option value="" disabled selected>Oras</option>
					</select>
					</div>
					
				</div>
		</div>

		<div class="container">
            <div>
                <input type="text" name="subject" id="search" placeholder="Materie" class="live-search" >
            </div>
            <ul class="list-group" id="result">

            </ul>
        </div>
		<br>
		<br>

		<div class="form-control">
			<label>Parola</label>
			<input type="password" name="password_1">
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label>Confirmare parola</label>
			<input type="password" name="password_2">
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control" style="text-align: center;">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p style="text-align: center;">
			Esti deja membru? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>
<br><br><br><br><br><br><br><br><br>
<script src="../scripts/dynamicDropdown.js"></script>
<script src="../scripts/liveSearch.js"></script>
<script src="../scripts/login.js"></script>
</body>
</html>