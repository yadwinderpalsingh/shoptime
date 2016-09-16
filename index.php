<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
        header("Location: /shoptime/home/");
    }
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>

    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
    <meta charset="utf-8">
    <title>Shoptime | it's the right time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- ==============================================
		CSS
    =============================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover">
                <img src="assets/images/logo.png" class="img-responsive logo" alt="shoptime" />
                <form id="login-form" action="assets/js/authentication.php" method="post">
                    <div class="input-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-arrow-right"></i></button>
                        </span>
                    </div>
                    <span class="error-message">User name needs to be entered</span>
                </form>
            </div>
            <div class="footer">
                <div class="inner">
                    <p>shoptime by <a target="_blank" href="http://yadwindersingh.net">@yadwinder</a></p>
                </div>
            </div>
        </div>
    </div>


    <!-- ==============================================
		SCRIPTS
		=============================================== -->

    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.php"></script>

</body>

</html>