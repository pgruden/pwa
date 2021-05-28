<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Procjet for PWA" content="Made for a project on TVZ" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" type="image/png" href="slike/fav.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@700&display=swap" rel="stylesheet">

    <title>PWA Project - clanak</title>

</head>

<body>

    <?php
        include 'connect.php';
        define('UPLPATH', 'img/');

        $query = "SELECT * FROM vijesti WHERE id = ".$_GET['id'];
        $result = mysqli_query($dbc, $query);

        $row = mysqli_fetch_array($result);
        
    ?>


    <div class="container-fluid">

        <header class="clanak-naslov">

            <div class="container pt-3 mb-3">
                <?php 
                if($row['kategorija'] == "Sport"){
                    echo'
                    <h4> <span class="square">&#9632;</span>
                    '.$row['kategorija'].' </h4>';
                }
                else if($row['kategorija'] == "Zabava"){
                    echo'
                    <h4> <span class="square1">&#9632;</span>
                    '.$row['kategorija'].' </h4>';
                }
                ?>
            </div>

        </header>

        <div class="container">

            <article class="mt-5 ">

                
            <div class="naslov-vijesti d-flex justify-content-center mt-5 mb-5">


                <h2><?php
                    echo $row['naslov'];
                ?></h2>
            </div>

            <div class="kratki-opis text-center m-auto mb-5">
                <p><?php
                    echo $row['sazetak'];
                ?></p>
            </div>

            <div class="article-slika text-center pt-4 m-auto">
                <?php
                    echo '<img src="img/'.$row['slika'].'".>';
                ?>
            </div>


            <article class="mt-5 ">

                
                <div class="tekst-vijesti m-auto">
                    <div class="vrijeme mb-4"><?php
                    echo $row['datum'];
                    ?></div>
                    <p>
                       <?php
                        echo $row['tekst'];
                       ?>
                    </p> 
                </div>
                
            </article>

            </article>
            

            

            <footer>

                <div class="d-flex justify-content-start mt-5 mb-0">
                    <p ><span>&#169;</span> Petar Gruden, PWA projekt, Tehničko Veleučilište u Zagrebu, 2021</p>
                </div>


            </footer>

        </div>


    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>