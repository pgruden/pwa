<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Procjet for PWA" content="Made as a project on TVZ" />

    <title>PWA Project</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="validacija.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" type="image/png" href="slike/fav.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@700&display=swap" rel="stylesheet">


</head>

<body>

    <?php

        include 'connect.php';
        define('UPLPATH', 'img/');
    ?>
    

    <div class="container-fluid">

        <div class="container">

            <header>

                <div class="logo p-5 d-flex justify-content-center">
                    <a href="index.php">
                        <h1>PWA Projekt</h1>
                    </a>
                </div>

                <nav class="navbar d-flex justify-content-between">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategorija.php?kategorija=sport">SPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategorija.php?kategorija=zabava">ZABAVA</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="administracija.php">ADMINISTRACIJA</a>
                        </li>
                     

                    </ul>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="unos.php">UPLOAD</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link pr-0" href="login.php">LOGIN</a>
                        </li>
                    </ul>

                </nav>

            </header>