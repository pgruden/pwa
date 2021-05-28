<?php
session_start();

include "header.php";

?>


<section class="mb-5 d-flex justify-content-center">

    <form name="login" id="login" class="mt-5" action="administracija.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="username">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>

        <div class="mt-3 d-flex justify-content-center ">
            <button type="submit" id="prijava" name="prijava" class="btn btn-primary">Prijava</button>
        </div>

        <div class="mt-1 d-flex justify-content-center ">
            <a href="registracija.php">Register</a>
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