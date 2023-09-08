<?php 

include_once('helpers/urls.php');
require_once("data/post.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwlBooks</title>

    <!-- JQUERY -->
    <script src="<?php echo $BASE_URL ?>/js/jquery.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/globals.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a id="logo" href="<?php echo $BASE_URL ?>"><img src="<?php echo $BASE_URL ?>/images/owl_logo.png" alt=""></a>
        <button id="hamburguer">
            <div class="menu-bar"></div>
            <div class="menu-bar"></div>
            <div class="menu-bar"></div>
        </button>
        <nav id="navbar">
            <ul>
                <li><a class="nav-link" href="<?php echo $BASE_URL ?>">Home</a></li>
                <li><a class="nav-link" href="#">Categories</a></li>
                <li><a class="nav-link" href="">About</a></li>
                <li><a class="nav-link" href="<?php echo $BASE_URL ?>contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
