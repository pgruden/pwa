<?php
    session_start();
    
    include 'connect.php';

    if(isset($_POST['posalji'])){

        $slika = $_FILES['slika']['name'];
        $naslov=$_POST['naslov'];
        $kratko=$_POST['kratko'];
        $vijesti=$_POST['vijesti'];
        $kategorija=$_POST['kategorija'];
        $datum=date('d.m.Y.');
        if(isset($_POST['arhiva'])){
            $arhiva=1;
        }else{
            $arhiva=0;
        }
        //ne prikazuj ako je arhivirano
      
        
        //premjesti fajl u dir "img"
        $target_dir = 'img/'.$slika;
        move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);

        // upload u bazu
        $query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$datum', '$naslov', '$kratko', '$vijesti', '$slika',
        '$kategorija', '$arhiva')";
        $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    
       
        mysqli_close($dbc);

        header('Location: index.php');

}    
?>

