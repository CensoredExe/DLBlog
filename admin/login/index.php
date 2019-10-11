<?php
    include_once "../../includes/include.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        echo "<script>window.location = '../'</script>";
    }
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
                <li class="list-li"><a target="_blank" href="https://www.southbromsgrove.worcs.sch.uk/" class="list-a">SBHS</a></li>
                <li class="list-li"><a href="#" class="list-a">FAQ</a></li>
                <li class="list-li"><a href="../signup/" class="list-a">Signup</a></li>
            </ul>
        </div>
    </nav>
        
    </header>
    <div class="form-hold">
    <h2 class="form-title">Login</h2><br><hr><br>
        <form method="POST">
            <label for="user_email" class="form-label">Whats your email?</label>
            <input type="text" id="user_email" name="user_email" class="form-input" placeholder="eg. john@sbhs.com" required>
            <label for="user_password" class="form-label">Choose a password</label>
            <input type="password" id="user_password" name="user_password" class="form-input" placeholder="***********************" required>
            <button type="submit" name="submit" class="form-button">Login</button>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
            $user_password = $_POST['user_password'];
            if(empty($user_email) || empty($user_password)){
                echo "<p class='error'>Error, empty fields.</p>";
                exit();
            }
            $sql = "SELECT * FROM `users` WHERE `user_email`='$user_email'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){
                while($row = mysqli_fetch_assoc($result)){
                    if(password_verify($user_password, $row['user_password'])){
                        // Credentials are correct
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['user_email'] = $row['user_email'];
                        $_SESSION['user_bio'] = $row['user_bio'];
                        $_SESSION['user_pfp'] = $row['user_pfp'];
                        $_SESSION['isRoot'] = $row['isRoot'];
                        echo "<script>window.location = '../'</script>";
                    }else {
                        // Credentials incorrect
                        echo "<p class='error'>Error, password is wrong.</p>";
                    }
                }
            }else {
                echo "<p class='error'>Error, account doesnt exist.</p>";
            }
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