<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
    <head>
        <title>Profile Page</title>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <a id="logout" class= "float-right" href="login.php">LOGOUT</a>
            <h1> WELCOME <?php echo $_SESSION['username']; ?> !!</h1>
        </div>
    </body>

</html>