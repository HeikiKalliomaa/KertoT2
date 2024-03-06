<?php 
$title = 'Sähköpostiosoitteen vahvistus';
//$css = 'kuvagalleria.css';
include "asetukset.php";
include "header.php"; 
include "db.php";
include "activation.php";
echo "<br><br><br>";
?>
<style>
    body {
        background-image: none !important;
        background-color: lightcyan;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div class="container"> 
<div class="jumbotron text-center">
<h1>Kertot</h1>
<div class="col-12 mb-5 text-center">
<?php 
echo $email_verified ?: $email_already_verified ?: $activation_error; 
?>
</div>
<!--<p class="lead">If user account is verified then click on the following button to login.</p>-->
<a class="btn btn-lg btn-success" href="<?php echo "http://$PALVELIN/$PALVELU/login.php";?>">Kirjaudu</a>
</div>

</div>
<?php include "footer.html"; ?>