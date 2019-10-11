<?php session_start();include_once "includes/include.php";?>
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
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
    <header>
    <nav>
        <div class="row">
            <div class="logo-hold">
                <a href="#" class="logo">Digital Leaders</a>
            </div>

            <ul class="items-hold">
                <li class="list-li"><a target="_blank" href="https://www.southbromsgrove.worcs.sch.uk/" class="list-a">SBHS</a></li>
                <li class="list-li"><a href="#" class="list-a">FAQ</a></li>
                <?php
                    if(isset($_SESSION['user_id'])){
                        ?>
                        <li class="list-li"><a href="admin/" class="list-a">Account</a></li>
                        <?php
                    }else {
                        ?>
                        <li class="list-li"><a href="admin/login/" class="list-a">Login</a></li>

                        <?php
                    }
                ?>
                
            </ul>
        </div>
    </nav>
        <div class="txt-box">
            <h1 class="title">Digital Leaders</h1>
            <p class="sub-title">Blog and News</p>
        </div>
    </header>

    <!-- Javascript + JQuery -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    </body>
    
</html>