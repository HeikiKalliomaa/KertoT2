<?php
/* 
1. Unohditko salasanan -linkki (forgotpassword.php) kirjautumislomakkeella (login.php).
2. forgotpassword.php -lomake ja kasittelija_forgotpassword.php 
3. salasanan asettamislinkki (resetpassword.php) ja resetpassword-token sähköpostilla
4. resetpassword.php -lomake ja kasittelija_resetpassword.php
*/
$title = "Unohtunut salasana";
$lomakekentat = ['email'];
$pakolliset = ['email'];
foreach ($lomakekentat as $kentta) $required[$kentta] = in_array($kentta, $pakolliset);

include('asetukset.php');
include('db.php');
include('header.php');
include('posti.php');
include('lomakerutiinit.php');
include('kasittelija_forgotpassword.php');
echo "<br><br><br>";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    body {
        background-image: none !important;
        background-color: khaki;
    }

</style>
<div class="container">

<form method="post" autocomplete="on" novalidate class="needs-validation">
<fieldset>
<legend>Fogotten password</legend>
<?php
input_kentta('email',required:$required['email'],autofocus:true,label:"E-mail address");
?>
<div class="div-button">
<input type="submit" name="painike" class="offset-sm-4 mt-3 mb-2 btn btn-primary" value="Send Link">  
</div>
</fieldset>
</form>

<div id="ilmoitukset" class="alert alert-<?= $success ;?> alert-dismissible fade show <?= $display ?? ""; ?>" role="alert">
<p><?= $message; ?></p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

</div>
<?php
include('footer.html');
?>