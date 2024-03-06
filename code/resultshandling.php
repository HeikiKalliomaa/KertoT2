<?php
// include_once("asetukset.php");
include "debuggeri_simple.php";
include ("db.php");
debuggeri("L5 Session id in resultshandling.php: " . session_id());
debuggeri("L6 Session userid in resultshandling.php: {$_SESSION['userid']}");
debuggeri("L7email in resultshandling.php: {$_SESSION['email']}");
if (!session_id()) session_start();
debuggeri("L9 Session id in results handling: " . session_id());
debuggeri("l10 Session userid in results handling: {$_SESSION['userid']}");
debuggeri("L11email in results handling: {$_SESSION['email']}");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (is_numeric($_POST['points']) && isset($_SESSION["userid"]) && is_numeric($_POST['timeUsed']) && is_numeric($_POST['right'])) {
        $points = $_POST['points'];
        $user_id = $_SESSION["userid"];
        $time_used = $_POST['timeUsed'];
        $correct = $_POST['right'];
        
        debuggeri("Tarkistus resulthandling line 16: points: $points, user_id: $user_id, time_used: $time_used, correct: $correct");
        
        $query = "INSERT INTO results (points, users_id, usedtime, correct) VALUES ($points, $user_id, $time_used, $correct)";
        debuggeri("Tarkistus resulthandling line 22: query " . $query);
        $result = query_oma($yhteys, $query);
        debuggeri("Tarkistus resulthandling line 24: result " . $result);
        if ($result) {
            echo "Tallennus onnistui";
            debuggeri("Tallennus onnistui");
        }
        else {
            echo "Tallennus epäonnistui";
            debuggeri("Tallennus epäonnistui");
        }
    }
}  




    //     $query = "INSERT INTO results (points, user_id, time_used, correct) VALUES (?, ?, ?, ?)";
    //     $stmt = $yhteys->prepare($query);
    //     $stmt->bind_param("didi", $points, $user_id, $time_used, $correct);
    //     $result = $stmt->execute();
    //     if ($result) {
    //         echo "Tallennus onnistui";
    //         debuggeri("Tallennus onnistui");
    //     }
    //     else {
    //         echo "Tallennus epäonnistui";
    //         debuggeri("Tallennus epäonnistui");
    //     }
    // }}



//         $query = "INSERT INTO results (points, user_id, time_used, correct) VALUES ($points, $user_id, $time_used, $correct)";
//         $result = query_oma($yhteys, $query);
//         debuggeri("Tarkistus resulthandling line 19: result" . $result);
//         if ($result) {
//             echo "Tallennus onnistui";
//             debuggeri("Tallennus onnistui");
//         }
//         else {
//             echo "Tallennus epäonnistui";
//             debuggeri("Tallennus epäonnistui");
//         }
//     }
// }    


//         $query = "INSERT INTO results (points, user_id, time_used, correct) VALUES (?, ?. ?. ?)";
//         $stmt = $yhteys->prepare($query);
//         $stmt->bind_param("didi", $points, $user_id, $time_used, $correct);
//         $result = $stmt->execute();
//         if ($result) {
//             echo "Tallennus onnistui";
//             debuggeri("Tallennus onnistui");
//         }
//         else {
//             echo "Tallennus epäonnistui";
//             debuggeri("Tallennus epäonnistui");
//         }
//         $stmt->close();
// }}