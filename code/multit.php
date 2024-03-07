<?php
if (!session_id()) session_start();
// include "debuggeri_simple.php";
include "header.php";
include_once("asetukset.php");
include "db.php";


$user_a = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/multit.css">
    

</head>
<body>
    <div class="container">
        <div class="multiTable">
            <div class="multi-screen">
                <p1>0</p1>
                <p2>0</p2>
            </div>
            <div class="buttons">
                <div class="btn nine bg-grey">9</div>
                <div class="btn eight bg-grey">8</div>
                <div class="btn seven bg-grey">7</div>

                <div class="btn six bg-grey">6</div>
                <div class="btn five bg-grey">5</div>
                <div class="btn four bg-grey">4</div>

                <div class="btn three bg-grey">3</div>
                <div class="btn two bg-grey">2</div>
                <div class="btn one bg-grey">1</div>

                <div class="btn zero bg-grey">0</div>
                <div class="btn enter bg-orange">Enter</div>
            </div>
        </div>
        <div class="results">
            <div class="results-screen">
                <p></p>
            </div>
            <div class="results-buttons">
                <div class="butn new">New</div>
                <div class="butn rank">Ranking</div>
                <div class="butn exit">Exit</div>
            </div>    
        </div> 
    </div> 
    <?php
// if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['usera']==='usera')) {
//     $queri = "SELECT results.points, users.firstname, users.lastname
//     FROM results
//     INNER JOIN users ON results.users_id = users.id
//     ORDER BY results.points DESC";
//     $result = query_oma($yhteys, $queri);
//         if ($result->num_rows > 0) {
//         echo "<table><tr><th>Points</th><th>Firstname</th><th>Lastname</th></tr>";
//         while($row = $result->fetch_assoc()) {
//             echo "<tr><td>" . $row["points"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td></tr>";
//         }
//         echo "</table>";
//         echo "<script>";
//         echo "var out3 = document.querySelector('.results-screen p');";
//         echo "out3.innerHTML = '" . $output . "';";
//         echo "</script>";
//         }
// }
?>  
    <script>
        var user_a = <?php echo json_encode($user_a); ?>;
    </script>  
    <script src="../scripts/multit.js"></script>

</body>
</html>
