<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<?php
$title = "Login";
$lomakekentat = ['email', 'password','rememberme'];
$pakolliset = ['email', 'password'];
include 'asetukset.php';
include 'db.php';
include 'header.php';
include 'lomakerutiinit.php';
// include 'rememberme.php';
include 'kirjautuminen.php';
echo "<br><br><br>";

?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    body {
        background-image: none !important;
        background-color: lightcyan;
    }
</style>
<div class="container" id="root">
<form id="kirjautuminen" class="mb-3 needs-validation" novalidate method="post">
<fieldset>
<legend>Login</legend>
<?php   
foreach ($lomakekentat as $kentta) {
    $required[$kentta] = in_array($kentta, $pakolliset) ? true : false;
    }
debuggeri($required);    
input_kentta('email',required:$required['email']);
input_kentta('password',type:"password",required:$required['password']);
//input_checkbox('rememberme','checked','Muista minut');
?>
<div class="col-11 d-flex justify-content-end mt-4">
<button name='button' class="btn btn-primary me-4" type="submit">Login</button>
</div>


<div class="row offset-sm-3 mt-3">
<a href="forgotpassword.php">Fogotton Password</a>
</div>

<div class="row offset-sm-3">
<!--<p class="mt-2 pt-1 mb-0">Käyttäjätunnus puuttuu?-->
<a href="rekisterointilomake.php">Register</a>
</div>

</fieldset>
</form>

<div id="ilmoitukset" class="alert alert-<?= $success ;?> alert-dismissible fade show <?= $display ?? ""; ?>" role="alert">
<p><?= $message; ?></p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

</div>


