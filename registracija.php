<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$basename = "projekt";

// Create connection
$dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error connecting to MySQL server.'.mysqli_connect_error());
mysqli_set_charset($dbc, "utf8");

 //Check connection
if (!$dbc) {
  echo "Error accessing database!";
}
 
if (isset($_POST["register"])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $username = $_POST['username'];
    $lozinka = $_POST['password'];
    $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
    $razina = 0;
    $registriranKorisnik = '';
    //Provjera postoji li u bazi već korisnik s tim korisničkim imenom
    $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
    $stmt = mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    if (mysqli_stmt_num_rows($stmt) > 0) {
        $msg = 'Korisničko ime već postoji!';
    } else {
        // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika u bazi pazeći na SQL injection
        $sql = "INSERT INTO korisnik (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param(

                $stmt,
                'ssssd',
                $ime,
                $prezime,
                $username,
                $hashed_password,
                $razina
            );
            mysqli_stmt_execute($stmt);
            $registriranKorisnik = true;
        }
    }
    mysqli_close($dbc);
}

?>
<?php

if (isset($_POST["register"])) {
    if ($registriranKorisnik == true) {
        echo '
            <p style= "position:absolute;right:422px;top:20px;">Korisnik je uspješno registriran!</p>        
        ';
    }else{
        echo '<p style= "position:absolute;right:422px;top:20px;">Neuspjela registracija</p>  ';
    }
}

?>

<?php

include "header.php";

?>



<section class="mb-5 d-flex justify-content-center">

    <form name="registracija" id="registracija" class="mt-5" action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="ime">Ime:</label>
            <input type="text" class="form-control" name="ime" id="ime">
        </div>

        <div class="form-group">
            <label for="prezime">Prezime:</label>
            <input type="text" class="form-control" name="prezime" id="prezime">
        </div>

        <div class="form-group">
            <label for="username">Korisničko ime:</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="form-group">
            <label for="password">Lozinka:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <label for="password2">Ponovite lozinku:</label>
            <input type="password" class="form-control" name="password2" id="password2">
        </div>



        <div class="mt-3 d-flex justify-content-center ">
            <button type="submit" id="register" name="register" class="btn btn-primary">Register</button>
        </div>
    </form>

</section>


<footer>

    <div class="d-flex justify-content-center">
        <p><span>&#169;</span> Petar Gruden, PWA projekt, Tehničko Veleučilište u Zagrebu, 2021</p>
    </div>

</footer>

</div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>