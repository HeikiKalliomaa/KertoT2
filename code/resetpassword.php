<?php 
echo "<br><br><br>";
$title = 'New Password';
//$css = 'kuvagalleria.css';
$js = "../scripts/salasanatarkistus.js";
$lomakekentat = ['password','password2'];
$pakolliset = ['password','password2'];
foreach ($lomakekentat as $kentta) $required[$kentta] = in_array($kentta, $pakolliset);
include "asetukset.php";
include "db.php";
include "header.php";
include 'lomakerutiinit.php';
include "kasittelija_resetpassword.php";
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

<?php if (!$message) { ?>    
<form method="post" class="mb-3 needs-validation salasanat" novalidate>
<fieldset>
<legend>Uusi salasana</legend>
<?php
input_kentta('password',type:'password',required:$required['password'],label:'Salasana');
input_kentta('password2',type:'password',required:$required['password2'],label:'Salasana uudestaan');   
?>
<div class="div-button">
<input type="submit" name="painike" class="offset-sm-4 mt-3 mb-2 btn btn-primary" value="Tallenna salasana">  
</div>
</fieldset>

</form>
<?php } ?>
<div  id="ilmoitukset" class="alert alert-<?= $success ;?> alert-dismissible fade show <?= $display ?? ""; ?>" role="alert">
<p><?= $message; ?></p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<p>
<a href="forgotpassword.php" class="<?= $display ?? ""; ?>">Pyydä salasanan uusiminen uudestaan</a>
</p>
</div>
<?php include "footer.html"; ?>