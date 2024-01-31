<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">        
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
        <!--jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
        <title>Meditatii</title>
    </head>
    <body>
        <header> 
        <ul class="navbar">
		<li><a href="index.php"><img src="images/logo-no-background.png" alt="logo"></a></li>
		<li><a href="calendar.php" data-hover="Calendar" class="animated">Calendar</a></li>
		<li><a href="homework.php" data-hover="Teme" class="animated">Teme</a></li>
		<li><a href="search.php" data-hover="Cauta" class="animated">Cauta</a></li>
		<?php  if ($_SESSION['username']=='admin') : ?>
			<li><a href="meditatii.php" data-hover="Meditatii" class="animated">Meditatii</a></li>
        <?php endif ?>
		<?php  if ($_SESSION['username']!='admin') : ?>
			<li><a href="oferte.php" data-hover="Oferte" class="animated">Oferte</a></li>
        <?php endif ?>
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<li> <a href="index.php?logout='1'" data-hover="Logout" class="animated">Logout</a> </li>
        <?php endif ?>
    </ul>
        </header>
        <div class="page-content">
            <!-- <div class="search-wrapper">
                <input type="search" id="search" data-search placeholder="Cauta un profesor">
                <img src="images/search.png" alt="search" >
            </div> -->
        
            <!-- <div class="user-cards" data-user-cards-container></div>
            <template data-user-template>
                <div class="card">
                    <div class="header" data-header></div>
                    <div class="body" data-email></div>
                    <div class="body" data-subject></div>
                </div>
            </template> -->

            <div class="container" style="width:900px;">
                    <select name="" id="">
                        <!-- <input type="text" name="search" id="search" placeholder="Cauta dupa nume sau materie" class="form-control live-search" > -->
                        <option value="" disabled selected>Oras</option>
                    </select>
            </div>


        </div>

       
        
        <footer>
            <p>
                Footer
            </p>
        </footer>

        <script>
            $(document).ready(function(){
            $.ajaxSetup({ cache: false });
            $('#search').keyup(function(){
                $('#result').html('');
                $('#state').val('');
                var searchField = $('#search').val();
                var expression = new RegExp(searchField, "i");
                
                $.getJSON('teachers.json', function(data) {
                $.each(data, function(key, value){
                    if (value.subject.search(expression) != -1){
                        $('#result').append('<option class="list-group-item link-class" style="color: black; background-color:white;">'+value.subject+'</option>');
                    }
                });   
                });
            });
            
            $('#result').on('click', 'li', function() {
            var click_text = $(this).text().split('|');
            $('#search').val($.trim(click_text[0]));
            $("#result").html('');
            });
            });
        </script>
    </body>
</html>