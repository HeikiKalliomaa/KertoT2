<?php
if (!session_id()) session_start();
include "debuggeri_simple.php";
/* Huom. suojatulla sivulla on asetukset,db,rememberme.php; */
if (!isset($loggedIn)){
  //include "db.php";
  include "rememberme.php";
  $loggedIn = loggedIn();
  }
debuggeri("loggedIn:$loggedIn"); 
$active = basename($_SERVER['PHP_SELF'],'.php');
function active($sivu,$active){
    return $active == $sivu ? 'active' : '';  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <div class="mobile-menu-btn">
        <img src="../images/burger-bar.png" alt="mobile-menu-btn">
    </div>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="../styles/reset.css">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/header.css">
</head>
<body>
    <header class="header-main">
        <nav>
            <a href="../index.php" class="logo">
                <img src="../images/logo2.png" alt="Heiki Logo">
            </a>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="multit.php">Multiply</a>
                    <ul>
                        <li><a href="multit.php">Multiply</a></li>
                        <li><a href="calc.php">Calculator</a></li>
                        <li><a href="login.php">Login</a></li>  
                        <li><a href="poistu.png">Logout</a></li>
                    </ul>
                </li>

                <li><a href="rekisterointilomake.php">Register</a></li>
                <li><a href="login.php">Login</a></li>  
                <li><a href="poistu.php">Logout</a></li> 
            </ul>
        </nav>
        <div class="SearchLang">
            <form action="" method="post">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit"><img src="../images/search.png" alt="search button"></button>
            </form>                
            <!-- <div class="lang">
                
                    <select id="flagDropdown" onchange="changeFlag(this.value)">
                        <option value="../images/flag/gb.png"> <img src="../images/flag/gb.png" alt="Flag 1"> </option>
                        <option value="../images/flag/de.png"> <img src="../images/flag/de.png" alt="Flag 2"> </option>
                        <option value="../images/flag/ee.png"> <img src="../images/flag/ee.png" alt="Flag 3"> </option>
                        <option value="../images/flag/fi.png"> <img src="../images/flag/fi.png" alt="Flag 4"> </option>
                    </select> -->

                    <!-- <script>
                        function changeFlag(value) {
                            var flagImage = document.getElementById("flagImage");
                            flagImage.src = value;
                        }

                        function submitForm() {
                            var dropdown = document.getElementById("flagDropdown");
                            var selectedValue = dropdown.value;
                            changeFlag(selectedValue);
                    }
                    </script>
               -->
        </div>
    </header>
<?php
include "footer.php";
?>
</body>
<script src="../scripts/mobile-nav.js"></script>
</html>
