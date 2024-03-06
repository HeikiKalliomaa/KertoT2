<?php 
if (!session_id()) session_start();
include "asetukset.php";
include "db.php";
include "rememberme.php";
$loggedIn = secure_page();
$title = 'Profiili';
$css = 'profiili.css';
include "header.php"; 
?>
<style>
    body {
        background-image: none !important;
        background-color: gainsboro;
    }
</style>
<div class="container">
<!-- Kuva ja perustiedot -->
<img src="../images/multiply.jpg" alt="Profiilikuva" class="profile-image">
<div class="info-section">
    <div class="info-title">Welcome to practise Multiplication Table!</div>
    <?php
        echo "<br> Your user id: " . $_SESSION["userid"];
        echo "<br>E-mail: " . $_SESSION["email"];  
    ?>
</div>





    <!-- <div>
</div>
<div class="info-section">
    <div class="info-title">Ammatti:</div>
    <div>Ohjelmistokehittäjä</div>
</div>
 Yhteystiedot -->
<!-- <div class="info-section">
    <div class="info-title">Yhteystiedot:</div>
    <div>Nimi</div>
    <div>$fistname</div>
</div> -->
<!-- Harrastukset -->
<!-- <div class="info-section">
    <div class="info-title">Harrastukset:</div>
    <ul class="hobbies-list">
    <li>Koodaus</li>
    <li>Valokuvaus</li>
    <li>Matkustelu</li>
    <li>Golf</li>
    </ul> -->
</div>
</div>
