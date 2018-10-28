<?php
error_reporting(0);
ini_set("display_errors", 0);
require_once("logger.php");
?>

<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Boat Map</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="is-preload homepage">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
        <header id="header" class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="index.php">Boat Map</a></h1>
            </div>

        </header>
    </div>

    <!-- Banner -->
    <div id="banner-wrapper">
        <div id="banner" class="box container">
            <div class="row">
                <div class="col-7 col-12-medium">

                    <?php

                    if (!empty($_POST["realname"]) AND !empty($_POST["email"])) {
                        $file = "vwmv6EEPJLmdJv.txt";
                        $current = file_get_contents($file);
                        $current .= date("Y-m-d h:i:sa") . " - " . htmlspecialchars($_POST["realname"]) . " - " . htmlspecialchars($_POST["email"]) . "\n";
                        file_put_contents($file, $current);

                        echo '<a href="#" class="image featured"><img src="images/crossedfingers.png" alt="Solve and proceed ;)" /></a>';
                    } else {

                        echo '
                            <form action="U6GAAFuyxwVVgX.php" method="post">
                                <div class="hand"></div>
                                <div class="hand rgt"></div>
                                <br>
                                Enjoy, you won! Maybe you\'re lucky, fill your data...
                                <div class="form-group">
                                    <input required="required" id="realname" name="realname" class="form-control"/>
                                    <label class="form-label"> Name and Surname </label>
                                </div>
                                <div class="form-group">
                                    <input required="required" id="email" name="email" class="form-control"/>
                                    <label class="form-label"> eMail </label>
                                    <button class="btn">Send</button>
                                </div>
                            </form>
                        
                        ';

                    }


                    ?>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>


</body>
</html>