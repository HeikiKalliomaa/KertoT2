
<?php
$title = "Rekisteröityminen";
$js = "../scripts/rekisterointi.js";
$lomakekentat = ['firstname', 'lastname', 'email', 'password', 'mobilenumber'];
$pakolliset = ['firstname', 'lastname', 'email', 'password'];
 
include 'asetukset.php';
include 'db.php';
include 'header.php';
include 'lomakerutiinit.php';
include 'posti.php';
include 'rekisterointi.php';
echo "<br><br><br>";
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    body {
        background-image: none !important;
        background-color: cornsilk;
    }
</style>
<div class="container" id="root">
<form id="rekisterointilomake" class="mb-3 needs-validation" novalidate action="rekisterointilomake.php" method="post" enctype="multipart/form-data">

<fieldset>
<legend>Registration</legend>
<?php 
foreach ($lomakekentat as $kentta) {
    $required[$kentta] = in_array($kentta, $pakolliset) ? true : false;
    }
debuggeri($required);    
input_kentta('firstname',required:$required['Firstname'],autofocus:true);
input_kentta('lastname',required:$required['Lastname']);
input_kentta('email',required:$required['Email']);
input_kentta('mobilenumber',required:$required['Mobilenumber']);
input_kentta('password',type:"password",required:$required['Password']);
input_kentta('password2',type:"password",required:$required['password'],label:"Retype Password");
?>
<div class="col-11 d-flex justify-content-end mt-4">
<button name='button' class="btn btn-primary me-4" type="submit">Register</button>
</div>
</fieldset>
</form>

<?php   
if (isset($_GET['message']) && isset($_GET['success'])) {
    $display = "";
    $message = $_GET['message'];
    $success = $_GET['success'];
    ?>
    <div id="ilmoitukset" class="alert alert-<?= $success ;?> alert-dismissible fade show <?= $display ?? ""; ?>" role="alert">
    <p><?= $message; ?></p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php   
}
?>
</div>
<?php
include "footer.html";
?>

