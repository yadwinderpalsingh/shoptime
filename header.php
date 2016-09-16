<?php
    session_start();
    
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $active = $components[2];

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
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- ==============================================
		CSS
        =============================================== -->
        
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">

    </head>

    <body>

        <header>
            <div class="topbar">
                <div class="container">
                    <ul>
                        <?php 
                            if((isset($_SESSION['username']) && $_SESSION['username'] != '')){
                                echo '<li><a style="pointer-events: none"><i class="fa fa-user"></i> ' . $_SESSION["username"] . '</a></li><li><a href="../assets/js/logout.php">Sign out</a></li>';
                            }
                            else{
                                echo '<li><a href="../">Login</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../home/"><img src="../assets/images/logo.png" /></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li <?php if($active == 'home') {echo 'class="active"';} ?>><a href="../home/">Home</a></li>
                            <?php
                                echo '<li ';
                                if($active == 'men') {echo 'class="active"';} 
                                echo '><a href="../men/">Men</a></li><li ';
                                if($active == 'women') {echo 'class="active"';} 
                                echo '><a href="../women/">Women</a></li><li ';
                                if($active == 'kids') {echo 'class="active"';} 
                                echo '><a href="../kids/">Kids</a></li>';
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>