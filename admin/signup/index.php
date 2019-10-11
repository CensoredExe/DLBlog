<?php
    include_once "../../includes/include.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Base meta tags, dont touch. -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Custom meta tags, change at will. -->
        <title>Digital Leader Blog & News | South Bromsgrove High School</title>
        <meta name="description" content="ENTER DESCRIPTION HERE">
        <meta name="keywords" content="ENTER KEYWORDS HERE">
        <meta name="author" content="Oliver Crowe">

        <!-- Links, CSS, Fonts, Icons and frameworks -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../../css/style.css">

    </head>
    <body>
    <header>
    <nav>
        <div class="row">
            <div class="logo-hold">
                <a href="../../" class="logo">Digital Leaders</a>
            </div>

            <ul class="items-hold">
                <li class="list-li"><a href="#" class="list-a">SBHS</a></li>
                <li class="list-li"><a href="#" class="list-a">FAQ</a></li>
                <li class="list-li"><a href="#" class="list-a">Login</a></li>
            </ul>
        </div>
    </nav>
    </header>
    <div class="form-hold">
    <h2 class="form-title">Signup</h2><br><hr><br>
        <form method="POST">
            <label for="user_name" class="form-label">Whats your name?</label>
            <input type="text" id="user_name" name="user_name" class="form-input" placeholder="eg. John Doe" required>
            <label for="user_email" class="form-label">Whats your email?</label>
            <input type="text" id="user_email" name="user_email" class="form-input" placeholder="eg. john@sbhs.com" required>
            <label for="user_password" class="form-label">Choose a password</label>
            <input type="password" id="user_password" name="user_password" class="form-input" placeholder="***********************" required>
            <button type="submit" name="submit" class="form-button">Signup</button>
        </form>
        <?php 
           if(isset($_POST['submit'])){
               $user_name = htmlspecialchars(mysqli_real_escape_string($_POST['user_name']))
                
           } 
        ?>
    </div>
    <!-- Javascript + JQuery -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    </body>
    
</html>