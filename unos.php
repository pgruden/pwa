<?php
session_start();
include "header.php";

?>


<section class="mb-5 d-flex justify-content-center">

    <form name="unos" id="unos" class="mt-5" action="skripta.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="naslov">Naslov:</label>
            <input type="text" class="form-control" name="naslov" id="naslov">
        </div>

        <div class="form-group">
            <label for="kratko">Kratki sadržaj vijesti (do 50 znakova):</label>
            <textarea class="form-control" rows="5" name="kratko" id="kratko"></textarea>
        </div>

        <div class="form-group">
            <label for="vijesti">Sadržaj vijesti:</label>
            <textarea class="form-control" rows="5" name="vijesti" id="vijesti"></textarea>
        </div>

        <div class="form-group">
            <label for="Slika">Slika</label>
            <input type="file" accept="image/jpg,image/gif,image/png" class="form-control-file" name="slika" id="slika">
        </div>

        <div class="form-group">
            <label for="kategorija">Kategorija:</label>
            <select class="form-control" name="kategorija" id="kategorija">
                <option>Sport</option>
                <option>Zabava</option>
            </select>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="arhiva" id="arhiva">
            <label class="form-check-label" for="arhiva">Spremiti u arhivu</label>
        </div>

        <div class="mt-3">
            <button type="reset" class="btn btn-danger">Poništi</button>
            <button type="submit" id="posalji" name="posalji" class="btn btn-primary">Pošalji</button>
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