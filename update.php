<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
</style>
</head>
<body>
<header>
<ul class="navbar">
		<li><a href="index.php"><img src="images/logo-no-background.png" alt="logo"></a></li>
		<li><a href="calendar.php" data-hover="Calendar" class="animated">Calendar</a></li>
		<li><a href="homework.php" data-hover="Teme" class="animated">Teme</a></li>
		<li><a href="search.php" data-hover="Cauta" class="animated">Cauta</a></li>
		<?php  if ($_SESSION['username']=='admin') : ?>
			<li><a href="meditatii.php" data-hover="Admin" class="animated current">Admin</a></li>
        <?php endif ?>
		<?php  if (isset($_SESSION['username'])) : ?>
			<li> <a href="index.php?logout='1'" data-hover="Logout" class="animated">Logout</a> </li>
        <?php endif ?>
    </ul>
</header>


<?php

include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `tutoring_sessions` WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>

    

<div class="center">
        <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
        <div class="input-container">
        <label for="name">NUME</label>
        <input type="text" id="name" value="<?php echo $data['teacher_name'] ?>" name="name"  class="table-input"><br>
        <label for="subject">MATERIE</label>
        <input type="text" id="subject"  value="<?php echo $data['subject'] ?>" name="subject"  class="table-input"><br>
        <label for="duration">DURATA</label>
        <input type="text" id="duration" value="<?php echo $data['duration'] ?>" name="duration"  class="table-input"><br>
        <label for="price">PRET</label>
        <input type="text" id="price" value="<?php echo $data['price'] ?>" name="price"  class="table-input"><br>
        <label for="contact">CONTACT</label>
        <input type="text" id="contact" value="<?php echo $data['contact'] ?>" name="contact"  class="table-input"><br>
        
        <br>
        <input type="hidden" name="Id"  value="<?php echo $data['id'] ?>">
        <button type="submit" name="update" class = 'add-btn'>Update</button>
        </div>
        </form>
    </div>
        </div>




       

    </body>    
</html>
